<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductosController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$this->load->database();
		$this->load->model('ProductosModel');
		$data['query'] = $this->ProductosModel->obtenerProductos();
		$this->load->helper('form');

		$this->load->view('ProductosView',$data);
	}

	public function aumentarCantidad(){
		$this->load->model('ProductosModel');
		$this->load->helper('url');

		$id = $this->input->post('id');

		$sumando = 0.5;

		$nuevacantidad = $this->ProductosModel->obtenerCantidad($id) + $sumando;

		$this->ProductosModel->actualizarCantidad($id,$nuevacantidad);

		redirect('ProductosController');


	}

	public function disminuirCantidad(){
		$this->load->model('ProductosModel');
		$this->load->helper('url');

		$id = $this->input->post('id');

		$sustraendo = 0.5;

		$nuevacantidad = $this->ProductosModel->obtenerCantidad($id) - $sustraendo;

		$this->ProductosModel->actualizarCantidad($id,$nuevacantidad);

		redirect('ProductosController');

	}

	public function actualizarCantidad(){
		$this->load->model('ProductosModel');
		$this->load->helper('url');

		$id = $this->input->post('id');

		$masomenos = $this->input->post('botonmasomenos');

		if ($masomenos != "Menos" ) $operando = +0.5;
		else $operando = -0.5;

		$numero = 0.5;

		$nuevacantidad = $this->ProductosModel->obtenerCantidad($id) + $operando;

		$this->ProductosModel->actualizarCantidad($id,$nuevacantidad);

		redirect('');

	}
}
