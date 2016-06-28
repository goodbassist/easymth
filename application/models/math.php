<?php

class math extends CI_Model{
	function jss1(){
		$this->db->select()->from('main_cat')->where(array('cat_class'=>'J.S.S.1'));
		$query =$this->db->get();
		return $query->result_array();
	}
		function jss2(){
		$this->db->select()->from('main_cat')->where(array('cat_class'=>'J.S.S.2'));
		$query =$this->db->get();
		return $query->result_array();
	}
		function jss3(){
		$this->db->select()->from('main_cat')->where(array('cat_class'=>'J.S.S.3'));
		$query =$this->db->get();
		return $query->result_array();
	}
		function sss1(){
		$this->db->select()->from('main_cat')->where(array('cat_class'=>'S.S.S.1'));
		$query =$this->db->get();
		return $query->result_array();
	}
			function sss2(){
		$this->db->select()->from('main_cat')->where(array('cat_class'=>'S.S.S.2'));
		$query =$this->db->get();
		return $query->result_array();
	}
	function sss3(){
		$this->db->select()->from('main_cat')->where(array('cat_class'=>'S.S.S.3'));
		$query =$this->db->get();
		return $query->result_array();
	}
	function cat_list($cat_class,$cat_slug){
		$this->db->select()->from('sub_cat')->where(array('cat_class'=>$cat_class , 'cat_slug'=>$cat_slug))->order_by('sub_id');
		$query=$this->db->get();
		return $query->result_array();
	}	
		function vid_list($cat_class,$sub_slug){
		$this->db->select()->from('easy_video')->where(array('cat_class'=>$cat_class , 'sub_slug'=>$sub_slug))->order_by('vid_id');
		$query=$this->db->get();
		return $query->first_row('array');
	}
		function vid_side($cat_class,$sub_slug){
		$this->db->select()->from('easy_video')->where(array('cat_class'=>$cat_class , 'sub_slug'=>$sub_slug))->order_by('vid_id');
		$query=$this->db->get();
		return $query->result_array();
	}	
		function vid_watch($sub_slug,$cat_class,$vid_id){
		$this->db->select()->from('easy_video')->where(array('cat_class'=>$cat_class , 'sub_slug'=>$sub_slug , 'vid_id'=>$vid_id));
		$query=$this->db->get();
		return $query->first_row('array');
	}		
}