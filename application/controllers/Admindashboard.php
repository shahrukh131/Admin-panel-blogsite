<?php
class Admindashboard extends CI_Controller
{



	public function index()
	{
		$this->load->view('dashboard');

	}

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('id'))
		{
			return redirect('Login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		return redirect(site_url('login'));
	}

}
?>
