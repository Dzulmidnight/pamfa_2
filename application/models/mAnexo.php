<? 
defined('BASEPATH') OR exit('No direct script access allowed');

class mAnexo extends CI_Model {

	
	function _construct(){
		parent:: _construct();
		
	}
	
	
	
	public function consulta_($id)
	{
		
		$this->db->select('*');
		
		$this->db->from('anexo_produccion');
		
		$this->db->where('fk_id_solicitud',$id);
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->row();
        }
		
	}
	
	
	
}