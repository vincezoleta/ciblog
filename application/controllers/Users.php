<?php 
	class Users extends CI_Controller{
		//register user
		public function register(){
			$data['title'] = 'Sign Up';

			$this->form_validation->set_rules('name', 'Name', 'required|alpha');
			$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists|min_length[3]|max_length[12]');
			$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[18]');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'required' , 'matches[password]');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/register', $data);
				$this->load->view('templates/footer');
			} else {
				//Encrypt Password
				$enc_password = md5($this->input->post('password'));

				$this->user_model->register($enc_password);

				//Set message
				$this->session->set_flashdata('user_registered', 'You are now registered and can log in');


				redirect('posts');

			}

		}

		// Log in user
		public function login(){
			$data['title'] = 'Sign In';

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
		

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');

			} else {
			
				//Get username
				$username = $this->input->post('username');
				//Get and encrypt password 
				$password = md5($this->input->post('password'));


				//Log in user
				$user_id = $this->user_model->login($username, $password);

				if($user_id){
					// create session
					$user_data = array(
						'user_id' => $user_id,
						'username' => $username,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);

					//Set message
					$this->session->set_flashdata('login_successful', 'You are now logged in');

				redirect('posts');

				} else {
					
					//Set message
					$this->session->set_flashdata('login_failed', 'Login is invalid');


					redirect('users/login');
				}
			}
		}

		// Log out user
		public function logout(){
			//Unset user data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('username');

			//Set message
					$this->session->set_flashdata('logout_successful', 'You are now logged out');

					redirect('users/login');
		}
		//Check if username exists 
		public function check_username_exists($username){
			$this->form_validation->set_message('check_username_exists','That username is already taken. Please choose a different one');
			if($this->user_model->check_username_exists($username)){
				return true;
			} else {
				return false;
			}
		}
		//Check if email exists 
		public function check_email_exists($email){
			$this->form_validation->set_message('check_email_exists','That email is already in use. Please choose a different one');
			if($this->user_model->check_email_exists($email)){
				return true;
			} else {
				return false;
			}
		}

	}