<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function LoadPage($value){
		if(isset($value['Result'])){
			$data = $value['Result'];
			$this->load->view('front/template/header', $data);
		}else{
			$this->load->view('front/template/header');
		}
		$this->load->view($value['View']);
		$this->load->view('front/template/footer');
	}

	public function index(){
		// $getHomepage = $this->Culturalmodel->getHomepage();
		$value = array(
			'Result' => array(
				// 'getHomepage' => $getHomepage
			),
			'View' => 'front/index'
		);
		$this->LoadPage($value);
	}

	public function team(){
		// $getHomepage = $this->Culturalmodel->getHomepage();
		$value = array(
			'Result' => array(
				// 'getHomepage' => $getHomepage
			),
			'View' => 'front/team'
		);
		$this->LoadPage($value);
	}

	public function work(){
		// $getHomepage = $this->Culturalmodel->getHomepage();
		$value = array(
			'Result' => array(
				// 'getHomepage' => $getHomepage
			),
			'View' => 'front/work'
		);
		$this->LoadPage($value);
	}

	public function course(){
		// $getHomepage = $this->Culturalmodel->getHomepage();
		$value = array(
			'Result' => array(
				// 'getHomepage' => $getHomepage
			),
			'View' => 'front/course'
		);
		$this->LoadPage($value);
	}

	public function contact(){
		// $getHomepage = $this->Culturalmodel->getHomepage();
		$value = array(
			'Result' => array(
				// 'getHomepage' => $getHomepage
			),
			'View' => 'front/contact'
		);
		$this->LoadPage($value);
	}

}
