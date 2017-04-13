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
		$this->load->view('aluguer_carro');
		$this->load->view('template/footer');
        
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('user','text','trim');
        
        if($this->form_validation->run())
        {   
            if($this->input->post("login") == 'registar')
            {
                echo 'Registar: '.$this->input->post("pass");
            }
            if($this->input->post("login") == 'login')
            {
                echo 'Login: '.$this->input->post("pass");
            }
        }

    }
}
