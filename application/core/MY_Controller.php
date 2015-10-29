<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    public $sait_config = array();

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('ion_auth','form_validation'));
        $this->load->helper(array('url','language'));
        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
        $this->lang->load('auth');
        $this->sait_config = $this->db->query("SELECT * FROM config");
        $this->sait_config = $this->sait_config->result_array();





        if ($this->router->fetch_class() !== 'admin') {
          $off = Common::getParamByName($this->sait_config, 'Сайт включен');
         // Common::xlog('test', $off['value']);
          //Common::xlog('test', in_array($off['value'], array('true', 'да', 'включен', '1', 1, true)));
          if (!in_array($off['value'], array('true', 'да', 'включен', '1'))) {
            //Common::xlog('test', $off);
            redirect(base_url().'off', 'auto');
          }
        }
    }
  /*public function index()	{
    $this->load->view('test');
  } */
}
