<? 
defined('BASEPATH') OR exit('No direct script access allowed');

class mProducto_srrc extends CI_Model {

	
	function _construct(){
		parent:: _construct();
		
	}
	
	public function guardar($params,$id)
	{
		
		$campos=array('fk_id_solicitud'=>$id,
		'producto_srrc'=>$params['producto_srrc'],
		'pais_srrc'=>$params['pais_srrc'],
		'porcentaje'=>$params['porcentaje']);
		
		$this->db->insert('producto_srrc',$campos);
		
	
	}
	
	public function eliminar($params)
	{
		
		
		$this->db->where('id_producto_srrc', $params['idproducto']);
$this->db->delete('producto_srrc');
		
		
		
		
	}
	public function eliminar_todo($id)
	{
		
		
		$this->db->where('fk_id_solicitud', $id);
$this->db->delete('producto_srrc');
		
	
	}
	
	public function consulta_srrc($id)
	{
		
		$this->db->select('*');
		$this->db->where('fk_id_solicitud',$id);
		$this->db->from('producto_srrc');
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
		
	}
	
	
}