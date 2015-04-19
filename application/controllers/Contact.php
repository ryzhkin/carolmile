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
       $this->email->to('ryshkin@gmail.com');
       $this->email->subject($this->input->post('subject',''));
       $this->email->message($this->input->post('message',''));
       $this->email->send();
       $result = true;
     } 

     $data = array(
        'title'   => 'Contact',
        'content' =>  $this->load->view('contact', '', true),
        'result'  =>  $result,
     );

     $this->parser->parse('../../assets/index', $data);
  }  
}
