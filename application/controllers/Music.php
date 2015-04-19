<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Music extends MY_Controller {
  public function index()	{
     $data = array(
      'title'   => 'Music',
      'content' =>  $this->load->view('music', '', true)
     );
     $this->parser->parse('../../assets/index', $data);
  }  
}
