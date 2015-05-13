<?php

/**
 * Models Model.
 */
class Models_model extends CI_Model {

	# save $data on 'models'
	function save($data) {
		
		$this->db->set('name', $data['name']);
		$this->db->set('filed2', $data['filed2']);
		$this->db->set('filed3', $data['filed3']);

		if($data['id'] == NULL) {
			$this->db->set('created_at', date('Y-m-d h:i:s',time()));
			$this->db->insert('models');
		} else {
			$this->db->where('id', $data['id']);
			$this->db->set('updated_at', date('Y-m-d h:i:s',time()));
			$this->db->update('models');
		}

		return $this->db->affected_rows();
	}

	# retrives $data from 'models'
	function find($id = NULL) {
		if($id != NULL) {
			$this->db->where('id', $id);
			return $this->db->get('models')->row();
		} else {
			return $this->db->get('models')->result();
		}
	}

	# destroy $data from  'models'
	function destroy($id) {
		$this->db->where('id', $id);
		$this->db->delete('models');

		return $this->db->affected_rows();
	}

}
