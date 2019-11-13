

<?php

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Loginadmin_Model');
		$this->load->library('form_validation');

	}





	public function index()
	{


		$this->load->library('form_validation'); //load library for form validation

		$this->form_validation->set_rules('username','Username','required');  //form_validation
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('loginadmin');
		}
		else
		{


			if ($this->input->post('login'))
			{
				$username = $this->input->post('username');
				$password = $this->input->post('password');

				$data = $this->Loginadmin_Model->logindata($username,$password);


				if($data)
				{
					$arrayset = array();

					$arrayset['id']=$data->id;
					$arrayset['username']=$data->username;

					$this->session->set_userdata($arrayset);
					return redirect('Admindashboard/index');
				}
				else
				{
					redirect('Login/index');
				}
			}


		}
	}


}



?>
