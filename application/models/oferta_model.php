<?php

/**
 * Oferta Model.
 */
class Oferta_model extends CI_Model {

	# save $data on 'oferta'
	function save($data) {
		
		$this->db->set('empresa', $data['empresa']);
		$this->db->set('sucursal', $data['sucursal']);
		$this->db->set('producto', $data['producto']);
		$this->db->set('precio', $data['precio']);
		$this->db->set('url_image', $data['url_image']);

		if($data['id'] == NULL) {
			$this->db->set('created_at', date('Y-m-d h:i:s',time()));
			$this->db->insert('oferta');
		} else {
			$this->db->where('id', $data['id']);
			$this->db->set('updated_at', date('Y-m-d h:i:s',time()));
			$this->db->update('oferta');
		}

		return $this->db->affected_rows();
	}

	# retrives $data from 'oferta'
	function find($id = NULL) {
		if($id != NULL) {
			$this->db->where('id', $id);
			return $this->db->get('oferta')->row();
		} else {
			return $this->db->get('oferta')->result();
		}
	}

	# destroy $data from  'oferta'
	function destroy($id) {
		$this->db->where('id', $id);
		$this->db->delete('oferta');

		return $this->db->affected_rows();
	}

}
