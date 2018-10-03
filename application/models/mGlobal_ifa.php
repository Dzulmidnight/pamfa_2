<? 
defined('BASEPATH') OR exit('No direct script access allowed');

class mGlobal_ifa extends CI_Model {

	
	function _construct(){
		parent:: _construct();
		
	}
	
	public function guardar($id)
	{
		
		$campos=array('fk_id_solicitud'=>$id);
		
		$this->db->insert('global_ifa_solicitud',$campos);
		
		
		
	}
	public function actualizar($params,$id)
	{
		
		$campos=array(
				'opcion'=>$params['opcion'],
				'productos'=>$params['productos'],
				'num_productores'=>$params['num_productores'],
				'num_unidades_prod'=>$params['num_unidades_prod'],
				'num_unidades_manip'=>$params['num_unidades_manip']);
		$this->db->where('fk_id_solicitud',$id);
		$this->db->update('global_ifa_solicitud',$campos);
		
		
		
	}
	public function eliminar($id)
	{
		
		
		$this->db->where('fk_id_solicitud',$id);
		$this->db->delete('global_ifa_solicitud');
		
		
		
	}
	public function consulta_ifa($id)
	{
		
		$this->db->select('*');
		
		$this->db->from('global_ifa_solicitud');
		
		$this->db->where('fk_id_solicitud',$id);
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->row();
        }
		
	}
	
	
	
}