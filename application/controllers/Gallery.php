<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends MY_Controller {
  public function index()	{
     $this->load->database();
     $query = $this->db->query('SELECT * FROM gallery');
     $data = array(
      'title'   => 'Gallery',
      'content' =>  $this->load->view('gallery', array('photos' => $query->result()), true)
     );
     $this->parser->parse('../../assets/index', $data);
  }  
}
