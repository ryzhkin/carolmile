<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Music extends MY_Controller {
  public function index()	{
     $this->load->database();
     $query = $this->db->query('SELECT * FROM albom');
     $alboms = $query->result();
     $data = array(
      'title'   => 'Music',
      'content' =>  $this->load->view('music', array(
         'alboms' => $alboms,
       ), true)
     );
     $this->parser->parse('../../assets/index', $data);
  }  
}
