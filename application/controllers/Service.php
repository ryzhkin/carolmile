<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends MY_Controller {
  public function index()	{

      $data = array(
         'title'   => 'Service',
         'content' =>  $this->load->view('service', array(

             ), true)
      );
      $this->parser->parse('../../assets/index', $data);
  }  
}
