<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Prueba Controller.
 */
class Prueba extends CI_Controller {

	function __construct() { 
		parent::__construct();
		$this->load->model('prueba_model');
	}

	# GET /prueba
	function index() {
		$data['prueba'] = $this->prueba_model->find();
		$data['content'] = '/prueba/index';
		$this->load->view('/includes/template', $data);
	}

	# GET /prueba/create
	function create() {
		$data['content'] = '/prueba/create';
		$this->load->view('/includes/template', $data);
	}

	# GET /prueba/edit/1
	function edit() {
		$id = $this->uri->segment(3);
		$data['prueba'] = $this->prueba_model->find($id);
		$data['content'] = '/prueba/create';
		$this->load->view('/includes/template', $data);
	}

	# GET /prueba/destroy/1
	function destroy() {
		$id = $this->uri->segment(3);
		$data['prueba'] = $this->prueba_model->destroy($id);
		redirect('/prueba/index', 'refresh');
	}

	# POST /prueba/save
	function save() {
		
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('edad', 'Edad', 'required');

		if ($this->form_validation->run()) {

			$data[] = array();
			$data['id'] = $this->input->post('id', TRUE);
			$data['nombre'] = $this->input->post('nombre', TRUE);
			$data['edad'] = $this->input->post('edad', TRUE);
			$this->prueba_model->save($data);
			redirect('/prueba/index', 'refresh');
		}
		$data['prueba'] =	$this->rebuild();
		$data['content'] = '/prueba/create';
		$this->load->view('/includes/template', $data);
	}

	function rebuild() {
		$object = new prueba_model();
		$object->id = $this->input->post('id', TRUE);
		$object->nombre = $this->input->post('nombre', TRUE);
		$object->edad = $this->input->post('edad', TRUE);
		return $object;
	}
}

?>

