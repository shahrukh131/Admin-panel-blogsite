<?php 


class Loginadmin_Model extends CI_Model
{
	function logindata($username,$password)
	{
		$query = $this->db->where(['username'=>$username,'password'=>$password])
							->get('admin');

		$data = $query->row();
		return $data;
	}

	
	
	
}








 ?>