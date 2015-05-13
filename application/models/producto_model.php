<?php

/**
 * Producto Model.
 */
class Producto_model extends CI_Model {

	# save $data on 'producto'
	function save($data) {
		
		$this->db->set('nombre', $data['nombre']);
		$this->db->set('plu', $data['plu']);
		$this->db->set('ean13', $data['ean13']);
		$this->db->set('precio1', $data['precio1']);
		$this->db->set('precio2', $data['precio2']);
		$this->db->set('precio3', $data['precio3']);
		$this->db->set('imagen', $data['imagen']);

		if($data['id'] == NULL) {
			$this->db->set('created_at', date('Y-m-d h:i:s',time()));
			$this->db->insert('producto');
		} else {
			$this->db->where('id', $data['id']);
			$this->db->set('updated_at', date('Y-m-d h:i:s',time()));
			$this->db->update('producto');
		}

		return $this->db->affected_rows();
	}

	# retrives $data from 'producto'
	function find($id = NULL) {
		if($id != NULL) {
			$this->db->where('id', $id);
			return $this->db->get('producto')->row();
		} else {
			return $this->db->get('producto')->result();
		}
	}

	# destroy $data from  'producto'
	function destroy($id) {
		$this->db->where('id', $id);
		$this->db->delete('producto');

		return $this->db->affected_rows();
	}

}
