<?php

class Major extends CI_Model{
  
	function class_list(){
		$this->db->select()->from('class');
		$query =$this->db->get();
		return $query->result_array();
	}

	function insert_cat($data){
		$this->db->insert('main_cat',$data);
		return $this->db->insert_id();	
		}

	function insert_sub_cat($data){
		$this->db->insert('sub_cat',$data);
		return $this->db->insert_id();	
		}
	function insert_new_vid($data){
		$this->db->insert('easy_video',$data);
		return $this->db->insert_id();	
		}

	function main_cat_list($cat_class){
		$this->db->select()->from('main_cat')->where(array('cat_class'=>$cat_class))->order_by('cat_id');
		$query=$this->db->get();
		return $query->result_array();
	}
	function main_cat_det($cat_id){
		$this->db->select()->from('main_cat')->where(array('cat_id'=>$cat_id));
		$query=$this->db->get();
		return $query->first_row('array');
	}
	function update_cat($cat_id){
		$slug = url_title($this->input->post('cat_name'), 'dash', TRUE);
					$data=array(
				'cat_name' =>$_POST['cat_name'],
				'cat_desc' =>$_POST['cat_desc'],
				'cat_slug' =>$slug
				);
		$this->db->where('cat_id',$cat_id);
		$this->db->update('main_cat',$data);
	}

	function delete_cat($cat_id){
		$this->db->where('cat_id',$cat_id);
		$this->db->delete('main_cat');
	}

	function delete_vid($vid_id){
		$this->db->where('vid_id',$vid_id);
		$this->db->delete('easy_video');
	}
	function delete_sub($sub_id){
		$this->db->where('sub_id',$sub_id);
		$this->db->delete('sub_cat');
	}

	function sub_cat_list($cat_class,$cat_slug){
		$this->db->select()->from('sub_cat')->where(array('cat_class'=>$cat_class , 'cat_slug'=>$cat_slug))->order_by('sub_id');
		$query=$this->db->get();
		return $query->result_array();
	}

	function video_list($cat_class,$sub_slug){
		$this->db->select()->from('easy_video')->where(array('cat_class'=>$cat_class , 'sub_slug'=>$sub_slug))->order_by('vid_id');
		$query=$this->db->get();
		return $query->result_array();
	}
	public function add_user(){
				$data=array(
				'password' =>sha1($_POST['password']),
				'username' =>$_POST['username'],
				'user_type' =>$_POST['user_type'],
				);
        $this->db->insert('users',$data);
	}

    function login($username,$password){
        $where = array(
            'username' =>$username , 
            'password' =>sha1($password)
          //  'user_type' =>$type
            );
        $this->db->select()->from('users')->where($where);
        $query=$this->db->get();
        return $query->first_row('array');      
    }

    function user_list(){
		$this->db->select()->from('users');
		$query=$this->db->get();
		return $query->result_array();
	}
		function delete_user($user_id){
		$this->db->where('user_id',$user_id);
		$this->db->delete('users');
	}


  }
