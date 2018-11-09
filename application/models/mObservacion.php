<? 
defined('BASEPATH') OR exit('No direct script access allowed');

class mObservacion extends CI_Model {

	
	function _construct(){
		parent:: _construct();
		
	}
	
	public function guardar($params,$id,$f)
	{
		
		$campos=array('fk_id_solicitud'=>$id,
			'fk_id_admin'=>$this->session->userdata('s_idusuario'),
		'seccion'=>$params['seccion_observacion'],
		'norma'=>$params['idnorma'],
		'campo'=>$params['id_pregunta_observacion'],
		'observacion'=>$params['descripcion_observacion'],
		'fecha'=>$f,
		'estatus'=>0);
		
		$this->db->insert('observacion_solicitud',$campos);
		
	
	}
	public function consulta_totales()
	{
		
		$this->db->select('DISTINCT(fk_id_solicitud),COUNT(id_observacion) as tot');
		
		$this->db->from('observacion_solicitud');
		$this->db->group_by('fk_id_solicitud');
		
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
		
	}
	public function actualizar($params)
	{
		$t=time();
		$campos=array(
		'estatus'=>1,
		'fecha_rev'=>$t);
		$this->db->where('id_observacion', $params['idobs']);
		$this->db->update('observacion_solicitud',$campos);
		
	
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