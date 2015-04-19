<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
  public function index()	{
     // $this->load->view('../../assets/test');
     //$this->load->view('test');
     $data = array(
      'content' => base_url()
     );
     $this->parser->parse('../../assets/index', $data);
  }  
}
