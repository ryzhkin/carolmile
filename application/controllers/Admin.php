<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
  function __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->library(array('ion_auth','form_validation'));
      $this->load->helper(array('url','language'));

      $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

      $this->lang->load('auth');
      $this->load->library('grocery_CRUD');
  }

  private function renderMenu($menu) {
     $result = '';
     if (count($menu) > 0) {
       $result = '<ul class="nav navbar-nav">';
       foreach ($menu as $m) {
         $result .= '<li class="'.((isset($m['active']) && $m['active'] == true)?'active':'').'"><a href="'.base_url().$m['href'].'">'.$m['title'].'</a></li>';
       }
       $result .= '</ul>';
     }
     return $result;
  }

  private function renderTable($table) {
     $result = '';
     foreach ($table->css_files as $css) {
       $result .= '<link type="text/css" rel="stylesheet" href="'.$css.'" />';
     }
     foreach ($table->js_files as $js) {
       $result .= '<script src="'.$js.'"></script>';
     }
     $result .= '<div style="margin-top: 70px;">'.$table->output.'</div>';
     return $result;
  }


  public function index() {
     if (!$this->ion_auth->is_admin()) {
        redirect(base_url().'admin/login', 'auto');
     } else {
        redirect(base_url().'admin/events', 'auto');
     }
  }

  private function getActiveMenu($activeItem) {
      $menu = array(
          ['title' => 'Events',  'href' => 'admin/events', 'active' => false],
          ['title' => 'Gallery', 'href' => 'admin/gallery', 'active' => false],
          ['title' => 'Logout',  'href' => 'admin/logout']
      );
     foreach ($menu as &$m) {
        if (strtolower(trim($m['title'])) == strtolower(trim($activeItem))) {
          $m['active'] = true;
        }
     }
     return $menu;
  }

  public function events() {
        if (!$this->ion_auth->is_admin()) {
            redirect(base_url().'admin/login', 'auto');
        }
        $this->grocery_crud->set_table('events');
        $this->grocery_crud->required_fields('event_date', 'title', 'poster');
        $this->grocery_crud->set_field_upload('poster','assets/uploads/events');
        $data = array(
            'title'   => 'Admin tools',
            'menu'    => $this->renderMenu($this->getActiveMenu('Events')),
            'content' => $this->renderTable($this->grocery_crud->render()),
        );
        $this->parser->parse('../../assets/admin/index', $data);
  }

  public function gallery() {
        if (!$this->ion_auth->is_admin()) {
            redirect(base_url().'admin/login', 'auto');
        }
        $this->grocery_crud->set_table('gallery');
        $this->grocery_crud->required_fields('title','photo');
        $this->grocery_crud->set_field_upload('photo','assets/uploads/gallery');
        $data = array(
            'title'   => 'Admin tools',
            'menu'    => $this->renderMenu($this->getActiveMenu('Gallery')),
            'content' => $this->renderTable($this->grocery_crud->render()),
        );
        $this->parser->parse('../../assets/admin/index', $data);
  }


  public function login() {
      $this->form_validation->set_rules('identity', 'Identity', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');
      if ($this->form_validation->run() == true) {
          $remember = (bool) $this->input->post('remember');
          if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember)) {
              //if the login is successful
              //redirect them back to the home page
              $this->session->set_flashdata('message', $this->ion_auth->messages());
              redirect(base_url().'admin', 'auto');
          } else {
              //if the login was un-successful
              //redirect them back to the login page
              $this->session->set_flashdata('message', $this->ion_auth->errors());
              redirect(base_url().'admin/login', 'refresh'); //use redirects instead of loading views for compatibility with MY_Controller libraries
          }
      } else {
        $data = array(
          'title'   => 'Please login',
          'menu'    => '',
          'content' =>  $this->load->view('admin/login', array(
             'message'  => (validation_errors()) ? validation_errors() : $this->session->flashdata('message'),
             'identity' => array(
                            'name'  => 'identity',
                            'id'    => 'identity',
                            'type'  => 'text',
                            'value' => $this->form_validation->set_value('identity'),
                            'class' => 'form-control',
                          ),
             'password' => array(
                            'name' => 'password',
                            'id'   => 'password',
                            'type' => 'password',
                            'class' => 'form-control',
                          ),

          ), true)
        );
        $this->parser->parse('../../assets/admin/index', $data);
      }
  }

  public function logout() {
      $logout = $this->ion_auth->logout();
      //redirect them to the login page
      $this->session->set_flashdata('message', $this->ion_auth->messages());
      redirect('admin', 'auto');
  }
}
