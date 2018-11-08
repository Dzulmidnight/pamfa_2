<? 
defined('BASEPATH') OR exit('No direct script access allowed');

class mNorma extends CI_Model {

	
	function _construct(){
		parent:: _construct();
		
	}
	
	
	
	public function consulta()
	{
		
		$this->db->select('*');
		//$this->db->where('id_seccion',$id);
		$this->db->from('norma_solicitud');
		
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
		
	}
	

	
	
}