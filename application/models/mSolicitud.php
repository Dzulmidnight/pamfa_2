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
	public function actualiza_contrato($id)
	{
		
		


		$campos=array(
		'estatus'=>3);
		$this->db->where('id_solicitud',$id);
		$this->db->update('solicitud',$campos);
		
		
		
	}
	public function actualiza_cotizacion($id)
	{
		
		


		$campos=array(
		'estatus'=>2);
		$this->db->where('id_solicitud',$id);
		$this->db->update('solicitud',$campos);
		
		
		
	}
	public function actualiza_anexo($params,$id)
	{
		
		if ($params['tipo']==1) {
			$campos=array(
		'anexo_p'=>$params['url']);
		}
		if ($params['tipo']==2) {
			$campos=array(
		'anexo_m'=>$params['url']);
		}


		
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
	public function consulta_id($id)
	{
		
		$this->db->select('*');
		
		$this->db->from('solicitud');
		$this->db->where('id_solicitud',$id);
		
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->row();
        }
		
	}
	public function consulta_id_2($id)
	{
		
		$this->db->select('*');
		
		$this->db->from('solicitud');
		$this->db->where('id_solicitud',$id);
		
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
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
	public function consulta_solicitudes_cliente($id)
	{
		
		$this->db->select('*');
		
		$this->db->from('solicitud');
		$this->db->where('estatus',2);
		$this->db->or_where('estatus',1);
			$this->db->where('id_solicitud',$id);
		
		
		
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
		$this->db->or_where('estatus',1);
		
		
		
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->num_rows();
        }
		
	}
	public function consulta_solicitudes2()
	{
		
		$this->db->select('*');
		
		$this->db->from('solicitud');
		$this->db->where('estatus',2);
		
		
		
	   $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
		
	}
	public function consulta_solicitudes3()
	{
		
		$this->db->select('*');
		
		$this->db->from('solicitud');
		$this->db->where('estatus',1);
		
		
		
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

        $this->db->select('solicitud.id_solicitud,solicitud.fk_id_cliente,solicitud.fecha,solicitud.global_ifa,solicitud.global_coc,solicitud.hecho_mexico,solicitud.srrc,solicitud.den_origen,solicitud.mcs,solicitud.fecha_envio,cliente.nombreLegal,cliente.estado,cliente.email,cliente.telefono,pais.nombre');    
$this->db->from('solicitud');
$this->db->join('cliente', 'solicitud.fk_id_cliente = cliente.id_cliente');
$this->db->join('pais', 'cliente.pais = pais.id_pais');
$this->db->where('solicitud.estatus', 2);
$this->db->or_where('solicitud.estatus', 1);
$query = $this->db->get();
 if($query->num_rows() > 0 )
        {
           return $query->result();
        }
		
	}
	
	public function consulta_solicitudes_full_id($id)
	{
		
		
        $this->db->select('solicitud.id_solicitud,solicitud.fk_id_cliente,solicitud.fecha,solicitud.global_ifa,solicitud.global_coc,solicitud.hecho_mexico,solicitud.srrc,solicitud.den_origen,solicitud.mcs,solicitud.fecha_envio,cliente.nombreLegal,cliente.nombreRepresentante,cliente.estado,datos_fiscales.rfc,cliente.email,cliente.telefono,cliente.cp,cliente.direccion,cliente.colonia,cliente.municipio,cliente.estado,pais.nombre');    
$this->db->from('solicitud');
$this->db->join('cliente', 'solicitud.fk_id_cliente = cliente.id_cliente');
$this->db->join('pais', 'cliente.pais = pais.id_pais');
$this->db->join('datos_fiscales', 'cliente.id_cliente = datos_fiscales.fk_id_cliente');
$this->db->where('solicitud.id_solicitud', $id);
$query = $this->db->get();
 if($query->num_rows() > 0 )
        {
           return $query->result();
        }
		
	}



	public function consulta_solicitudes_full2()
	{
		
		/*$this->db->select('*');
		
		$this->db->from('solicitud');
		$this->db->where('estatus',2);
		
		
		
	    $query = $this->db->get();
       
*/

        $this->db->select('solicitud.id_solicitud,solicitud.fk_id_cliente,solicitud.fecha,solicitud.global_ifa,solicitud.global_coc,solicitud.hecho_mexico,solicitud.srrc,solicitud.den_origen,solicitud.mcs,solicitud.fecha_envio,cliente.nombreLegal,cliente.estado,cliente.email,cliente.telefono,pais.nombre');    
$this->db->from('solicitud');
$this->db->join('cliente', 'solicitud.fk_id_cliente = cliente.id_cliente');
$this->db->join('pais', 'cliente.pais = pais.id_pais');
$this->db->where('solicitud.estatus', 1);
$query = $this->db->get();
 if($query->num_rows() > 0 )
        {
           return $query->result();
        }
		
	}
	public function consulta_solicitudes_full4()
	{
		
		

        $this->db->select('solicitud.id_solicitud,solicitud.fk_id_cliente,solicitud.fecha,solicitud.global_ifa,solicitud.global_coc,solicitud.hecho_mexico,solicitud.srrc,solicitud.den_origen,solicitud.mcs,solicitud.fecha_envio,cliente.nombreLegal,cliente.estado,cliente.email,cliente.telefono,pais.nombre');    
$this->db->from('solicitud');
$this->db->join('cliente', 'solicitud.fk_id_cliente = cliente.id_cliente');
$this->db->join('pais', 'cliente.pais = pais.id_pais');
$this->db->where('solicitud.estatus', 3);

$query = $this->db->get();
 if($query->num_rows() > 0 )
        {
           return $query->result();
        }
		
	}
	
	
}