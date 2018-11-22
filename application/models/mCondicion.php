<? 
defined('BASEPATH') OR exit('No direct script access allowed');

class mCondicion extends CI_Model {

	
	function _construct(){
		parent:: _construct();
		
	}
	
	public function guardar($params,$id)
	{
		
		$campos=array('fk_id_solicitud'=>$id,
			
		'preg1'=>$params['preg1'],
		'preg2'=>$params['preg2'],
		'preg3'=>$params['preg3'],
		'preg4'=>$params['preg4']);
		
		$this->db->insert('condicion_interna',$campos);
		
	
	}
	public function consulta_totales()
	{
		
		$this->db->select('*');
		
		$this->db->from('condicion_interna');
		$this->db->group_by('fk_id_solicitud');
		
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->num_rows();
        }
		
	}
	public function consulta_condicion($id)
	{
		
		$this->db->select('*');
		
		$this->db->from('condicion_interna');
		$this->db->group_by('fk_id_solicitud',$id);
		
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->row();
        }
		
	}
	public function actualizar_id($params,$id)
	{
		
			
		$campos=array(
			
		'preg1'=>$params['preg1'],
		'preg2'=>$params['preg2'],
		'preg3'=>$params['preg3'],
		'preg4'=>$params['preg4']);
		$this->db->where('fk_id_solicitud', $id);
		$this->db->update('condicion_interna',$campos);
		
	
	}
	
	public function eliminar($params)
	{
		
		
		$this->db->where('id_observacion', $params['idobs']);
$this->db->delete('observacion_solicitud');
		
		
		
		
	}
	public function eliminar_todo($id)
	{
		
		
		$this->db->where('fk_id_solicitud', $id);
$this->db->delete('producto_srrc');
		
	
	}
	
	public function consulta_obs($id)
	{
		
		$this->db->select('*');
		$this->db->where('fk_id_solicitud',$id);
		$this->db->from('observacion_solicitud');
		$this->db->order_by('seccion');
		$this->db->order_by('norma');
		$this->db->order_by('id_observacion');
		//$this->db->order_by('id_observacion','asc');
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
		
	}
	public function consulta_obs_una($params,$id)
	{
		
		$this->db->select('*');
		$this->db->where('fk_id_solicitud',$id);
		$this->db->where('campo',$params['id_pregunta_observacion']);

		$this->db->from('observacion_solicitud');
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->num_rows() ;
        }
		
	}
	
	
}