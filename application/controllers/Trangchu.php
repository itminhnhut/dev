<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trangchu extends CI_Controller {

  private $CI;
  public function __construct() {
    parent::__construct();
    $this->load->library('javascript');
    $this->load->model('MenuMulti');
    $this->load->model('Product');
    $this->load->model('Slide');
    $this->load->model('Menu');
    $this->load->model('Pages');
    $this->CI = &get_instance();
    $this->csrf = array(
      'name' => $this->security->get_csrf_token_name(),
      'hash' => $this->security->get_csrf_hash()
    );
  }

  public function index() {
    //$this->output->cache(5);
    $data['menu'] =$this->MenuMulti->get_categories();
    $arr  = json_decode(json_encode($data['menu']),TRUE);
    $data['slider'] = $this->Slide->get_slider('slider');
    $data['banner'] = $this->Slide->get_slider('banner');
    $data['pages'] = $this->Pages->show();
    $this->template->add_css('assets/carousel/assets/owl.carousel.min.css');
    $this->template->add_css('assets/carousel/assets/owl.theme.default.min.css');
    $this->template->add_js('assets/carousel/owl.carousel.min.js');
    $this->template->add_js('assets/carousel/slide_carousel.js');
    $this->template->masterlayoutFondend('layout', 'contents', 'layouts/font_end/trangchu', array('menu'=>$arr,'slider' => $data['slider'], 'banner' =>$data['banner'],'pages' => $data['pages']));
  }

  public function trangloai($slug,$id=0) {
    $data['menu'] =$this->MenuMulti->get_categories();
    $menu = json_decode(json_encode($data['menu']),TRUE);
    $this->template->add_js('assets/js/jquery/trangloai.js');
    $this->template->add_js('assets/js/jquery/plugin_6.js');


    $rs = $this->Menu->check($slug,$id);
    if($rs > 0)
    {
      $this->load->model('Product');
      $csrf  =  $this->security->xss_clean($this->input->get('csrf_test_name'));
      $get_min  =  $this->security->xss_clean($this->input->get('min_price'));
      $get_max  =  $this->security->xss_clean($this->input->get('max_price'));

      if($csrf != $this->csrf['hash'] && $csrf !='')
      {
        redirect (base_url('404'));
      }
      else if($csrf == $this->csrf['hash'])
      {
        if( $get_max =='' || $get_min == '')
        {
          redirect (base_url('404'));
        }
        else
        {
          $action = 'price';
          $rs = $this->checkGet($action,$get_min,$get_max);
          if($rs == 0)
            redirect (base_url('404'));
          else
          {
            $action_results = 'price';
            $total_row = $this->Product->record_minmax($id,$get_min,$get_max,0,0);

          }
        }
      }
      else
      {
        $action_results = 'trangloai';
        $total_row = $this->Product->record_count($id);

      }

             // menu
      $data = $this->Menu->get_categories_tl($id);
      $arr  = json_decode(json_encode($data),TRUE);
      $data['pages'] = $this->Pages->show();

      $this->load->model('MenuMulti');
      $categories = $this->MenuMulti->get_categories();
      $arr_categories  = json_decode(json_encode($categories),TRUE);


      $max = $this->Product->MaxPrice();

             // $show = $this->Product->TinTrangLoai($id);

      $this->load->library('pagination');
      /**/
      $config = array();

      $config["base_url"] = base_url().$slug.'-'.$id;

      $config["total_rows"] = $total_row;

      $config["per_page"] = 3;

      $config['full_tag_open'] = "<ul class='page-numbers'>";
      $config['full_tag_close'] ="</ul>";
      $config['num_tag_open'] = '<li>';
      $config['num_tag_close'] = '</li>';
   // $config['cur_tag_open'] = "<li class='page-numbers'><li class='active'><a href='#'>";
   // $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
      $config['next_tag_open'] = "<li>";
      $config['next_tagl_close'] = "</li>";
      $config['prev_tag_open'] = "<li>";
      $config['prev_tagl_close'] = "</li>";
      $config['first_tag_open'] = "<li>";
      $config['first_tagl_close'] = "</li>";
      $config['last_tag_open'] = "<li>";
      $config['last_tagl_close'] = "</li>";
      $config['display_pages'] = true;
      $config['suffix'] = '?' . http_build_query($_GET, '', "&");

      $this->pagination->initialize($config);

      $offset  =  (($this->uri->segment(2)=='') ? 0 : (($this->uri->segment(2)=='all') ? 0 : $this->uri->segment(2)));



      if($action_results == 'trangloai')
      {
        $data["results"] = $this->Product->fetch_data($config["per_page"],$offset, $id);
    // echo '<pre>';
    // print_r($data["results"]);
    // die;
      }
      else if($action_results == 'price')
      {
        $data["results"] = $this->Product->record_minmax($id,$get_min,$get_max,$config["per_page"],$offset);
      }

      $pagination = $this->pagination->create_links();
      /* tags */
      $tags = $this->Product->tags($id);
      /**/
      $this->template->masterlayoutFondend('layout', 'contents', 'layouts/font_end/trangloai',array(
        'menu'        =>  $menu,
        'pages' => $data['pages'],
        'menudoc' => $arr,
        'categories'  => $arr_categories,
        'max'         => $max[0]['MaxPrice'],
        'data'        => $data["results"],
        'pagination'  => $pagination,
        'slug'        => $slug,
        'id'          => $id,
        'tags'        => $tags,
        'total'       => $total_row,
        'per_page'    => $config["per_page"],
        'csrf'        => $this->csrf
      ));
      $this->load->view('layouts/font_end/popup_cart');
    }
    else
    {
  //redirect('/');
    }

  }
  public function checkGet($action,$min,$max)
  {
    if($action == 'price')
    {
      if($min < 0 || $max < 0)
      {
        return 0;
      }
      else
      {
        return 1;
      }

    }
  }

  public function trangchitiet($slug,$id){
    $data['menu'] =$this->MenuMulti->get_categories();
    $arr  = json_decode(json_encode($data['menu']),TRUE);
    $data['pages'] = $this->Pages->show();
    $data['row_product'] = $this->Product->get_row_product($id,'product');
    $data['breadcums'] = $this->MenuMulti->breadcums($data['row_product']['idParent'],$data['row_product']['idSubChild'],$data['row_product']['idChild'],'menu');
    $this->template->add_css('assets/zoom/fancybox-plus.css');
    $this->template->add_css('assets/css/trangchu/trangchitiet.css');
    $this->template->add_css('assets/carousel/assets/owl.carousel.min.css');
    $this->template->add_css('assets/carousel/assets/owl.theme.default.min.css');
    $this->template->add_js('assets/zoom/ez-plus.js');
    $this->template->add_js('assets/zoom/fancybox-plus.js');
    $this->template->add_js('assets/js/jquery/jquery.bxslider.min.js');
    $this->template->add_js('assets/carousel/owl.carousel.min.js');
    $this->template->add_js('assets/carousel/jquery.mousewheel.min.js');
    $this->template->add_js('assets/js/jquery/trangchitiet.js');
    $this->template->add_js('assets/carousel/slide_carousel.js');
    $this->template->masterlayoutFondend('layout', 'contents', 'layouts/font_end/trangchitiet',array('menu'=>$arr,'row_product' => $data['row_product'],'breadcums' => $data['breadcums'],'pages'=>$data['pages']));
  }

  public function blog($slug,$id){
    $data['menu'] =$this->MenuMulti->get_categories();
    $arr  = json_decode(json_encode($data['menu']),TRUE);
    $data['pages'] = $this->Pages->show();
 // $id = explode('-', $slug);
 // $id = $id[count($id)-1];
    $this->load->library('pagination');
    $config = array();

    $config["base_url"] = base_url().'/tag/'.$slug.'-'.$id;

    $total_row = $this->Product->record_count_blog($id);
    $config["total_rows"] = $total_row;

    $config["per_page"] = 1;

    $config['full_tag_open'] = "<ul class='page-numbers'>";
    $config['full_tag_close'] ="</ul>";
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    // $config['cur_tag_open'] = "<li class='page-numbers'><li class='active'><a href='#'>";
    // $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
    $config['next_tag_open'] = "<li>";
    $config['next_tagl_close'] = "</li>";
    $config['prev_tag_open'] = "<li>";
    $config['prev_tagl_close'] = "</li>";
    $config['first_tag_open'] = "<li>";
    $config['first_tagl_close'] = "</li>";
    $config['last_tag_open'] = "<li>";
    $config['last_tagl_close'] = "</li>";
    $config['display_pages'] = true;
              //$config['suffix'] = '?' . http_build_query($_GET, '', "&");

    $this->pagination->initialize($config);

    $offset  =  ($this->uri->segment(2)=='') ? 0 : $this->uri->segment(2);
    $data['blog'] = $this->Product->get_plog($id,$config["per_page"],$offset);
    $pagination = $this->pagination->create_links();
    $this->template->masterlayoutFondend('layout', 'contents', 'layouts/font_end/blog', array('menu' => $arr,'blog'=>$data['blog'],'pagination'=>$pagination,'pages'=> $data['pages']));
  }

  public function blog_chitiet($id) {
    $data['menu'] =$this->MenuMulti->get_categories();
    $arr  = json_decode(json_encode($data['menu']),TRUE);
    $data['pages'] = $this->Pages->show();
    $data['row_product'] = $this->Product->get_row_product($id,'menu');
    $this->template->masterlayoutFondend('layout', 'contents', 'layouts/font_end/blog_chitiet', array('menu' => $arr,'row_product'=>$data['row_product'],'pages'=>$data['pages']));
  }

  public function pages($slug,$id){

    $data['menu'] =$this->MenuMulti->get_categories();
    $arr  = json_decode(json_encode($data['menu']),TRUE);
    $data['pages'] = $this->Pages->show();
    $data['content_page'] = $this->Pages->content_page($id);
    $this->template->masterlayoutFondend('layout', 'contents', 'layouts/font_end/pages', array('menu' => $arr,'pages'=>$data['pages'],'content_page'=>$data['content_page']));
  }

  public function popup_cart() {

    $this->load->view('layouts/font_end/popup_cart');
  }
}

?>