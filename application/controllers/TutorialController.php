<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TutorialController extends CI_Controller {
    
    function TutorialController(){
        parent::__construct();
        $this->load->helper('url');
    }

	public function index()
	{
		$this->load->view('TutorialView');
	}
}
