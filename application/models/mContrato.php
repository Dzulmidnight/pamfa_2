<? 
defined('BASEPATH') OR exit('No direct script access allowed');

class mContrato extends CI_Model {

	
	function _construct(){
		parent:: _construct();
		
	}
	
	public function guardar($id)
	{
		//$indice=$params['indice'];
		$campos=array('fk_id_solicitud'=>$id,
			
		'fk_id_admin'=> $this->session->userdata('s_idusuario'),
		'estatus'=>0,
		'fecha'=>time());
		
		$this->db->insert('contrato',$campos);
		
	
	}
	public function consulta_contrato($id)
	{
		
		$this->db->select('*');
		$this->db->where('fk_id_solicitud', $id);
		$this->db->from('contrato');
		
		
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
             return $query->row();
        }
		
	}
	
	
	public function consulta($id)
	{
		
		$this->db->select('*');
		$this->db->from('contrato');
		$this->db->where('fk_id_solicitud', $id);

		
		
		
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->num_rows();
        }
		
	}
	public function actualizar($params)
	{
		
			
		$campos=array(
			
		'fk_id_admin'=> $this->session->userdata('s_idusuario'),
		'estatus'=> $params['estatus'],
		'razon'=> $params['razon'],
		'fecha'=>time());
		$this->db->where('fk_id_solicitud', $params['idsolicitud']);
		
		$this->db->update('contrato',$campos);
		
	
	}
	
	
	
	

		
	
}