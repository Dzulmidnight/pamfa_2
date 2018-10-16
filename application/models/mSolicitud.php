<? 
defined('BASEPATH') OR exit('No direct script access allowed');

class mSolicitud extends CI_Model {

	
	function _construct(){
		parent:: _construct();
		
	}
	
	public function guardar()
	{
		$f=time();
		
		$campos=array('fk_id_cliente'=>$this->session->userdata('s_idusuario'),
		'fecha'=>$f,
	'estatus'=>1);
		
		$this->db->insert('solicitud',$campos);
		
		
		
	}

	public function actualiza_norma($x,$y,$id)
	{
		
		


		$campos=array(
		$x=>$y);
		$this->db->where('id_solicitud',$id);
		$this->db->update('solicitud',$campos);
		
		
		
	}
	public function actualiza_final($params,$id)
	{
		
		


		$campos=array(
		'idiomas'=>$params['idiomas'],
		'uso_datos'=>$params['uso_datos']);
		$this->db->where('id_solicitud',$id);
		$this->db->update('solicitud',$campos);
		
		
		
	}
	public function eliminar($params)
	{
		
		
		$this->db->where('id_producto_solicitud', $params['idproducto']);
$this->db->delete('producto_solicitud');
		
		
		
		
	}
	
	public function consulta()
	{
		
		$this->db->select('*');
		
		$this->db->from('solicitud');
		$this->db->where('fk_id_cliente',$this->session->userdata('s_idusuario'));
		$this->db->where('estatus',1);
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->row();
        }
		
	}
	public function ver()
	{
		
		$this->db->select('*');
		
		$this->db->from('producto_solicitud c');
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
		
	}
	public function consulta_solicitudes()
	{
		
		$this->db->select('*');
		
		$this->db->from('solicitud');
		$this->db->where('estatus',2);
		
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->num_rows();
        }
		
	}

	public function consulta_solicitudes_full()
	{
		
		/*$this->db->select('*');
		
		$this->db->from('solicitud');
		$this->db->where('estatus',2);
		
		
		
	    $query = $this->db->get();
       
*/

        $this->db->select('solicitud.id_solicitud,solicitud.global_ifa,solicitud.global_coc,solicitud.hecho_mexico,solicitud.srrc,solicitud.den_origen,solicitud.mcs,solicitud.fecha_envio,cliente.nombreLegal,cliente.estado,cliente.email,cliente.telefono,pais.nombre');    
$this->db->from('solicitud');
$this->db->join('cliente', 'solicitud.fk_id_cliente = cliente.id_cliente');
$this->db->join('pais', 'cliente.pais = pais.id_pais');
$this->db->where('solicitud.estatus', 2);
$query = $this->db->get();
 if($query->num_rows() > 0 )
        {
           return $query->result();
        }
		
	}
	
}