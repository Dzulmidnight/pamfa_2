<?php
class cPais extends CI_Controller {

	
	function __construct(){
		parent:: __construct();
		$this->load->model('mPais');
	}
	public function index()
	{
		//$this->load->view('vLogin');
	}
	public function pais()
	{
		$resultado=$this->mPais->paises();
		
		echo json_encode($resultado);
		
	}
	
	
		
}
