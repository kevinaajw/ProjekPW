<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SS extends CI_Controller {
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

	public function login() {
		$this->load->view('v_login');
	}
}
