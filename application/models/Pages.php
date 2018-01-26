<?php

class Pages extends CI_Model
{
  public function __construct(){
    parent::__construct();
  }
  public function show()
  {
    $sql = $this->db->select('id,name,slug')
    ->where('show_hiden',1)
    ->get('pages');
    $rs = $sql->result_array();
    return $rs;
  }
  public function content_page($id)
  {
    $sql = $this->db->select('content')
    ->from('content_page')
    ->where('idPage',$id)
    ->get();
    return $rs = $sql->row_array();
  }
}
