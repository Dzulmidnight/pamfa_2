<? 
defined('BASEPATH') OR exit('No direct script access allowed');

class mAuditor extends CI_Model {

	
	function _construct(){
		parent:: _construct();
		
	}
	
	
	public function consulta()
	{
		$this->db->select('*');
		
		$this->db->from('auditor');
		
		//$this->db->where('id_cliente',$this->session->userdata('s_idusuario'));
	    $query = $this->db->get();
       
            return $query->result();
        		
	}
	public function guardar($params)
	{
		
		$campos=array('username'=>$params['username'],
		'password'=>$params['password'],
		'nombre'=>$params['nombre'],
		'apPaterno'=>$params['apPaterno'],
		'apMaterno'=>$params['apMaterno'],
		
		'email'=>$params['email'],
		'telefono'=>$params['telefono'],
		'tipo'=>$params['tipo'],
		
		'fechaAlta'=>time(),
		
		'estatus'=>1);
		$this->db->insert('auditor',$campos);
		
		
	}
	public function estatus($e,$id,$fm)
	{
		if($e=='activar'){
		$campos=array('estatus'=>1,
		
		'fechaAlta'=>$fm);
		}
		if($e=='pausa'){
		$campos=array('estatus'=>2,
		
		'fechaPausa'=>$fm);
		}
		if($e=='baja'){
		$campos=array('estatus'=>3,
		
		'fechaBaja'=>$fm);
		}
		
		$this->db->where('id_auditor', $id);
		$this->db->update('auditor',$campos);
		
		
		
	}
	public function consulta_id()
	{
		
		$this->db->select('*');
		
		$this->db->from('auditor c');
		
		$this->db->where('id_auditor',$this->session->userdata('s_idusuario'));
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
		
	}


	
public function actualiza_generales($params,$fm)
	{
		
		$campos=array('username'=>$params['username'],
		'password'=>$params['password'],
		'nombre'=>$params['nombre'],
		'apPaterno'=>$params['apPaterno'],
		'apMaterno'=>$params['apMaterno'],
		
		'email'=>$params['email'],
		'telefono'=>$params['telefono'],

		'fechaModificacion'=>$fm);
		$this->db->where('id_auditor', $params['idauditor']);
		$this->db->update('auditor',$campos);
		
		
		
	}
}