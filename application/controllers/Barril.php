<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barril extends CI_Controller {
	
	public function __construct()
    {
	    parent::__construct();
    	$this->load->model('FAQ_model');
    }

	public function index()
	{
		$data['row'] = $this->FAQ_model->getFAQ();
		$this->load->view('template/header', $data);
		$this->load->view('FAQ');
		$this->load->view('template/footer');

	}
}