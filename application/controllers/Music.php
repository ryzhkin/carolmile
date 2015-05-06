<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Music extends MY_Controller {
  public function index()	{
     $this->load->database();
     if ($this->input->is_ajax_request()) {
       $result = array(
         'ok' => true
       );
       switch ($this->input->post('ajaxAction')) {
           case 'getAlbum': {

             $sql = "
             SELECT *
             FROM `albom_track`
             LEFT JOIN track on track.track_id = `albom_track`.`track_id`
             WHERE
              `albom_track`.`albom_id` = ".$this->input->post('albumID')."
             ";
             $query = $this->db->query($sql);
             $tracks = $query->result();
             $html = '<table>';
             $counter = 1;
             foreach ($tracks as $track) {
               $mp3file = new MP3File("assets/uploads/mp3/".$track->mp3);
               $duration = $mp3file->getDurationEstimate();//(faster) for CBR only
               $songTime = floor($duration/60).':'.str_pad(($duration - floor($duration/60)*60), 2, '0', STR_PAD_LEFT);
               //Common::xlog('mp3', $track->title.' > '.$songTime);
               $html .= '
                <tr class="'.(($counter == 1)?'active':'').'" mp3="'.base_url().'assets/uploads/mp3/'.$track->mp3.'">
                  <td>'.$counter.'. '.$track->title.'</td>
                  <td style="max-width: 45px; width: 45px;">'.$songTime.'</td>
                </tr>
               ';
               $counter++;
             }
             $html .= '</table>';
             $result['html'] = $html;
             break;
           }
       }
       header('Content-Type: application/json');
       echo json_encode($result);
     } else {
         $query = $this->db->query('SELECT * FROM albom');
         $alboms = $query->result();
         $query = $this->db->query('SELECT * FROM video');
         $videos = $query->result();
         $data = array(
             'title'   => 'Music',
             'content' =>  $this->load->view('music', array(
                     'alboms' => $alboms,
                     'videos' => $videos,
                 ), true)
         );
         $this->parser->parse('../../assets/index', $data);
     }
  }
}
