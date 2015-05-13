<?php

/**
 * Empresa Model.
 */
class Empresa_model extends CI_Model {

	# save $data on 'empresa'
	function save($data) {
		
		$this->db->set('rut', $data['rut']);
		$this->db->set('rzsocial', $data['rzsocial']);

		if($data['id'] == NULL) {
			$this->db->set('created_at', date('Y-m-d h:i:s',time()));
			$this->db->insert('empresa');
		} else {
			$this->db->where('id', $data['id']);
			$this->db->set('updated_at', date('Y-m-d h:i:s',time()));
			$this->db->update('empresa');
		}

		return $this->db->affected_rows();
	}

	# retrives $data from 'empresa'
	function find($id = NULL) {
		if($id != NULL) {
			$this->db->where('id', $id);
			return $this->db->get('empresa')->row();
		} else {
			return $this->db->get('empresa')->result();
		}
	}

	# destroy $data from  'empresa'
	function destroy($id) {
		$this->db->where('id', $id);
		$this->db->delete('empresa');

		return $this->db->affected_rows();
	}
	# Recupera los nombres de empresas
	function getNomEmpresas(){
		$sql = $this->db->query('SELECT id,rzsocial FROM empresa');
		foreach ($sql->result() as $reg) {
			# code...
			$data[$reg->id] = $reg->rzsocial;
		}
		return $data;
	}

}
