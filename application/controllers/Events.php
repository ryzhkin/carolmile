<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends MY_Controller {
  public function index()	{
     $data = array(
      'title'   => 'Events',
      'content' =>  $this->load->view('events', '', true)
     );
     $this->parser->parse('../../assets/index', $data);
  }  
}
