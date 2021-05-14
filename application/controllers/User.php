<?php
	class User extends CI_Controller {
		
		public function loginView() {
			$this->load->view('templates/header');
			$this->load->view('pages/login');
			$this->load->view('templates/footer');
		}

		public function registerView() {
			$this->load->view('templates/header');
			$this->load->view('pages/register');
			$this->load->view('templates/footer');
		}

		public function userLogin() {
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/login');
				$this->load->view('templates/footer');
			} else {	
				// Get email
				$email = $this->input->post('email');
				// Get and encrypt the password
				$password = md5($this->input->post('password'));

				// Login user
				$user = $this->User_model->login($email, $password);

				if($user){
					// Create session
					$user_data = array(
						'user_id' => $user->id,
						'email' => $user->email,
						'internalStudent' => $user->internalStudent,
						'rolePermissions' => $user->rolePermissions,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);

					// Set message
					$this->session->set_flashdata('user_loggedin', 'You are now logged in');
					
					// redirect on successful login
					redirect('');

				} else {
					// Set message
					$this->session->set_flashdata('login_failed', 'Login is invalid');
					redirect('user/login');
				}
			}
		}

		public function registerUser() {
			$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
			$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('passwordRepeat', 'Confirm Password', 'matches[password]');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('pages/register');
				$this->load->view('templates/footer');
			} else {
				// Encrypt password
				$enc_password = md5($this->input->post('password'));

				$this->User_model->register($enc_password);
				
				// Set message
				$this->session->set_flashdata('user_registered', 'You are now registered and can log in');

				redirect('user/login');
			}
		}

		// Check if username exists
		public function check_username_exists($username){
			$this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one');
			
			if($this->User_model->check_username_exists($username)){
				return true;
			} else {
				return false;
			}
		}

		// Check if email exists
		public function check_email_exists($email){
			$this->form_validation->set_message('check_email_exists', 'That email is taken. Please choose a different one');
			if($this->User_model->check_email_exists($email)){
				return true;
			} else {
				return false;
			}
		}

		// Log user out
		public function logout(){
			// Unset user data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('internalStudent');
			$this->session->unset_userdata('rolePermissions');

			// Set message
			$this->session->set_flashdata('user_loggedout', 'You are now logged out');

			redirect('/');
		}

		public function forgetPassword() {
			$this->load->view('templates/header');
			$this->load->view('pages/forgetPassword');
			$this->load->view('templates/footer');
		}

		public function sendUserEmail() {
			redirect('user/login');
		}
	}
