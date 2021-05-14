<?php
	class User_model extends CI_Model{

        public function __construct(){
			$this->load->database();
		}

        public function register($enc_password){
			// TODO:: this data we needs to change according to our database and schema 
			// User data array
			$data = array(
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'internalStudent' => $this->input->post('internalStudent'),
				'matricCardFile' => $this->input->post('matricCardFile'),
				'studentId' => $this->input->post('studentId'),
				'password' => $enc_password,
				'rolePermissions' => 10,
            );

            // Insert user
			return $this->db->insert('users', $data);
		}

		// Log user in
		public function login($email, $password){
			// Validate
			$this->db->where('email', $email);
			$this->db->where('password', $password);

			$result = $this->db->get('users');

			if($result->num_rows() == 1){
				return $result->row(0);
			} else {
				return false;
			}
		}

		// Check username exists
		public function check_username_exists($username){
			$query = $this->db->get_where('users', array('username' => $username));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

		// Check email exists
		public function check_email_exists($email){
			$query = $this->db->get_where('users', array('email' => $email));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

		public function findUsers($email) {
			$query = $this->db->query("SELECT * FROM users WHERE email = '$email'");
			return $query->result_object();
		}

		public function updateUserPermission($userId, $rolePermissions) {
			$query = $this->db->query("UPDATE users SET rolePermissions = '$rolePermissions' WHERE id = '$userId'");
		}
	}