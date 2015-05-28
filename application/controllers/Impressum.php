<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Impressum extends MY_Controller {
  public function index()	{
     $data = array(
      'title'   => 'Impressum',
      'content' =>  $this->load->view('impressum', '', true)
     );
     $this->parser->parse('../../assets/index', $data);
  }  
}
