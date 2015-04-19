<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Band extends MY_Controller {
  public function index()	{
     $data = array(
      'title'   => 'Band',
      'content' =>  $this->load->view('band', '', true)
     );
     $this->parser->parse('../../assets/index', $data);
  }  
}
