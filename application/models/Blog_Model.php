<?php

class Blog_Model extends CI_Model
{
	function create($arrayset)
	{
		$this->db->insert('blog',$arrayset);
	}
	function getallblogs()
	{

		$query = $this->db->query("select * from blog");
		return $query->result();

	}

	function updaterecords($title,$description,$author,$id)
	{
		$sql = $this->db->query("update blog SET title='$title',description='$description',author='$author'where blog_id='".$id."'");


	}
	function displayrecordsbyid($id)
	{
		$sql = $this->db->query("select * from blog where blog_id='".$id."'");
		return $sql->result();
	}

	 function deleterecords($id)
	{
		$sql = "delete from blog where blog_id='".$id."'";
		$this->db->query($sql);
	}

	 function record_count()
	{
		return $this->db->count_all('blog');
	}

}

?>
