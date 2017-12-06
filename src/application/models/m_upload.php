<?php
class m_field extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	
	public function get(){
		$query = $this->db->get('field');
		return $query->result_array();
	}
	
	public function input($id, $category_id, $name, $address, $open_hour, $close_hour, $price, $contact)
		{
			$data = array(
				'id' => $id,
				'category_id' => $category_id,
				'name' => $name,
				'address' => $address,
				'open_hour' => $open_hour,
				'close_hour' => $close_hour,
				'price' => $price,
				'contact' => $contact
			);

			if ($this->db->insert('field', $data)){
				return TRUE;
			}
		}
	
	public function pilih($id){
			$this->db->where('id', $id);
			return $this->db->get('field');
	}
	
	public function update($id, $category_id, $name, $address, $open_hour, $close_hour, $price, $contact){
		$data = array(
			'category_id' => $category_id,
			'name' => $name,
			'address' => $address,
			'open_hour' => $open_hour,
			'close_hour' => $close_hour,
			'price' => $price,
			'contact' => $contact
		);
		$this->db->where('id', $id);
		$this->db->update('field', $data);
		if($this->db->update('field', array('category_id' => $category_id, 'name' => $name, 'address' => $address, 'open_hour' => $open_hour, 'close_hour' => $close_hour, 'price' => $price, 'contact' => $contact))){
		  return TRUE;
		}
	}
	
	public function hapus($id){
		  $this->db->where('id', $id);
		  if($this->db->delete('field')){
			  redirect('BFA/adm_field', 'refresh');
		  }
	  }
}