<?php

class Welcome extends CI_Controller {
		function __construct(){
		parent::__construct();
		$this->load->model('major');
		$this->load->library('form_validation');
	}
	public function index()
	{	

	$user_type=$this->session->userdata('user_type');
		if ($user_type !='admin' && $user_type !='sub-admin') {
			redirect(base_url().'welcome/login');
		} 
		$this->load->view('ad/header');
		$this->load->view('ad/main1');
		$this->class_list();
		$this->load->view('ad/wrapper1');
		$this->load->view('ad/footer');
	}

	public function class_list(){
		$data['class']=$this->major->class_list();
		$this->load->view('ad/main',$data);
	}


	public function maincat($cat_class){	

		$user_type=$this->session->userdata('user_type');
		if ($user_type !='admin' && $user_type !='sub-admin') {
			redirect(base_url().'welcome/login');
		} 	
		$data['title']= $cat_class;
		$post=$this->major->main_cat_list($cat_class);		
		if ($post){
		$data['main']=$this->major->main_cat_list($cat_class);
		$this->load->view('ad/header');
		$this->load->view('ad/main1');
		$this->class_list();
		$this->load->view('ad/main_cat',$data);
		$this->load->view('ad/footer');
		}else{
			redirect(base_url());
		}
	}
	public function editcat($cat_id){

		$user_type=$this->session->userdata('user_type');
		if ($user_type !='admin' && $user_type !='sub-admin') {
			redirect(base_url().'welcome/login');
		} 
	$data['success']=0;
	if ($_POST) {
			$this->major->update_cat($cat_id);
			$data['success']=1;
	}
	$data['edit_det']=$this->major->main_cat_det($cat_id);
	$this->load->view('ad/header');
	$this->load->view('ad/main1');
	$this->class_list();
	$this->load->view('ad/main_cat_edit',$data);
	$this->load->view('ad/footer');
	}
	function deletecat($cat_id){
		$this->major->delete_cat($cat_id);
		redirect(base_url().'welcome');
	}
	function vid_del($vid_id){
		$this->major->delete_vid($vid_id);
		redirect(base_url().'welcome');

	}
	function sub_del($sub_id){

		$this->major->delete_sub($sub_id);
		redirect(base_url().'welcome');
	}

	public function subcat($cat_class,$cat_slug){

		$user_type=$this->session->userdata('user_type');
		if ($user_type !='admin' && $user_type !='sub-admin') {
			redirect(base_url().'welcome/login');
		} 		
		$data['title']= $cat_class;
		$data['cat_slug']= $cat_slug;
		$post=$this->major->sub_cat_list($cat_class,$cat_slug);		
		if ($post){
		$data['sub']=$this->major->sub_cat_list($cat_class,$cat_slug);
		$this->load->view('ad/header');
		$this->load->view('ad/main1');
		$this->class_list();
		$this->load->view('ad/sub_cat',$data);
		$this->load->view('ad/footer');
		}
	}

	public function videos($cat_class,$sub_slug){
				$user_type=$this->session->userdata('user_type');
		if ($user_type !='admin' && $user_type !='sub-admin') {
			redirect(base_url().'welcome/login');
		} 
		$data['title']= $cat_class;
		$data['sub_slug']= $sub_slug;
		$post=$this->major->video_list($cat_class,$sub_slug);		
		if ($post){
		$data['vid']=$this->major->video_list($cat_class,$sub_slug);
		$this->load->view('ad/header');
		$this->load->view('ad/main1');
		$this->class_list();
		$this->load->view('ad/ad_vid',$data);
		$this->load->view('ad/footer');
		}else{
					$data['vid']=$this->major->video_list($cat_class,$sub_slug);
		$this->load->view('ad/header');
		$this->load->view('ad/main1');
		$this->class_list();
		$this->load->view('ad/ad_vid',$data);
		$this->load->view('ad/footer');
		}
	}

	function new_cat(){
				$user_type=$this->session->userdata('user_type');
		if ($user_type !='admin' && $user_type !='sub-admin') {
			redirect(base_url().'welcome/login');
		} 
		$data['success']=0;
		$slug = url_title($this->input->post('cat_name'), 'dash', TRUE);
		if ($_POST) {
			$data=array(
				'cat_name' =>$_POST['cat_name'],
				'cat_class' =>$_POST['cat_class'],
				'cat_desc' =>$_POST['cat_desc'],
				'cat_slug' =>$slug
				);
			$this->major->insert_cat($data);
		$data['success']=1;
		$this->load->view('ad/header');
		$this->load->view('ad/main1');
		$this->class_list();
		$this->load->view('ad/succcess',$data);
		$this->load->view('ad/footer');
			//redirect(base_url().'welcome/maincat/',$data);
		}else{
			redirect(base_url().'welcome');
		}

	}

	function new_sub_cat(){
				$user_type=$this->session->userdata('user_type');
		if ($user_type !='admin') {
			redirect(base_url().'welcome/login');
		} 
		$data['success']=0;
		$slug = url_title($this->input->post('sub_cat_name'), 'dash', TRUE);
		if ($_POST) {
			$data=array(
				'sub_cat_name' =>$_POST['sub_cat_name'],
				'cat_slug' =>$_POST['cat_slug'],
				'cat_class' =>$_POST['cat_class'],
				'sub_desc' =>$_POST['sub_desc'],
				'sub_slug' =>$slug
				);
			$this->major->insert_sub_cat($data);
					$data['success']=1;
		$this->load->view('ad/header');
		$this->load->view('ad/main1');
		$this->class_list();
		$this->load->view('ad/succcess',$data);
		$this->load->view('ad/footer');
			//redirect(base_url().'welcome/');
		}else{
			redirect(base_url().'welcome/');
		}

	}

	function new_video(){
				$user_type=$this->session->userdata('user_type');
		if ($user_type !='admin' && $user_type !='sub-admin') {
			redirect(base_url().'welcome/login');
		} 
		$data['success']=0;
		//$slug = url_title($this->input->post('sub_cat_name'), 'dash', TRUE);
		if ($_POST) {
			$data=array(
				'vid_name' =>$_POST['vid_name'],
				'cat_slug' =>$_POST['cat_slug'],
				'cat_class' =>$_POST['cat_class'],
				'sub_slug' =>$_POST['sub_slug'],
				'vid_desc' =>$_POST['vid_desc'],
				'vid_link' =>$_POST['vid_link']
				);
		$this->major->insert_new_vid($data);
		$data['success']=1;
		$this->load->view('ad/header');
		$this->load->view('ad/main1');
		$this->class_list();
		$this->load->view('ad/succcess',$data);
		$this->load->view('ad/footer');
			//redirect(base_url().'welcome/');
		}else{
			redirect(base_url().'welcome/');
		}

	}

 public function addusers(){
 			$user_type=$this->session->userdata('user_type');
		if ($user_type !='admin' && $user_type !='sub-admin') {
			redirect(base_url().'welcome/login');
		} 
 		$data['success']=0;
		if ($_POST) {
		$this->form_validation->set_rules('username', 'Username', 'required|max_length[20]|is_unique[users.username]');			
		$this->form_validation->set_rules('password', 'Password', 'required|max_length[20]');
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
		$this->load->view('ad/header');
		$this->load->view('ad/main1');
		$this->class_list();
		$this->load->view('ad/add_user',$data);
		$this->load->view('ad/footer');
		}
		else // passed validation proceed to post success logic
		{
		$this->major->add_user($data);
		$data['success']=1;
		$this->load->view('ad/header');
		$this->load->view('ad/main1');
		$this->class_list();
		$this->load->view('ad/add_user',$data);
		$this->load->view('ad/footer');
	}
			//redirect(base_url().'welcome/maincat/',$data);
		}else{
		$this->load->view('ad/header');
		$this->load->view('ad/main1');
		$this->class_list();
		$this->load->view('ad/add_user',$data);
		$this->load->view('ad/footer');
		}
 }
 
 public function login(){
 		$data['success']=0;
		if ($_POST) {
		$username=$this->input->post('username',true);
		$password=$this->input->post('password',true);
		$user=$this->major->login($username,$password);
		if (!$user) {
			$data['success']=1;
		}else{
			$this->session->set_userdata('user_id',$user['user_id']);
			$this->session->set_userdata('username',$user['username']);
			$this->session->set_userdata('user_type',$user['user_type']);
			//$this->session->set_userdata('user_type',$user['user_type']);
			redirect(base_url().'welcome');

		}
	}
 $this->load->view('ad/header');
 $this->load->view('ad/log',$data);
 $this->load->view('ad/footer');

 }


 	public function userslist(){

		$user_type=$this->session->userdata('user_type');
		if ($user_type !='admin' && $user_type !='sub-admin') {
			redirect(base_url().'welcome/login');
		} 		
		$post=$this->major->user_list();		
		if ($post){
		$data['adm']=$this->major->user_list();
		$this->load->view('ad/header');
		$this->load->view('ad/main1');
		$this->class_list();
		$this->load->view('ad/user_list',$data);
		$this->load->view('ad/footer');
		}
	}


	function deleteuser($user_id){
		$user_type=$this->session->userdata('user_type');
		if ($user_type !='admin') {
			redirect(base_url().'welcome/userslist');
		} 	
		$this->major->delete_user($user_id);
		redirect(base_url().'welcome/userslist');
	}


 	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'welcome/login');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */