<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Empresa Controller.
 */
class Empresa extends CI_Controller {

	function __construct() { 
		parent::__construct();
		$this->load->model('empresa_model');
	}

	# GET /empresa
	function index() {
		$data['empresa'] = $this->empresa_model->find();
		$data['content'] = '/empresa/index';
		$this->load->view('/includes/template', $data);
	}

	function selectEmpresa() {
		$data['empresa'] = $this->empresa_model->find();
		$data['content'] = '/empresa/selectempresa';	
		$this->load->view('/includes/template', $data);

	}

	# GET /empresa/create
	function create() {
		$data['content'] = '/empresa/create';
		$this->load->view('/includes/template', $data);
	}

	# GET /empresa/edit/1
	function edit() {
		$id = $this->uri->segment(3);
		$data['empresa'] = $this->empresa_model->find($id);
		$data['content'] = '/empresa/create';
		$this->load->view('/includes/template', $data);
	}

	# GET /empresa/destroy/1
	function destroy() {
		$id = $this->uri->segment(3);
		$data['empresa'] = $this->empresa_model->destroy($id);
		redirect('/empresa/index', 'refresh');
	}

	# POST /empresa/save
	function save() {
		
		$this->form_validation->set_rules('rut', 'Rut', 'required');
		$this->form_validation->set_rules('rzsocial', 'Rzsocial', 'required');

		if ($this->form_validation->run()) {

			$data[] = array();
			$data['id'] = $this->input->post('id', TRUE);
			$data['rut'] = $this->input->post('rut', TRUE);
			$data['rzsocial'] = $this->input->post('rzsocial', TRUE);
			$this->empresa_model->save($data);
			redirect('/empresa/index', 'refresh');
		}
		$data['empresa'] =	$this->rebuild();
		$data['content'] = '/empresa/create';
		$this->load->view('/includes/template', $data);
	}

	function rebuild() {
		$object = new empresa_model();
		$object->id = $this->input->post('id', TRUE);
		$object->rut = $this->input->post('rut', TRUE);
		$object->rzsocial = $this->input->post('rzsocial', TRUE);
		return $object;
	}
}

?>

