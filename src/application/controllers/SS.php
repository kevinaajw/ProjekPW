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
    $this->load->model('m_user');
    $this->load->model('m_photo');
    
    $username = $this->session->userdata['logged_in']['username'];
    $id = $this->session->userdata['logged_in']['id'];

    $data['profile'] = $this->m_user->get($id);  
    $data['response'] = $this->m_photo->get_pp($username);
		$this->load->view('v_profile', $data);
	}

	public function home() {
    $this->load->model('m_photo');

    $data['response'] = $this->m_photo->get_list_home();
		$this->load->view('v_home', $data);
	}

  public function profilfriend() {
    $this->load->model('m_user');
    $this->load->model('m_photo');
    $this->load->model('m_friends');

    $id = $this->uri->segment(3);
    $username = $this->m_user->get_username($id);
    $my_username = $this->session->userdata['logged_in']['username'];
    $data['response'] = $this->m_user->get($id);
    $data['photo'] = $this->m_photo->get_list($username);
    $data['friends'] = $this->m_friends->get_list($username, $my_username);
    $this->load->view('v_profilfriend', $data);
    
    
  }

  public function detail() {
    $this->load->model('m_photo');

    $id = $this->uri->segment(3);
    $username = $this->uri->segment(4);
    $data['response'] = $this->m_photo->get($id);
    $data['pp'] = $this->m_photo->get_pp($username);
    $this->load->view('v_detail', $data);
  }

  public function upload() {
    $this->load->view('v_upload');
  }

  public function user_search() {
    $this->load->model('m_user');

    // Retrieve the posted search term.
    $search_term = $this->input->post('search');

    if(isset($search_term)){
      // Use a model to retrieve the results.
      $data['results'] = $this->m_user->get_results($search_term);
      $data['search_term'] = $this->input->post('search');

      // Pass the results to the view.
      $this->load->view('v_pencarian',$data);
    }
    else{
      $this->load->view('v_home');
    }
  }

   public function daftar() {
    $this->load->view('v_daftar');
  }  
  
  public function form() {
    $this->load->view('v_form');
  }

  public function add_friend() {
   $this->load->model('m_friends');

   $id = $this->input->post('id');
   $username_friend = $this->input->post('username_friend');
   $username = $this->input->post('username');
    
   $this->m_friends->input($username_friend, $username);
   redirect('SS/profilfriend/'.$id, 'refresh');

  }  
  
  public function upload_photo() {
   $this->load->model('m_upload');

   $username = $this->input->post('username');
   $upload_date = date('Y-m-d H:i:s');
   $id_normal = $this->input->post('id');
   $m_date = str_replace( ':', '', $upload_date);
   $m_dateb = str_replace(' ', '-', $m_date);
   $id = $this->input->post('id').'_'.$m_dateb;
   $lokasi_file=$_FILES['foto']['tmp_name'];
   $dir = base_url().'static/img/'.$id_normal.'/';
   $dirb = $_SERVER['DOCUMENT_ROOT'] .'/CI_Project/src/static/img/'.$id_normal.'/';
   $hasil=$_FILES['foto']['name'];
   if(!is_dir($dirb)) //create the folder if it's not already exists
   {
    mkdir($dirb, 0777, TRUE);
   }
   move_uploaded_file($lokasi_file , $dirb.$hasil);
    
   if($this->m_upload->input($id, $dir, $hasil, $username, $upload_date)){
    $this->profile();
   }
   else{
    $this->load->view('v_upload');
   }

  }

  public function register_akun() {
    $this->load->model('m_user');

    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $lokasi_file=$_FILES['foto']['tmp_name'];
    $dir = $_SERVER['DOCUMENT_ROOT'] .'/CI_Project/src/static/img/';
    $hasil=$_FILES['foto']['name'];
    move_uploaded_file($lokasi_file , $dir.$hasil);

    if(isset($hasil)){
      $this->m_user->register($nama, $email, $username, $password, $hasil);  
    }
    else{
      $this->m_user->register($nama, $email, $username, "profile_default.jpg", $hasil);
    }
    
    $this->login();

  }

	// Check for user login process
  public function login() {
   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
   
   if ($this->form_validation->run() == FALSE) {
    if(isset($this->session->userdata['logged_in'])){
     $this->home();
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
      'username' => $result[0]->username,
      'id' => $result[0]->id
      );
      // Add user data in session
      $this->session->set_userdata('logged_in', $session_data);
      $this->home();
     }
    } 
    else {
     $data = array('error_message' => 'Invalid Username or Password');
     $this->load->view('v_login', $data);
    }
   }
  }
 
	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url('SS/login'));
	}

}
?>