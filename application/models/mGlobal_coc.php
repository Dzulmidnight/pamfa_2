<? 
defined('BASEPATH') OR exit('No direct script access allowed');

class mGlobal_coc extends CI_Model {

	
	function _construct(){
		parent:: _construct();
		
	}
	
	public function guardar($id)
	{
		
		$campos=array('fk_id_solicitud'=>$id);
		
		$this->db->insert('global_coc_solicitud',$campos);
		
		
		
	}
	public function actualizar($params,$id)
	{
		
		$campos=array(
				'opcion'=>$params['opcion'],
				'productos'=>$params['productos'],
				'op1_preg1'=>$params['op1_preg1'],
				'op1_preg2'=>$params['op1_preg2'],
				'op2_preg1'=>$params['op2_preg1'],
				'op2_preg2'=>$params['op2_preg2'],
				'op2_preg3'=>$params['op2_preg3'],
				'preg1'=>$params['coc_preg1'],
				'preg2'=>$params['coc_preg2'],
				'preg3'=>$params['coc_preg3']);
		$this->db->where('fk_id_solicitud',$id);
		$this->db->update('global_coc_solicitud',$campos);
		
		
		
	}
	public function eliminar($id)
	{
		
		
		$this->db->where('fk_id_solicitud',$id);
		$this->db->delete('global_coc_solicitud');
		
		
		
	}
	public function consulta_coc($id)
	{
		
		$this->db->select('*');
		
		$this->db->from('global_coc_solicitud');
		
		$this->db->where('fk_id_solicitud',$id);
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->row();
        }
		
	}
	
	
	
}