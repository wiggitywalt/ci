<?php
	defined('BASEPATH') OR exit('no direct script access allowed');

	class Data_model extends CI_Model{

		public function getTestData(){
//			return "your mama";
			return $this->db->get('users')->result();
		}
	}