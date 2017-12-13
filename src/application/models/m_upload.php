<?php
class m_upload extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	
	public function input($id, $path, $hasil, $username, $upload_date)
		{
			$data = array(
				'id' => $id,
				'path' => $path,
				'img' => $hasil,
				'username' => $username,
				'upload_date' => $upload_date
			);

			if ($this->db->insert('photo', $data)){
				return TRUE;
			}
		}
	
	public function pilih($id){
			$this->db->where('id', $id);
			return $this->db->get('photo');
	}
	
	public function hapus($id){
		  $this->db->where('id', $id);
		  if($this->db->delete('field')){
			  redirect('BFA/adm_field', 'refresh');
		  }
	  }
}