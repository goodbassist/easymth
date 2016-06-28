<?php

class Maths extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('math');

	}

public function jss1_list(){
	$data['jss_1']=$this->math->jss1();
	$data['jss_2']=$this->math->jss2();
	$data['jss_3']=$this->math->jss3();
	$data['sss_1']=$this->math->sss1();
	$data['sss_2']=$this->math->sss2();
	$data['sss_3']=$this->math->sss3();
	$this->load->view('jss1',$data);
	}

public function math(){
	$this->load->view('header');
	$this->jss1_list();
	$this->load->view('dash');
	$this->load->view('footer');
}

public function cat($cat_class,$cat_slug){
	$data['title']= $cat_class;
	$data['cat_slug']= $cat_slug;
	$post=$this->math->cat_list($cat_class,$cat_slug);		
	if ($post){
	$data['sub']=$this->math->cat_list($cat_class,$cat_slug);
	$this->load->view('header');
	$this->jss1_list();
	$this->load->view('cat',$data);
	$this->load->view('footer');
		}
}

public function vid($cat_class,$sub_slug){
	$data['title']= $cat_class;
	$data['sub_slug']= $sub_slug;
	$post=$this->math->vid_list($cat_class,$sub_slug);		
	if ($post){
	$data['vid']=$this->math->vid_list($cat_class,$sub_slug);
	$data['side']=$this->math->vid_side($cat_class,$sub_slug);
	$this->load->view('head_vid');
	$this->jss1_list();
	$this->load->view('vid',$data);
	$this->load->view('footer');
		}else{
	$data['vid']=$this->math->vid_list($cat_class,$sub_slug);
	$this->load->view('head_vid');
	$this->jss1_list();
	$this->load->view('vid',$data);
	$this->load->view('footer');
		}
}

public function vid2($sub_slug,$cat_class,$vid_id){
	$data['title']= $cat_class;
	$data['sub_slug']= $sub_slug;
	$post=$this->math->vid_watch($sub_slug,$cat_class,$vid_id);		
	if ($post){
	$data['vid2']=$this->math->vid_watch($sub_slug,$cat_class,$vid_id);
	$data['side']=$this->math->vid_side($cat_class,$sub_slug);
	$this->load->view('head_vid');
	$this->jss1_list();
	$this->load->view('vid2',$data);
	$this->load->view('footer');
		}else{
	$data['vid']=$this->math->vid_list($cat_class,$sub_slug);
	$this->load->view('head_vid');
	$this->jss1_list();
	$this->load->view('vid',$data);
	$this->load->view('footer');
		}
}




}	