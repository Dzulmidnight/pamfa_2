<? 
defined('BASEPATH') OR exit('No direct script access allowed');

class mPago extends CI_Model {

	
	function _construct(){
		parent:: _construct();
		
	}
	
	
	public function guardar1($params)
	{
		//$indice=$params['indice'];
		$campos=array('fk_id_solicitud'=>$params['idsolicitud'],
			
		
		'estatus'=>$params['estatus'],
		'fk_id_admin'=>$this->session->userdata('s_idusuario'),
		'fecha'=>$params['fpago']);
		
		$this->db->insert('cotizacion_pago',$campos);
		
	
	}
	public function consulta_todo()
	{
		
		$this->db->select('*');
		$this->db->from('cotizacion_pago');
		//$this->db->where('id_cotizacion', $id);

	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
		
	}
	public function consulta_totales($id)
	{
		
		$this->db->select('*');
		
		$this->db->from('cotizacion_pago');
		$this->db->where('fk_id_solicitud', $id);
		//$this->db->where('indice', $params['indice']);
		
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->num_rows();
        }
		
	}
	public function consulta_pago($id)
	{
		
		$this->db->select('*');
		$this->db->where('fk_id_solicitud', $id);
		$this->db->from('cotizacion_pago');
		$this->db->group_by('fk_id_solicitud',$id);
		
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->row();
        }
		
	}
	public function eliminar($params)
	{
		
		$this->db->where('fk_id_solicitud', $params['idsolicitud']);
		$this->db->where('indice', $params['indice']);
				
		
		$this->db->delete('cotizacion_solicitud');
		
		
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->num_rows();
        }
		
	}
	public function consulta($params)
	{
		
		$this->db->select('*');
		$this->db->from('cotizacion_pago');
		$this->db->where('id_cotizacion', $params['id']);

		
		
		
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->num_rows();
        }
		
	}
	public function actualizar($params)
	{
		
			
		$campos=array(
			
		'estatus'=>$params['estatus'],
		'razon'=>$params['razon'],
		'fecha_actualizacion'=>time());
		$this->db->where('fk_id_solicitud', $params['idsolicitud']);
		
		$this->db->update('cotizacion_pago',$campos);
		
	
	}
	public function cotiz_cliente($params)
	{
		
		$campos=array(
		'estatus_cliente'=>$params['estatus']);
		$this->db->where('fk_id_solicitud', $params['idsolicitud']);
		$this->db->update('cotizacion_pago',$campos);
		
		
		
	}
	public function url_cotizacion($url,$id)
	{
		
			
		$campos=array(
			
		'url_cotizacion'=>$url);
		$this->db->where('fk_id_solicitud', $id);
		
		$this->db->update('cotizacion_pago',$campos);
		
	
	}
	
	
	public function subir_archivo($params)
	{
		
		$campos=array(
			
		'url_pago'=>$params['url'],
		'estatus'=>"espera");
		
		
		
		$this->db->where('fk_id_solicitud',$params['id']);
		$this->db->update('cotizacion_pago',$campos);
		
	}
	

		
	
}