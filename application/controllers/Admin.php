<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct()
    {
	    parent::__construct();
    	$this->load->model('admin_model');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['jogos'] = $this->calendario_model->getJogos();
		$data['equipas'] = $this->admin_model->getEquipas();

		if ($this->input->post('guardar') == 'Equipas')
        {
            if ($this->form_validation->run())
            {   
                $equipa = array(
                    'nome' => $this->input->post("equipa")
                );

                $this->admin_model->addEquipa($equipa);
                $data['equipas'] = $this->admin_model->getEquipas($equipa);
            }
        }

        if ($this->input->post('guardar') == 'Jogador')
        {
            if ($this->form_validation->run())
            {   
                $equipa = array(
                    'nome' => $this->input->post("jogador"),
                    'equipa' => $this->input->post("equipa")
                );

                $this->admin_model->addJogador($equipa);
            }
        }

        if ($this->input->post('guardar') == 'Grupo')
        {
            if ($this->form_validation->run())
            {   
                $equipa = array(
                    'nome' => $this->input->post("jogador"),
                    'equipa' => $this->input->post("equipa")
                );

                $this->admin_model->addJogador($equipa);
            }
        }



		$this->load->view('template/header', $jogos);
		$this->load->view('admin');
		$this->load->view('template/footer');
	}
}
