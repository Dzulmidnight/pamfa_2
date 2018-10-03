<? 
defined('BASEPATH') OR exit('No direct script access allowed');

class mSrrc extends CI_Model {

	
	function _construct(){
		parent:: _construct();
		
	}
	
	public function guardar($id)
	{
		
		$campos=array('fk_id_solicitud'=>$id);
		
		$this->db->insert('srrc_solicitud',$campos);
		
		
		
	}
	public function actualizar($params,$id)
	{
		
		$campos=array(
				'area1'=>$params['area1'],
				'area2'=>$params['area2'],
				'seccion1'=>$params['seccion1'],
				'seccion2'=>$params['seccion2'],
				'seccion3'=>$params['seccion3'],
				'num_unidades'=>$params['num_unidades'],

				
				'num_prod_integral'=>$params['num_prod_integral']);
				
		$this->db->where('fk_id_solicitud',$id);
		$this->db->update('srrc_solicitud',$campos);
		
		
		
	}
	public function guardar_c($params,$id)
	{
		
		$campos=array('fk_id_solicitud'=>$id,
				'area1'=>$params['area1'],
				'area2'=>$params['area2'],
				'seccion1'=>$params['seccion1'],
				'seccion2'=>$params['seccion2'],
				'seccion3'=>$params['seccion3'],
				'num_unidades'=>$params['num_unidades'],

				
				'num_prod_integral'=>$params['num_prod_integral']);
				
		
		$this->db->insert('srrc_solicitud',$campos);
		
		
		
	}
	public function eliminar($id)
	{
		
		
		$this->db->where('fk_id_solicitud',$id);
		$this->db->delete('srrc_solicitud');
		
		
		
	}
	public function consulta_srrc($id)
	{
		
		$this->db->select('*');
		
		$this->db->from('srrc_solicitud');
		
		$this->db->where('fk_id_solicitud',$id);
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->row();
        }
		
	}
	
	
	
}