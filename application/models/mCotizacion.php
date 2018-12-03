<? 
defined('BASEPATH') OR exit('No direct script access allowed');

class mCotizacion extends CI_Model {

	
	function _construct(){
		parent:: _construct();
		
	}
	
	public function guardar($params)
	{
		//$indice=$params['indice'];
		$campos=array('fk_id_solicitud'=>$params['idsolicitud'],
			
		'concepto'=>$params['concepto'],
		'descripcion'=>$params['descripcion'],
		'costo'=>$params['costo'],
		'cantidad'=>$params['cantidad'],
		'sub_total'=>$params['pre_total'],
		'indice'=>$params['indice']);
		
		$this->db->insert('cotizacion_solicitud',$campos);
		
	
	}
	public function consulta_cotizacion($id)
	{
		
		$this->db->select('*');
		$this->db->where('fk_id_solicitud', $id);
		$this->db->from('cotizacion_solicitud');
		
		
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
		
	}
	public function consulta_totales($params)
	{
		
		$this->db->select('*');
		
		$this->db->from('cotizacion_solicitud');
		$this->db->where('fk_id_solicitud', $params['idsolicitud']);
		$this->db->where('indice', $params['indice']);
		
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->num_rows();
        }
		
	}
	public function eliminar($params)
	{
		
		$this->db->where('fk_id_solicitud', $params['idsolicitud']);
		$this->db->where('indice', $params['indice']);
				
		
		$this->db->delete('cotizacion_solicitud');
		
		
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->num_rows();
        }
		
	}
	public function consulta($params)
	{
		
		$this->db->select('*');
		$this->db->from('cotizacion_solicitud');
		$this->db->where('id_cotizacion', $params['id']);

		
		
		
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->num_rows();
        }
		
	}
	
	public function actualizar($params)
	{
		
			
		$campos=array(
			
		'concepto'=>$params['concepto'],
		'descripcion'=>$params['descripcion'],
		'costo'=>$params['costo'],
		'cantidad'=>$params['cantidad'],
		'sub_total'=>$params['pre_total']);
		$this->db->where('fk_id_solicitud', $params['idsolicitud']);
		$this->db->where('indice', $params['indice']);
		$this->db->update('cotizacion_solicitud',$campos);
		
	
	}
	
	
	
	

		
	
}