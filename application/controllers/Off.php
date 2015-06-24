<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Off extends CI_Controller {
  public function index()	{
     $data = array(
      'title'   => 'Home',
      'content' =>  $this->load->view('off', '', true)
     );
     $this->parser->parse('../../assets/index', $data);
  }  
}
