<?php 
class Carros extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
		$this->load->view('template/header');
		
		$this->load->view('aluguer_carro');

		$this->load->view('template/footer');
    }
}
?>
