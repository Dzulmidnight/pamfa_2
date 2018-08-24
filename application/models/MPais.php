<? 
defined('BASEPATH') OR exit('No direct script access allowed');

class mPais extends CI_Model {

	
	function _construct(){
		parent:: _construct();
	}
	
	public function paises()
	{
		
	$this->db->select('*');
		
		$this->db->from('pais');
		
		
	    $query = $this->db->get();
      // echo json_encode(  $query);
            return $query->result();
        
		
	}
}