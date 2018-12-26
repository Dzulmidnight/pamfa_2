<? 
defined('BASEPATH') OR exit('No direct script access allowed');

class mRechazo_servicio extends CI_Model {

	
	function _construct(){
		parent:: _construct();
		
	}
	
	public function guardar($params,$id)
	{
		
		$campos=array('fk_id_solicitud'=>$id,
			
		'razon1'=>$params['razon1'],
		'razon2'=>$params['razon2'],
		'razon3'=>$params['razon3'],
		'razon4'=>$params['razon4'],
		'razon5'=>$params['razon5'],
		'razon6'=>$params['razon6'],
		'fecha'=>time(),
		'fk_id_admin'=>$this->session->userdata('s_idusuario'));
		
		$this->db->insert('rechazo_servicio',$campos);
		
	
	}
	public function consulta_totales($id)
	{
		
		$this->db->select('*');
		$this->db->where('fk_id_solicitud', $id);
		$this->db->from('rechazo_servicio');
		$this->db->group_by('fk_id_solicitud');
		
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->num_rows();
        }
		
	}
	public function consulta_rechazo($id)
	{
		
		$this->db->select('*');
		$this->db->where('fk_id_solicitud', $id);
		$this->db->from('rechazo_servicio');
		
		
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->row();
        }
		
	}
	public function consulta_rechazo_c()
	{
		
		$this->db->select('*');
		
		$this->db->from('rechazo_servicio');
		

		
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
		
	}
	public function actualizar_id($params,$id)
	{
		
			
		$campos=array(
			
		'razon1'=>$params['razon1'],
		'razon2'=>$params['razon2'],
		'razon3'=>$params['razon3'],
		'razon4'=>$params['razon4'],
		'razon5'=>$params['razon5'],
		'razon6'=>$params['razon6']);
		$this->db->where('fk_id_solicitud', $id);
		$this->db->update('rechazo_servicio',$campos);
		
	
	}
	
	
	
	
	
	
	
}