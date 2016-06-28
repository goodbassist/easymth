<?php

class Home extends CI_controller{ 

public function index(){
	$this->load->view('home/home_header');
	$this->load->view('home/home_main');
	$this->load->view('home/home_footer');
}

public function contact(){
	$this->load->view('home/home_header');
	$this->load->view('home/home_contact');
	$this->load->view('home/home_footer');
}

public function sitemap(){
	$this->load->view('home/home_header');
	$this->load->view('home/home_sitemap');
	$this->load->view('home/home_footer');
}

}
