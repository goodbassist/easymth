<?php 

class Admin extends CI_Controller {

 public function add(){
 		$data['success']=0;
		if ($_POST) {
			$data=array(
				'password' =>sha1($_POST['password']),
				'username' =>$_POST['password'],
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
		$this->load->view('ad/header');
		$this->load->view('ad/main1');
		$this->class_list();
		$this->load->view('ad/add_user',$data);
		$this->load->view('ad/footer');
		}
 }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */