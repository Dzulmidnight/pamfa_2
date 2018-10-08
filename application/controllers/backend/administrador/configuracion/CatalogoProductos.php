<?php
	
class CatalogoProductos extends CI_Controller{

function __construct(){
		parent:: __construct();
		
		$this->load->model('mAuditor');
		
	}
	function index(){

		$this->load->view('backend/administrador/templates/header');
		$this->load->view('backend/administrador/templates/topnavigation');
		$this->load->view('backend/administrador/templates/navbar');
		$this->load->view('backend/administrador/catalogos/listado_productos.php');
		$this->load->view('backend/administrador/templates/footer');
	}

}