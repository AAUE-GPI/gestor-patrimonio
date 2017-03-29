<?php 
class Test extends MY_Controller {
	
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

    public function login()
    {
        // Method should not be directly accessible
        if( $this->uri->uri_string() == 'examples/login')
            show_404();

        if( strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post' )
            $this->require_min_level(1);

        $this->is_logged_in();
        if (isset($this->auth_username))
        {
            redirect(base_url());
        }
        
        $this->setup_login_form();

        $html = $this->load->view('template/header', '', TRUE);
        $html .= $this->load->view('examples/login_form', '', TRUE);
        $html .= $this->load->view('template/footer', '', TRUE);

        echo $html;
    }
    
    public function logout()
    {
        $this->authentication->logout();

        // Set redirect protocol
        $redirect_protocol = USE_SSL ? 'https' : NULL;

        redirect( site_url( LOGIN_PAGE . '?logout=1', $redirect_protocol ) );
    }
}
