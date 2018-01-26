<?php
  /**
  *
  */
  class MenuMulti extends CI_Model
  {
    public function __construct(){
      parent::__construct();
    }
    public function get_categories()
    {
      $this->db->select('*');
      $this->db->from('menu');
      $this->db->where('parent', 0);
      $this->db->order_by('order_menu','asc');

      $parent = $this->db->get();
      $categories = $parent->result();
      $i=0;
      foreach($categories as $p_cat){
        $categories[$i]->sub = $this->sub_categories($p_cat->id);
        $i++;
      }
      return $categories;
    }
    public function sub_categories($id){

      $this->db->select('*');
      $this->db->from('menu');
      $this->db->where('parent', $id);
      $this->db->order_by('order_menu','asc');

      $child = $this->db->get();
      $categories = $child->result();
      $i=0;
      foreach($categories as $p_cat){

        $categories[$i]->sub = $this->sub_categories($p_cat->id);
        $i++;
      }
      return $categories;
    }

    public function get_categories_auto($id)
    {
      $this->db->select('*');
      $this->db->from('menu');
      $this->db->where('parent', $id);
      $this->db->order_by('order_menu','asc');

      $parent = $this->db->get();
      $categories = $parent->result();
      $i=0;
      foreach($categories as $p_cat){
        $categories[$i]->sub = $this->sub_categories($p_cat->id);
        $i++;
      }
      return $categories;
    }

    public function get_categories_id($id)
    {
      $this->db->select('*');
      $this->db->from('menu');
      $this->db->where('parent', $id);
      $this->db->order_by('order_menu','asc');

      $parent = $this->db->get();
      $categories = $parent->result();
      $i=0;
      foreach($categories as $p_cat){
        $categories[$i]->sub = $this->sub_categories_id($p_cat->id);
        $i++;
      }
      return $categories;
    }

    public function sub_categories_id($id){
      $this->db->select('*');
      $this->db->from('menu');
      $this->db->where('parent', $id);
      $this->db->order_by('order_menu','asc');

      $child = $this->db->get();
      $categories = $child->result();
      $i=0;
      foreach($categories as $p_cat){

        $categories[$i]->sub = $this->sub_categories_id($p_cat->id);
        $i++;
      }
      return $categories;
    }

    public function sub_categories_auto($id){
      $this->db->select('*');
      $this->db->from('menu');
      $this->db->where('parent', $id);
      $this->db->order_by('order_menu','asc');

      $child = $this->db->get();
      $categories = $child->result();
      $i=0;
      foreach($categories as $p_cat){

        $categories[$i]->sub = $this->sub_categories($p_cat->id);
        $i++;
      }
      return $categories;
    }

    public function get_row_categories($id){
      $sql = $this->db->select('*')
      ->from('menu')
      ->where('id',$id)
      ->get();
      return $sql->row_array();
    }

    public function breadcums($idParent,$idSubChild,$idChild,$table){
      if($idChild >0){
        $cap_2 = $this->get_row_categories($idChild);
        $cap_1 = $this->get_row_categories($idSubChild);
        $cap_0 = $this->get_row_categories($idParent);
        return $query = array('cap_0'=> $cap_0, 'cap_1' => $cap_1, 'cap_2' => $cap_2);
      }elseif($idSubChild > 0){
       $cap_1 = $this->get_row_categories($idSubChild);
       $cap_0 = $this->get_row_categories($idParent);
       return $query = array('cap_0'=> $cap_0, 'cap_1' => $cap_1);
     }else{
       $cap_0 = $this->get_row_categories($idParent);
       return $query = array('cap_0'=> $cap_0);
     }
   }

 }
 ?>