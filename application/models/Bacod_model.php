<?php
class Bacod_model extends CI_Model {

	public function get_message()
	{
		$sql=$this->db->get('table_message');
		return $sql->result();
	}

	public function get_user()
	{
		$sql=$this->db->get('table_user');
		return $sql->result();
	}
}