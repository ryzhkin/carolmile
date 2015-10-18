<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Links extends MY_Controller {
  public function index()	{

      $data = array(
         'title'   => 'Links',
         'content' =>  $this->load->view('links', array(

             ), true)
      );
      $this->parser->parse('../../assets/index', $data);
  }  
}
