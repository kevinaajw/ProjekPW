<?php
class m_photo extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	
	public function get($id){
		$this->db->where('id', $id);
		return $this->db->get('photo');
	}

	public function get_pp($username){

		$this->db->select('p.id, p.status, p.path, p.img, p.username AS p_user, p.upload_date, u.photo_id');
        $this->db->from('photo as p');
        $this->db->like('p.username', $username);
  		$this->db->join('user as u', 'p.username = u.username');

        return $this->db->get();
	}

	public function get_list($username){
			$this->db->where('username', $username);
			return $this->db->get('photo');
	}

	//public function get_list_home(){
	//		return $this->db->get('photo');
	//}

	public function get_list_home()
    {
        // Use the Active Record class for safer queries.
        $this->db->select('p.id, p.status, p.path, p.img, p.username AS p_user, p.upload_date, u.photo_id, u.id AS u_id');
        $this->db->from('photo as p');
  		$this->db->join('user as u', 'p.username = u.username');

        return $this->db->get();
    }
}