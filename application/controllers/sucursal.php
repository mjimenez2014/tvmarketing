<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Sucursal Controller.
 */
class Sucursal extends CI_Controller {

	function __construct() { 
		parent::__construct();
		$this->load->model('sucursal_model');
	}

	# GET /sucursal
	function index() {
		$data['sucursal'] = $this->sucursal_model->find();
		$data['content'] = '/sucursal/index';
		$this->load->view('/includes/template', $data);
	}

	function selectSucursal($id) {
		$data['sucursal'] = $this->sucursal_model->porEmpresa($id);
		$data['content'] = '/sucursal/selectsucursal';
		$this->load->view('/includes/template', $data);
	}

	# GET /sucursal/create
	function create() {
		$data['content'] = '/sucursal/create';
		$this->load->view('/includes/template', $data);
	}

	# GET /sucursal/edit/1
	function edit() {
		$id = $this->uri->segment(3);
		$data['sucursal'] = $this->sucursal_model->find($id);
		$data['content'] = '/sucursal/create';
		$this->load->view('/includes/template', $data);
	}

	# GET /sucursal/destroy/1
	function destroy() {
		$id = $this->uri->segment(3);
		$data['sucursal'] = $this->sucursal_model->destroy($id);
		redirect('/sucursal/index', 'refresh');
	}

	# POST /sucursal/save
	function save() {
		
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('direccion', 'Direccion', 'required');
		$this->form_validation->set_rules('idempresa', 'Idempresa', 'required');

		if ($this->form_validation->run()) {

			$data[] = array();
			$data['id'] = $this->input->post('id', TRUE);
			$data['nombre'] = $this->input->post('nombre', TRUE);
			$data['direccion'] = $this->input->post('direccion', TRUE);
			$data['idempresa'] = $this->input->post('idempresa', TRUE);
			$this->sucursal_model->save($data);
			redirect('/sucursal/index', 'refresh');
		}
		$data['sucursal'] =	$this->rebuild();
		$data['content'] = '/sucursal/create';
		$this->load->view('/includes/template', $data);
	}

	function rebuild() {
		$object = new sucursal_model();
		$object->id = $this->input->post('id', TRUE);
		$object->nombre = $this->input->post('nombre', TRUE);
		$object->direccion = $this->input->post('direccion', TRUE);
		$object->idempresa = $this->input->post('idempresa', TRUE);
		return $object;
	}
}

?>

