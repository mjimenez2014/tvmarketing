<?php

/**
 * Sucursal Model.
 */
class Sucursal_model extends CI_Model {

	# save $data on 'sucursal'
	function save($data) {
		
		$this->db->set('nombre', $data['nombre']);
		$this->db->set('direccion', $data['direccion']);
		$this->db->set('idempresa', $data['idempresa']);

		if($data['id'] == NULL) {
			$this->db->set('created_at', date('Y-m-d h:i:s',time()));
			$this->db->insert('sucursal');
		} else {
			$this->db->where('id', $data['id']);
			$this->db->set('updated_at', date('Y-m-d h:i:s',time()));
			$this->db->update('sucursal');
		}

		return $this->db->affected_rows();
	}

	# retrives $data from 'sucursal'
	function find($id = NULL) {
		if($id != NULL) {
			$this->db->where('id', $id);
			return $this->db->get('sucursal')->row();
		} else {
			return $this->db->get('sucursal')->result();
		}
	}

	# destroy $data from  'sucursal'
	function destroy($id) {
		$this->db->where('id', $id);
		$this->db->delete('sucursal');

		return $this->db->affected_rows();
	}

	function porEmpresa($id){
		$this->db->where('idempresa', $id);
		return $this->db->get('sucursal')->result();
	}

}
