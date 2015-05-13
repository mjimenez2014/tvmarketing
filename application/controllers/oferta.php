<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Oferta Controller.
 */
class Oferta extends CI_Controller {

	function __construct() { 
		parent::__construct();
		$this->load->model('oferta_model');
		$this->load->model('empresa_model');

	}

	# GET /oferta
	function index() {
		$data['oferta'] = $this->oferta_model->find();
		$data['content'] = '/oferta/index';
		$this->load->view('/nav/nav');		
		$this->load->view('/includes/template', $data);

	}



	function carrusel() {
	$data['oferta'] = $this->oferta_model->find();
	$this->load->view('/oferta/carrusel', $data);
	}

	# GET /oferta/create
	function create($empresa,$sucursal) {
		$data['content'] = '/oferta/create';
		$data['empresa']= $empresa;
		$data['sucursal']= $sucursal;	
		$this->load->view('/includes/template', $data);
	}

	# GET /oferta/edit/1
	function edit() {
		$id = $this->uri->segment(3);
		$data['oferta'] = $this->oferta_model->find($id);
		$data['content'] = '/oferta/create';
		$this->load->view('/includes/template', $data);
	}

	# GET /oferta/destroy/1
	function destroy() {
		$id = $this->uri->segment(3);
		$data['oferta'] = $this->oferta_model->destroy($id);
		redirect('/oferta/index', 'refresh');
	}

	# POST /oferta/save
	function save() {
		
		$this->form_validation->set_rules('empresa', 'Empresa', 'required');
		$this->form_validation->set_rules('sucursal', 'Sucursal', 'required');
		$this->form_validation->set_rules('producto', 'Producto', 'required');
		$this->form_validation->set_rules('precio', 'Precio', 'required');
		$this->form_validation->set_rules('url_image', 'Url_image', 'required');

		if ($this->form_validation->run()) {

			$data[] = array();
			$data['id'] = $this->input->post('id', TRUE);
			$data['empresa'] = $this->input->post('empresa', TRUE);
			$data['sucursal'] = $this->input->post('sucursal', TRUE);
			$data['producto'] = $this->input->post('producto', TRUE);
			$data['precio'] = $this->input->post('precio', TRUE);
			$data['url_image'] = $this->input->post('url_image', TRUE);
			$this->oferta_model->save($data);
			redirect('/oferta/index', 'refresh');
		}
		$data['oferta'] =	$this->rebuild();
		$data['content'] = '/oferta/create';
		$this->load->view('/includes/template', $data);
	}

	function rebuild() {
		$object = new oferta_model();
		$object->id = $this->input->post('id', TRUE);
		$object->empresa = $this->input->post('empresa', TRUE);
		$object->sucursal = $this->input->post('sucursal', TRUE);
		$object->producto = $this->input->post('producto', TRUE);
		$object->precio = $this->input->post('precio', TRUE);
		$object->url_image = $this->input->post('url_image', TRUE);
		return $object;
	}
}

?>

