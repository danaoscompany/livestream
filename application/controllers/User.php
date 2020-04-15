<?php

class User extends CI_Controller {
  
  public function get_popular_streams() {
    $start = intval($this->input->post('start'));
    $length = intval($this->input->post('length'));
    $this->db->order_by('viewers', 'DESC');
    $this->db->limit($length, $start);
    echo json_encode($this->db->get('streams')->result_array());
  }
  
  public function get_random_streams() {
    $start = intval($this->input->post('start'));
    $length = intval($this->input->post('length'));
    $this->db->order_by('rand()');
    $this->db->limit($length, $start);
    echo json_encode($this->db->get('streams')->result_array());
  }
}