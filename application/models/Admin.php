<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendario_model extends CI_Model {

	public function __construct()
    {
            parent::__construct();
            $this->load->database();
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
	public function getEquipas()
	{
		$query = $this->db->get('equipas');

		return $query->result_array();
	}

	public function addEquipa($equipa)
	{
		$this->db->insert('equipas', $equipa);
	}

	public function addJogador($equipa)
	{
		$this->db->insert('jogador', $equipa);
	}

	public function setGrupo($equipa, $grupo)
	{
		$data = array(
	        'grupo_id' => $grupo
	    );

		$this->db->where('id', $equipa);
		$this->db->update('equipas', $data);
	}

	public function getJogo($id)
	{
		$query = $this->db->get('jogos');

		return $query->result_array();
	}

	public function getJogosbyGroup($grupo)
	{
		$sql='SELECT * FROM calendario where grupo=?';
		$query=$this->db->query($sql, array('$grupo'));
		return $query->result_array();
	}
}
