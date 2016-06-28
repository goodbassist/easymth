<?php

class Welcome extends CI_Controller {
		function __construct(){
		parent::__construct();
		$this->load->model('major');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	
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
		
		$data['title']= $cat_class;
		$post=$this->major->main_cat_list($cat_class);		
		if ($post){
		$data['main']=$this->major->main_cat_list($cat_class);
			$data['suc']=1;
			
		$this->load->view('ad/header');
		$this->load->view('ad/main1');
		$this->class_list();
		$this->load->view('ad/main_cat',$data);
		$this->load->view('ad/footer');
		}else{
			redirect(base_url());
		}
	}

	public function subcat($cat_class,$cat_slug){
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



	function new_cat(){
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
			redirect(base_url().'welcome/',$data);
		}else{
			$this->load->view('welcome/maincat');
		}

	}

		function new_sub_cat(){
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
			redirect(base_url().'welcome/');
		}else{
			redirect(base_url().'welcome/');
		}

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */