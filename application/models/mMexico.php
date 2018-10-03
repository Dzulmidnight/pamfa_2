<? 
defined('BASEPATH') OR exit('No direct script access allowed');

class mMexico extends CI_Model {

	
	function _construct(){
		parent:: _construct();
		
	}
	
	public function guardar($params,$id)
	{
		
		$campos=array('fk_id_solicitud'=>$id,
		'mex_producto'=>$params['mex_producto'],
		'descripcion'=>$params['descripcion']);
		
		$this->db->insert('hecho_mexico_solicitud',$campos);
		
		
		
	}
	
	public function eliminar($params)
	{
		
		
		$this->db->where('id_hecho_mexico', $params['idproducto']);
$this->db->delete('hecho_mexico_solicitud');
		
		
		
		
	}
	public function eliminar_todo($id)
	{
		
		
		$this->db->where('fk_id_solicitud', $id);
$this->db->delete('hecho_mexico_solicitud');
		
	
	}
	
	public function consulta_mex($id)
	{
		
		$this->db->select('*');
		$this->db->where('fk_id_solicitud',$id);
		
		$this->db->from('hecho_mexico_solicitud');
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
		
	}
	
	
}