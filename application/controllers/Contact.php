<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {
  public function index()	{
     //Common::xlog('test', $this->input->post());
     $this->form_validation->set_rules('username', 'Username', 'required');
     $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
     $this->form_validation->set_rules('subject', 'Subject', 'required');
     $this->form_validation->set_rules('message', 'Message', 'required');
     $result = false;
     if ($this->form_validation->run()) {
       $this->email->from($this->input->post('email',''), $this->input->post('username',''));




       $email1 = Common::getParamByName($this->sait_config, 'Отсылать контакты на email №1');
       $email2 = Common::getParamByName($this->sait_config, 'Отсылать контакты на email №2');
       $email3 = Common::getParamByName($this->sait_config, 'Отсылать контакты на email №3');

       if ($email1 !== null) $this->email->to($email1['value']);
       if ($email2 !== null) $this->email->cc($email2['value']);
       if ($email3 !== null) $this->email->bcc($email3['value']);

       $this->email->subject($this->input->post('subject',''));
       $this->email->message($this->input->post('message',''));
       $this->email->send();
       $result = true;
     }

     $data = array(
        'title'   => 'Contact',
        'content' =>  $this->load->view('contact', array('result'  =>  $result), true),
     );

     $this->parser->parse('../../assets/index', $data);
  }  
}
