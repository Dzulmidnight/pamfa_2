<? 
defined('BASEPATH') OR exit('No direct script access allowed');

class mLogin extends CI_Model {

	
	function _construct(){
		parent:: _construct();
	}
	
	public function ingresar($usu,$pass,$tipo)
	{
		
		$this->db->select('c.id_cliente,c.nombreLegal,c.username,c.password,c.estatus');
		if($tipo=='cliente'){
		$this->db->from('cliente c');
		}
		else if($tipo=='auditor'){
		$this->db->from('auditor c');
		}
		elseif($tipo=='administrador'){
		$this->db->from('admintrador c');
		}
		$this->db->where('c.username like binary',$usu);
		$this->db->where('c.password',$pass);
		$this->db->where('c.estatus=1');
		
	
	$resultado=$this->db->get();
	
	if($resultado->num_rows()>0){
	$r=$resultado->row();
	
	$s_usuario=array('s_idusuario'=>$r->id_cliente,'s_usuario'=>$r->nombreLegal);
	$this->session->set_userdata($s_usuario);
	
	return 1;
	
	}
	else { return 0;}
	}
}