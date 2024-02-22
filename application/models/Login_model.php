<?php

Class Login_model extends CI_Model {

		public function check_user($data) {

			// Query to check whether username already exist or not
			$condition = "admin_email =" . "'" . $data['admin_email'] . "'";
			$this->db->select('*');
			$this->db->from('admin');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();
			if ($query->num_rows() == 0) {
				return false;
			} else {
				return true;
			}
		}


		public function read_user_information($data) {
			$this->db->select('*');
			$this->db->from('admin');
			$this->db->where($data);
			$this->db->limit(1);
			$query = $this->db->get();
			if ($query->num_rows() == 1) {
			return $query->result();
			} else {
			return false;
			}
		}
}