<?php 
class Test extends CI_Controller {
	
	public function __construct()
    {
	    parent::__construct();
    	
    	//$this->load->model('<models que querem>');
    }

    public function index()
    {
    	$this->load->view('template/header');
		$this->load->view('homepage');
		$this->load->view('template/footer');
    }
}
