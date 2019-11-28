<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni_Model extends CI_Model {
	
	/************************************************/
	public function InsertData($tableName, $data)
	{
		return $this->db->insert($tableName, $data);
	}
	
	public function UpdateData($tableName, $data, $where)
	{
		$this->db->where($where);
		return $this->db->update($tableName, $data);
	}
	
	public function DeleteDate($tableName, $where)
	{
		$this->db->where($where);
		return $this->db->delete($tableName);
	}
	
	/************************************************/
	
	public function getAllCourses()
	{
		$this->db->select('*')->from('degree');
		return $this->db->get()->result();
	}	
	public function getAllDepartments()
	{
		$this->db->select('*')->from('aca_unit');
		$this->db->where('type','Department');
		return $this->db->get()->result();
	}
	public function CheckRegisterEmail($user)
	{
		$this->db->select('userid')->from('user_details');
		$this->db->where('userid', $user);
		return $this->db->get()->num_rows();
	}
	public function validateAlumni($email,$password)
	{
		$this->db->select('*')->from('user_details');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
	}
}
	