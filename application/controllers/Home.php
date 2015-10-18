<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
  public function index($lng = 'en')	{
     $data = array(
      'title'   => 'Home',
      'content' =>  $this->load->view('home', '', true)
     );
     $this->parser->parse('../../assets/index', $data);

     //Common::xlog('lng', $lng);
  }  
}
