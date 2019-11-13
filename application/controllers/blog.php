<?php


class Blog extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('id'))
		{
			return redirect('Login');
		}
		$this->load->model('Blog_Model');

	}
	public function index()
	{

		$result['data']=$this->Blog_Model->getallblogs();

		$this->load->view('bloglist',$result);
	}

	public function create()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('title','Title','trim|required');
		$this->form_validation->set_rules('description','Description','trim|required');
		$this->form_validation->set_rules('author','Author','trim|required');

		if ($this->form_validation->run()==FALSE)
		{
				$this->load->view('create');

		}
		else
		{
			if ($this->input->post('create'))
			{
				$arrayset = array();

				$arrayset['title']=$this->input->post('title');
				$arrayset['description']=$this->input->post('description');
				$arrayset['author']=$this->input->post('author');
				$arrayset['created_at']=date('Y-m-d');

				$this->Blog_Model->create($arrayset);

				$this->session->set_flashdata('success','Blog created successfully');

				redirect(base_url()."Blog/index");

			}



		}
	}


	public function edit()
	{
		$id = $this->input->get('id');
		$result['data']= $this->Blog_Model->displayrecordsbyid($id);
		$this->load->view('editblog1',$result);



		if($this->input->post('update'))
		{
			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$author = $this->input->post('author');

			$this->Blog_Model->updaterecords($title,$description,$author,$id);
			$this->session->set_flashdata('success','Blog updated successfully');
			redirect(base_url().'Blog/index');
		}


	}



	public function delete()
	{
		$id = $this->input->get('id');
		$this->Blog_Model->deleterecords($id);
		$this->session->set_flashdata('success','Blog deleted successfully');
		redirect(base_url().'Blog/index');
	}




}







?>
