<? 
defined('BASEPATH') OR exit('No direct script access allowed');

class mMcs extends CI_Model {

	
	function _construct(){
		parent:: _construct();
		
	}
	
	public function guardar($id)
	{
		
		$campos=array('fk_id_solicitud'=>$id);
		
		$this->db->insert('mexcalsup_solicitud',$campos);
		
		
		
	}
	public function actualizar($params,$id)
	{
		
		$campos=array(
				'alcance'=>$params['alcance_certificacion'],
				'productos'=>$params['pliego_condiciones_mcs'],
				'trazabilidad'=>$params['trazabilidad']);
		$this->db->where('fk_id_solicitud',$id);
		$this->db->update('mexcalsup_solicitud',$campos);
		
		
		
	}
	public function eliminar($id)
	{
		
		
		$this->db->where('fk_id_solicitud',$id);
		$this->db->delete('mexcalsup_solicitud');
		
		
		
	}

	public function eliminar_equipo($params)
	{
		
		
		$this->db->where('id_mexcalsup_producto',$params['idproducto']);
		$this->db->delete('mexcalsup_producto_solicitud');
		
		
		
	}
	public function consulta_mexcalsup($id)
	{
		
		$this->db->select('*');
		
		$this->db->from('mexcalsup_solicitud');
		
		$this->db->where('fk_id_solicitud',$id);
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->row();
        }
		
	}
	
	public function subir_archivo($params,$id)
	{
		if ($params['anexo']==2) {
					$campos=array(
			
		'anexo1'=>$params['url'],'anexo1_nombre'=>$params['documento1']);
				}	
				if ($params['anexo']==3) {
					$campos=array(
			
		'anexo2'=>$params['url']);
				}		
		
		$this->db->where('fk_id_solicitud',$id);
		$this->db->update('mexcalsup_solicitud',$campos);
		
	}
	public function subir_archivo2($params,$id)
	{
		
		if ($params['anexo']==2) {
					$campos=array('fk_id_solicitud'=>$id,
						'equipo'=>$params['equipo'],
			
		'anexo1'=>$params['url']);
				}	
				if ($params['anexo']==3) {
					$campos=array('fk_id_solicitud'=>$id,'equipo'=>$params['equipo'],
			
		'anexo2'=>$params['url']);
				}		
		
		///$this->db->where('fk_id_solicitud',$id);
		$this->db->insert('mexcalsup_producto_solicitud',$campos);


		
	}
	public function subir_archivo3($params,$id)
	{
		
		
					$campos=array('fk_id_solicitud'=>$id,'equipo'=>$params['equipo'],
			
		'anexo1'=>$params['url'],
			
		'anexo2'=>$params['url2']);
						
		
		///$this->db->where('fk_id_solicitud',$id);
		$this->db->insert('mexcalsup_producto_solicitud',$campos);


		
	}
	public function consulta_productos($id)
	{
		
		$this->db->select('*');
		$this->db->where('fk_id_solicitud',$id);
		$this->db->from('mexcalsup_producto_solicitud');
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
		
	}
	public function eliminar_todo($id)
	{
		
		
		$this->db->where('fk_id_solicitud', $id);
$this->db->delete('mexcalsup_producto_solicitud');
		
	
	}
}