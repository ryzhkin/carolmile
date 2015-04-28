<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends MY_Controller {
  public function index()	{
      $this->load->database();
      $query = $this->db->query('SELECT * FROM events order by event_date desc');
      $events = $query->result();
      array_unshift($events, $events[count($events) - 1]);
      array_pop($events);
      //Common::xlog('events', $events);
      $data = array(
          'title'   => 'Events',
          'content' =>  $this->load->view('events', array('events' => $events), true)
      );
      $this->parser->parse('../../assets/index', $data);
  }  
}
