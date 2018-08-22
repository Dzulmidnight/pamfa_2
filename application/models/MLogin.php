<? 
defined('BASEPATH') OR exit('No direct script access allowed');

class mLogin extends CI_Model {

	
	function _construct(){
		parent:: _construct();
	}
	
	public function ingresar($usu,$pass,$tipo)
	{
		
	
		if($tipo=='cliente'){
			$this->db->select('c.id_cliente,c.nombreLegal,c.username,c.password,c.estatus');
		$this->db->from('cliente c');
		}
		else if($tipo=='auditor'){
			$this->db->select('c.id_cliente,c.nombreLegal,c.username,c.password,c.estatus');
		$this->db->from('auditor c');
		}
		elseif($tipo=='administrador'){
			$this->db->select('c.id_administrador,c.nombre,c.apellidos,c.username,c.password,c.estatus');
		$this->db->from('administrador c');
		}
		$this->db->where('c.username like binary',$usu);
		$this->db->where('c.password',$pass);
		$this->db->where('c.estatus=1');
		
	
	$resultado=$this->db->get();
	
	if($resultado->num_rows()>0){
	$r=$resultado->row();
	if($tipo=='cliente'){
			$s_usuario=array('s_idusuario'=>$r->id_cliente,'s_usuario'=>$r->nombreLegal,'s_tipo'=>$tipo);
		}
		else if($tipo=='auditor'){
			$s_usuario=array('s_idusuario'=>$r->id_cliente,'s_usuario'=>$r->nombreLegal,'s_tipo'=>$tipo);
		}
		elseif($tipo=='administrador'){
			
			$s_usuario=array('s_idusuario'=>$r->id_administrador,'s_usuario'=>$r->nombre." ".$r->nombre,'s_tipo'=>$tipo);
		}
	
	$this->session->set_userdata($s_usuario);
	
	return 1;
	
	}
	else { return 0;}
	}
}