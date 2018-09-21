<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

	public function teamInsert(){
		// $getHomepage = $this->Culturalmodel->getHomepage();
		$input = $this->input->post();
		$this->Teammodel->teamInsert($input);

		redirect('Admin/team');
	}

	public function teamDelete(){
		// $getHomepage = $this->Culturalmodel->getHomepage();
		$id = $this->uri->segment(3);
		$this->Teammodel->teamDelete($id);

		redirect('Admin/team');
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
