<? 
defined('BASEPATH') OR exit('No direct script access allowed');

class mCliente extends CI_Model {

	
	function _construct(){
		parent:: _construct();
		
	}
	
	public function guardar($params)
	{
		
		$campos=array('username'=>$params['username'],
		'password'=>$params['password'],
		'nombreLegal'=>$params['nombreLegal'],
		'nombreRepresentante'=>$params['nombreRepresentante'],
		'direccion'=>$params['direccion'],
		'cp'=>$params['cp'],
		'colonia'=>$params['colonia'],
		'municipio'=>$params['municipio'],
		'estado'=>$params['estado'],
		'pais'=>$params['pais'],
		//'coordenadas'=>$params['coordenadas'],
		'email'=>$params['email'],
		'telefono'=>$params['telefono'],
		'fax'=>$params['fax'],
		'fechaAlta'=>$params['fechaAlta'],
		
		'estatus'=>$params['estatus']);
		$this->db->insert('cliente',$campos);
		
	}
}