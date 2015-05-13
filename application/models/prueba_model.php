<?php

/**
 * Prueba Model.
 */
class Prueba_model extends CI_Model {

	# save $data on 'prueba'
	function save($data) {
		
		$this->db->set('nombre', $data['nombre']);
		$this->db->set('edad', $data['edad']);

		if($data['id'] == NULL) {
			$this->db->set('created_at', date('Y-m-d h:i:s',time()));
			$this->db->insert('prueba');
		} else {
			$this->db->where('id', $data['id']);
			$this->db->set('updated_at', date('Y-m-d h:i:s',time()));
			$this->db->update('prueba');
		}

		return $this->db->affected_rows();
	}

	# retrives $data from 'prueba'
	function find($id = NULL) {
		if($id != NULL) {
			$this->db->where('id', $id);
			return $this->db->get('prueba')->row();
		} else {
			return $this->db->get('prueba')->result();
		}
	}

	# destroy $data from  'prueba'
	function destroy($id) {
		$this->db->where('id', $id);
		$this->db->delete('prueba');

		return $this->db->affected_rows();
	}

}
