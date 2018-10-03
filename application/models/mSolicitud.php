<? 
defined('BASEPATH') OR exit('No direct script access allowed');

class mSolicitud extends CI_Model {

	
	function _construct(){
		parent:: _construct();
		
	}
	
	public function guardar()
	{
		$f=time();
		
		$campos=array('fk_id_cliente'=>$this->session->userdata('s_idusuario'),
		'fecha'=>$f,
	'estatus'=>1);
		
		$this->db->insert('solicitud',$campos);
		
		
		
	}

	public function actualiza_norma($x,$y,$id)
	{
		
		


		$campos=array(
		$x=>$y);
		$this->db->where('id_solicitud',$id);
		$this->db->update('solicitud',$campos);
		
		
		
	}
	public function actualiza_final($params,$id)
	{
		
		


		$campos=array(
		'idiomas'=>$params['idiomas'],
		'uso_datos'=>$params['uso_datos']);
		$this->db->where('id_solicitud',$id);
		$this->db->update('solicitud',$campos);
		
		
		
	}
	public function eliminar($params)
	{
		
		
		$this->db->where('id_producto_solicitud', $params['idproducto']);
$this->db->delete('producto_solicitud');
		
		
		
		
	}
	
	public function consulta()
	{
		
		$this->db->select('*');
		
		$this->db->from('solicitud');
		$this->db->where('fk_id_cliente',$this->session->userdata('s_idusuario'));
		$this->db->where('estatus',1);
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->row();
        }
		
	}
	public function ver()
	{
		
		$this->db->select('*');
		
		$this->db->from('producto_solicitud c');
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
		
	}
	
}