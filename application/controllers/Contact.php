<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {
  public function index()	{
     $data = array(
      'title'   => 'Contact',
      'content' =>  $this->load->view('contact', '', true)
     );
     $this->parser->parse('../../assets/index', $data);
  }  
}
