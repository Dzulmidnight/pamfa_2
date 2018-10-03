<? 
defined('BASEPATH') OR exit('No direct script access allowed');

class mCert_anterior_sol extends CI_Model {

	
	function _construct(){
		parent:: _construct();
		
	}
	
	public function guardar($id)
	{
		
		$campos=array('fk_id_solicitud'=>$id);
		
		$this->db->insert('cert_anterior_solicitud',$campos);
		
		
		
	}
	public function actualizar($params,$id)
	{
		
		$campos=array(
				'preg1'=>$params['preg1'],
				'preg2'=>$params['preg2'],
				'preg3'=>$params['preg3'],
				'preg4'=>$params['preg4'],
				'preg5'=>$params['preg5'],
				'preg6'=>$params['preg6'],
				'preg7'=>$params['preg7'],
				'preg8'=>$params['preg8'],
				'organismo'=>$params['organismo'],
				'fecha_inicio'=>$params['fecha_inicio'],
				'fecha_fin'=>$params['fecha_fin']);
		$this->db->where('fk_id_solicitud',$id);
		
		$this->db->update('cert_anterior_solicitud',$campos);
		
		
		
	}
	public function consulta_cert($id)
	{
		
		$this->db->select('*');
		
		$this->db->from('cert_anterior_solicitud');
		
		$this->db->where('fk_id_solicitud',$id);
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->row();
        }
		
	}
	
	
	
}