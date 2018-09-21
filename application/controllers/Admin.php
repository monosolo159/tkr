<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function LoadPage($value){
		if(isset($value['Result'])){
			$data = $value['Result'];
			$this->load->view('back/template/header', $data);
		}else{
			$this->load->view('back/template/header');
		}
		$this->load->view('back/template/sidebar');
		$this->load->view($value['View']);
		$this->load->view('back/template/footer');
	}

	public function index(){
		// $this->load->view('back/body');

		// $getHomepage = $this->Culturalmodel->getHomepage();
		// $value = array(
		// 	'Result' => array(
		// 		// 'getHomepage' => $getHomepage
		// 	),
		// 	'View' => 'back/body1'
		// );
		// $this->LoadPage($value);
		redirect('Admin/team');
	}

	public function team(){
		// $this->load->view('back/body');

		$teamlist = $this->Teammodel->teamList();
		$value = array(
			'Result' => array(
				'teamlist' => $teamlist
			),
			'View' => 'back/team_list'
		);
		$this->LoadPage($value);
	}

	public function teamInsert(){
		// $this->load->view('back/body');

		// $getHomepage = $this->Culturalmodel->getHomepage();
		$value = array(
			'Result' => array(
				// 'getHomepage' => $getHomepage
			),
			'View' => 'back/team_insert'
		);
		$this->LoadPage($value);
	}




	public function work(){
		// $this->load->view('back/body');

		// $getHomepage = $this->Culturalmodel->getHomepage();
		$value = array(
			'Result' => array(
				// 'getHomepage' => $getHomepage
			),
			'View' => 'back/work'
		);
		$this->LoadPage($value);
	}

	public function course(){
		// $this->load->view('back/body');

		// $getHomepage = $this->Culturalmodel->getHomepage();
		$value = array(
			'Result' => array(
				// 'getHomepage' => $getHomepage
			),
			'View' => 'back/course'
		);
		$this->LoadPage($value);
	}


}
