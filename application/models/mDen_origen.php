<? 
defined('BASEPATH') OR exit('No direct script access allowed');

class mDen_origen extends CI_Model {

	
	function _construct(){
		parent:: _construct();
		
	}
	
	public function guardar($id)
	{
		
		$campos=array('fk_id_solicitud'=>$id);
		
		$this->db->insert('den_origen_solicitud',$campos);
		
		
		
	}
	public function actualizar($params,$id)
	{
		
		$campos=array(
				
				'productos'=>$params['pliego_condiciones'],
				'descripcion'=>$params['descripcion_den']
				//'anexo'=>$params['anexo']
			);
		$this->db->where('fk_id_solicitud',$id);
		$this->db->update('den_origen_solicitud',$campos);
		
		
		
	}
	public function eliminar($id)
	{
		
		
		$this->db->where('fk_id_solicitud',$id);
		$this->db->delete('den_origen_solicitud');
		
		
		
	}
	public function consulta_origen($id)
	{
		
		$this->db->select('*');
		
		$this->db->from('den_origen_solicitud');
		
		$this->db->where('fk_id_solicitud',$id);
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->row();
        }
		
	}
	public function subir_archivo($params)
	{
		
		$campos=array(
			
		'anexo'=>$params['url']);
		
		
		
		$this->db->where('fk_id_solicitud',$params['id']);
		$this->db->update('den_origen_solicitud',$campos);
		
	}
	
	
}