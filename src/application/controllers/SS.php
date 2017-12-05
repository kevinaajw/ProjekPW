<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SS extends CI_Controller {
	public function __construct() {
   parent::__construct();
   
   // Load form helper library
   $this->load->helper('form');
   
   // Load form validation library
   $this->load->library('form_validation');
   
   // Load session library
   $this->load->library('session');
   
   // Load database
   $this->load->model('m_login');
  }
 
	public function index() {
		$id = $this->input->get('id');

		$this->load->model('m_user');
		// $data['response'] = $this->m_user->get($id);
		// $this->load->view('v_html',$data);
		$dt['user'] = $this->m_user->get($id);
	}

	public function profile() {
		$this->load->view('v_profile');
	}

	public function home() {
		$this->load->view('v_home');
	}

	// Check for user login process
  public function login() {
   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
   
   if ($this->form_validation->run() == FALSE) {
    if(isset($this->session->userdata['logged_in'])){
     $this->load->view('v_home');
    }
    else{
     $this->load->view('v_login');
    }
   } 
   else {
    $data = array(
    'username' => $this->input->post('username'),
    'password' => $this->input->post('password')
    );
    $result = $this->m_login->login($data);
    if ($result == TRUE) {
     $username = $this->input->post('username');
     $result = $this->m_login->read_user_information($username);
     if ($result != false) {
      $session_data = array(
      'username' => $result[0]->username
      );
      // Add user data in session
      $this->session->set_userdata('logged_in', $session_data);
      $this->load->view('v_home');
     }
    } 
    else {
     $data = array('error_message' => 'Invalid Username or Password');
     $this->load->view('v_login', $data);
    }
   }
  }
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('SS/login'));
	}
}
