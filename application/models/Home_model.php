<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function addUser($data)
	{
		return $this->db->insert('users',$data);
	}
	public function auth($data)
	{
		return $this->db->get_where('users',$data)->num_rows();
	}
	public function userFinder($email)
	{
		return $this->db->get_where('users',array('email'=>$email))->result();
	}
	public function updateUser($data)
	{
		$this->db->where('email',$this->session->userdata('email'));
		return $this->db->update('users',$data);
	}
	public function currentBalanceFinder($email)
	{
		return $this->db->get_where('users',array('email'=>$email))->row()->wallet;
	}
	public function balanceUpdater($email,$wallet)
	{
		$this->db->where('email',$email);
		return $this->db->update('users',array('wallet'=>$wallet));
	}
	public function addTransactionHistory($data)
	{
		return $this->db->insert('payment',$data);
	}

}

