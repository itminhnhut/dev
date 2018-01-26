<?php

class Product extends CI_Model
{
 public function __construct(){
  parent::__construct();
}

public function MaxPrice()
{
 $sql = $this->db->select('MAX(price) as MaxPrice')
 ->from('product')
 ->get();
 $rs = $sql->result_array();
 return $rs;
}
public function TinTrangLoai($id)
{
         //`idParent`, `idSubChild`, `idChild`
  $sql = $this->db->select('product.id as id, name, slug , des, content, keyword, description, price, salePrice')
  ->from('product')
  ->join('imageProduct', 'imageProduct.idProduct = product.id')
  ->or_where('idParent =', $id)
  ->or_where('idSubChild =', $id)
  ->or_where('idChild =', $id)
  ->where('product.status',1)
  ->get();
  $rs = $sql->result_array();
  return $rs;
}
public function record_count($id){
  if($id>0){
   $sql = $this->db->select('product.id AS id, name, slug , des, content, keyword, description, price, salePrice, url_image')
   ->from('product')
   ->join('imageProduct', 'imageProduct.idProduct = product.id')
   ->or_where('idParent =', $id)
   ->or_where('idSubChild =', $id)
   ->or_where('idChild =', $id)
   ->where('product.status',1)
   ->where('imageProduct.avata',1)

   ->order_by('id', 'ASC')
   ->group_by('id')

   ->get();
 }else{
   $sql = $this->db->select('product.id AS id, name, slug , des, content, keyword, description, price, salePrice, url_image')
   ->from('product')
   ->join('imageProduct', 'imageProduct.idProduct = product.id')
   ->where('product.status',1)
   ->where('imageProduct.avata',1)

   ->order_by('id', 'ASC')
   ->group_by('id')

   ->get();
 }
 $rs = $sql->result_array();
 return count($rs);
}
public function fetch_data($limit, $offset ,$id) {
  if($id>0){
    $query = $this->db->select('product.id AS id, name, slug ,des, content, keyword, description, price, salePrice, url_image ,avata')
    ->from('imageProduct')

    ->where(array('product.status' => 1,'imageProduct.avata' => 1))
    ->where('idParent' ,$id )
    ->or_where(array('idSubChild' => $id , 'idChild'=> $id))

    ->join('product', 'imageProduct.idProduct = product.id')

    ->order_by('id', 'ASC')
    ->group_by('id')
    ->limit($limit,$offset)

    ->get();
  }else{
    $query = $this->db->select('product.id AS id, name, slug ,des, content, keyword, description, price, salePrice, url_image ,avata')
    ->from('imageProduct')

    ->where(array('product.status' => 1,'imageProduct.avata' => 1))

    ->join('product', 'imageProduct.idProduct = product.id')

    ->order_by('id', 'ASC')
    ->group_by('id')
    ->limit($limit,$offset)

    ->get();
  }

  if ($query->num_rows() > 0) {
    foreach ($query->result_array() as $row) {
     $data[] = $row;
   }

   return $data;
 }
 return false;
}
public function tags($id)
{
 if($id>0){
  $sql = $this->db->select('product.id AS id , tags ,slug')
  ->from('product')
  ->join('imageProduct', 'imageProduct.idProduct = product.id')
  ->or_where('idParent =', $id)
  ->or_where('idSubChild =', $id)
  ->or_where('idChild =', $id)
  ->where('product.status',1)
  ->where('imageProduct.avata',1)
  ->order_by('id', 'ASC')
  ->group_by('id')

  ->get();
}else{
  $sql = $this->db->select('product.id AS id , tags ,slug')
  ->from('product')
  ->join('imageProduct', 'imageProduct.idProduct = product.id')
  ->where('product.status',1)
  ->where('imageProduct.avata',1)
  ->order_by('id', 'ASC')
  ->group_by('id')

  ->get();
}
 if ($sql->num_rows() > 0) {
    foreach ($sql->result_array() as $row) {
     $data[] = $row;
   }

   return $data;
 }
 return false;
}
      //gia min max
public function record_minmax($id,$min,$max,$limit, $offset){
 if($id>0){
  $query = $this->db->select('product.id AS id, name, des, slug ,content, keyword, description, price, salePrice, url_image')
  ->from('product')
  ->join('imageProduct', 'imageProduct.idProduct = product.id')

  ->where('price >=', $min)
  ->where('price <=', $max)
  ->where('product.status',1)
  ->where('imageProduct.avata',1)

  ->where('idParent =', $id)
  ->or_where('idSubChild =', $id)
  ->or_where('idChild =', $id)

  ->order_by('id', 'ASC')
  ->group_by('id');
}else{
  $query = $this->db->select('product.id AS id, name, des, slug ,content, keyword, description, price, salePrice, url_image')
  ->from('product')
  ->join('imageProduct', 'imageProduct.idProduct = product.id')

  ->where('price >=', $min)
  ->where('price <=', $max)
  ->where('product.status',1)
  ->where('imageProduct.avata',1)

  ->order_by('id', 'ASC')
  ->group_by('id');
}
if($limit == 0)
{
 $query = $this->db->get();
 $rs = $query->result_array();
 return count($rs);
}
else
{
 $query = $this->db->limit($limit,$offset);
 $query = $this->db->get();

 if ($query->num_rows() > 0) {
   foreach ($query->result_array() as $row) {
     $data[] = $row;
   }

   return $data;
 }
 return NULL;
}
     // echo $this->db->last_query();die;

}

public function get_img_product($id, $avata){
  $this->db->select('*');
  $this->db->from('imageproduct');
  $this->db->where('idProduct',$id);
  $this->db->where('status',1);
  if($avata != 0) $this->db->where('avata',1);
  $img = $this->db->get();
  return $img->result_array();
}

public function get_product($id = -1, $idparent = -1,$limit = 0, $sale= -1, $avata = -1){
  $this->db->select('*');
  $this->db->from('product');
  if($idparent >-1){
    $this->db->where('id !=', $id);
    $this->db->where('idParent',$idparent);
  }
  if($sale == 0) $this->db->where('salePrice',0);
  $this->db->order_by('id','desc');
  if($limit > 0) $this->db->limit($limit);
  $product = $this->db->get();
  $all_product =  $product->result_array();
  $i = 0;
  foreach ($all_product as $val_img) {
    $all_product[$i]['UrlHinh'] = $this->get_img_product($val_img['id'], $avata);
    $i++;
  }
  return$all_product;
}

public function get_row_product($id,$table){
  $this->db->select('*');
  $this->db->from($table);
  $this->db->where('id',$id);
  $query = $this->db->get();
  return $query->row_array();
}
public function get_plog($id,$limit,$offset){
  $sql = $this->db->select('*')
  ->from('menu')
  ->where('parent',$id)
  ->where('status',1)
  ->where('status_menu_img',1)
  ->order_by('id','ASC')
  ->limit($limit,$offset)
  ->get();
  foreach ($sql->result_array() as $row) {
    $data[] = $row;
  }
  return $data;
}

public function record_count_blog($id){
  $sql = $this->db->select('*')
  ->from('menu')
  ->where('parent',$id)
  ->where('status',1)
  ->where('status_menu_img',1)
  ->order_by('id','ASC')
  ->get();
  $rs = $sql->result_array();
  return count($rs);
}
}