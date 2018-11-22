<? 
defined('BASEPATH') OR exit('No direct script access allowed');

class mVerificacion extends CI_Model {

	
	function _construct(){
		parent:: _construct();
		
	}
	
	public function guardar($params,$id)
	{
		
		$campos=array('fk_id_solicitud'=>$id,
			
		'pregunta1'=>$params['pregunta1'],
		'observacion1'=>$params['observacion1'],
		'pregunta2'=>$params['pregunta2'],
		'observacion2'=>$params['observacion2'],
		'pregunta3'=>$params['pregunta3'],
		'observacion3'=>$params['observacion3'],
		'pregunta4'=>$params['pregunta4'],
		'observacion4'=>$params['observacion4'],
		'pregunta5'=>$params['pregunta5'],
		'observacion5'=>$params['observacion5'],
		'pregunta6'=>$params['pregunta6'],
		'observacion6'=>$params['observacion6'],
		'pregunta7'=>$params['pregunta7'],
		'observacion7'=>$params['observacion7'],
		'pregunta8'=>$params['pregunta8'],
		'observacion8'=>$params['observacion8'],
		'fecha'=> time());
		
		$this->db->insert('verificacion_datos',$campos);
		
	
	}
	public function consulta_totales()
	{
		
		$this->db->select('*');
		
		$this->db->from('verificacion_datos');
		$this->db->group_by('fk_id_solicitud');
		
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->num_rows();
        }
		
	}
	public function consulta_verificacion($id)
	{
		
		$this->db->select('*');
		
		$this->db->from('verificacion_datos');
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
			
		'pregunta1'=>$params['pregunta1'],
		'observacion1'=>$params['observacion1'],
		'pregunta2'=>$params['pregunta2'],
		'observacion2'=>$params['observacion2'],
		'pregunta3'=>$params['pregunta3'],
		'observacion3'=>$params['observacion3'],
		'pregunta4'=>$params['pregunta4'],
		'observacion4'=>$params['observacion4'],
		'pregunta5'=>$params['pregunta5'],
		'observacion5'=>$params['observacion5'],
		'pregunta6'=>$params['pregunta6'],
		'observacion6'=>$params['observacion6'],
		'pregunta7'=>$params['pregunta7'],
		'observacion7'=>$params['observacion7'],
		'pregunta8'=>$params['pregunta8'],
		'observacion8'=>$params['observacion8']);
		$this->db->where('fk_id_solicitud', $id);
		$this->db->update('verificacion_datos',$campos);
		
	
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