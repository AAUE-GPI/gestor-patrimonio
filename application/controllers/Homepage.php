<?php 
class Homepage extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
		//$this->load->model('<models que querem>');
	}

	public function index()
	{
		$this->load->view('template/header');
		
		$this->is_logged_in();
		
		if (isset($this->auth_username))
		{
			$this->load->view('homepage');
		}
		else
		{
			redirect(base_url()."index.php/login");
		}

		$this->load->view('template/footer');
	}
	
	public function logout()
	{
		$this->authentication->logout();

		// Set redirect protocol
		$redirect_protocol = USE_SSL ? 'https' : NULL;

		redirect( site_url( LOGIN_PAGE . '?logout=1', $redirect_protocol ) );
	}
}
