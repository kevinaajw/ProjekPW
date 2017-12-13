<?php
class m_user extends CI_Model{
 
 public function __construct(){
  $this->load->database();
 }

 public function get($id){
      $this->db->where('id', $id);
      return $this->db->get('user');
  }

 public function get_results($search_term)
 {
  // Use the Active Record class for safer queries.
  $this->db->select('*');
  $this->db->from('user');
  $this->db->like('username', $search_term);

  // Execute the query.
  $query = $this->db->get();

  // Return the results.
  return $query->result_array();
}

public function get_username($id)
 {
  $username = $this->db->select('username')
                  ->get_where('user', array('id' => $id))
                  ->row()
                  ->username;

  return $username;
}

public function register($nama, $email, $username, $password, $hasil)
{
  $data = array(
    'nama' => $nama,
    'email' => $email,
    'username' => $username,
    'password' => $password,
    'photo_id' => $hasil
  );

  $this->db->insert('user', $data);
  return TRUE;
}
 
}