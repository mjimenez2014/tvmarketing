<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Producto Controller.
 */
class Producto extends CI_Controller {

	function __construct() { 
		parent::__construct();
		$this->load->model('producto_model');
	}

	# GET /producto
	function index() {
		$data['producto'] = $this->producto_model->find();
		$data['content'] = '/producto/index';
		$this->load->view('/includes/template', $data);
	}

	function buscaproducto($empresa,$sucursal) {
		$data['producto'] = $this->producto_model->find();
		$data['content'] = '/producto/buscaproducto';
		$this->load->view('/includes/template', $data);
	}

	# GET /producto/create
	function create() {
		$data['content'] = '/producto/create';
		$this->load->view('/includes/template', $data);
	}

	# GET /producto/edit/1
	function edit() {
		$id = $this->uri->segment(3);
		$data['producto'] = $this->producto_model->find($id);
		$data['content'] = '/producto/create';
		$this->load->view('/includes/template', $data);
	}

	# GET /producto/destroy/1
	function destroy() {
		$id = $this->uri->segment(3);
		$data['producto'] = $this->producto_model->destroy($id);
		redirect('/producto/index', 'refresh');
	}

	# POST /producto/save
	function save() {
		
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('plu', 'Plu', 'required');
		$this->form_validation->set_rules('ean13', 'Ean13', 'required');
		$this->form_validation->set_rules('precio1', 'Precio1', 'required');
		$this->form_validation->set_rules('precio2', 'Precio2', 'required');
		$this->form_validation->set_rules('precio3', 'Precio3', 'required');
		$this->form_validation->set_rules('imagen', 'Imagen', 'required');

		if ($this->form_validation->run()) {

			$data[] = array();
			$data['id'] = $this->input->post('id', TRUE);
			$data['nombre'] = $this->input->post('nombre', TRUE);
			$data['plu'] = $this->input->post('plu', TRUE);
			$data['ean13'] = $this->input->post('ean13', TRUE);
			$data['precio1'] = $this->input->post('precio1', TRUE);
			$data['precio2'] = $this->input->post('precio2', TRUE);
			$data['precio3'] = $this->input->post('precio3', TRUE);
			$data['imagen'] = $this->input->post('imagen', TRUE);
			$this->producto_model->save($data);
			redirect('/producto/index', 'refresh');
		}
		$data['producto'] =	$this->rebuild();
		$data['content'] = '/producto/create';
		$this->load->view('/includes/template', $data);
	}

	function rebuild() {
		$object = new producto_model();
		$object->id = $this->input->post('id', TRUE);
		$object->nombre = $this->input->post('nombre', TRUE);
		$object->plu = $this->input->post('plu', TRUE);
		$object->ean13 = $this->input->post('ean13', TRUE);
		$object->precio1 = $this->input->post('precio1', TRUE);
		$object->precio2 = $this->input->post('precio2', TRUE);
		$object->precio3 = $this->input->post('precio3', TRUE);
		$object->imagen = $this->input->post('imagen', TRUE);
		return $object;
	}
}

?>

