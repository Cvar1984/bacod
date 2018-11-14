<?php
class Bacod extends CI_Model {

	public function get_message()
	{
		$sql=$this->db->get('message');
		return $sql->result();
	}

	public function get_user()
	{
		$sql=$this->db->get('user');
		return $sql->result();
	}
}