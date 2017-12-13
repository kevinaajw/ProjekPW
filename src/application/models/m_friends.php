<?php
class m_friends extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}

	public function get_list($username, $my_username){
			 // Use the Active Record class for safer queries.
        	$this->db->select('*');
        	$this->db->from('friends');
  			$this->db->where("(username_friend = '" . $username . "' AND username = '" . $my_username . "') ");

        	// Execute the query.
        	$query = $this->db->get();

        	// Return the results.
        	return $query->result_array();
	}

	public function input($username_friend, $username){
		$data = array(
			'username_friend' => $username_friend,
			'username' => $username
		);
		$this->db->insert('friends', $data);
	}
}