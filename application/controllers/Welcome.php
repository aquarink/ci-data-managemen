<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->database();
		$this->load->library('form_validation');
          //load the login model
		$this->load->model('UserModel');
	}

	public function index()
	{
		$this->load->view('welcome_message.php');
	}

	public function login()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		$this->form_validation->set_rules("username", "Username", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('welcome_message.php');
		}
		else
		{
			if ($this->input->post('btn_login') == "Login")
			{
				$usr_result = $this->UserModel->userCheck($username);
				if ($usr_result > 0) 
				{
					$sessiondata = array(
						'username' => $username,
						'loginuser' => TRUE
						);
					$this->session->set_userdata($sessiondata);
					redirect("index0");
				}
				else
				{
					$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');
					redirect('login/index1');
				}
			}
			else
			{
				var_dump($this->input->post(''));
				//redirect('login/index2');
			}
		}
	}
}
