<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}

	function index()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$this->load->view('common/header');
			$this->load->view('common/main_menu');
			$this->load->view('main', $data);
			$this->load->view('common/footer');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */