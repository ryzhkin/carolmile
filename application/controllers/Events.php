<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends MY_Controller {
  public function index()	{
      $this->load->database();
      $query = $this->db->query('SELECT * FROM events order by event_date asc');
      $data = array(
          'title'   => 'Events',
          'content' =>  $this->load->view('events', array('events' => $query->result()), true)
      );
      $this->parser->parse('../../assets/index', $data);
  }  
}
