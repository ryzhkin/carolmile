<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends MY_Controller {
  public function index()	{
     $data = array(
      'title'   => 'Gallery',
      'content' =>  $this->load->view('gallery', '', true)
     );
     $this->parser->parse('../../assets/index', $data);
  }  
}
