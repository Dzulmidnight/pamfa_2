<? 
defined('BASEPATH') OR exit('No direct script access allowed');

class mCliente extends CI_Model {

	
	function _construct(){
		parent:: _construct();
		
	}
	
	public function guardar($params)
	{
		
		$campos=array('username'=>$params['username'],
		'password'=>$params['password'],
		'nombreLegal'=>$params['nombreLegal'],
		'nombreRepresentante'=>$params['nombreRepresentante'],
		'direccion'=>$params['direccion'],
		'cp'=>$params['cp'],
		'colonia'=>$params['colonia'],
		'municipio'=>$params['municipio'],
		'estado'=>$params['estado'],
		'pais'=>$params['pais'],
		//'coordenadas'=>$params['coordenadas'],
		'email'=>$params['email'],
		'telefono'=>$params['telefono'],
		'fax'=>$params['fax'],
		'fechaAlta'=>$params['fechaAlta'],
		
		'estatus'=>$params['estatus']);
		$this->db->insert('cliente',$campos);
		
		$campos2=array('fk_id_cliente'=>$this->db->insert_id());
		
		$this->db->insert('datos_fiscales',$campos2);
		
	}
	public function actualiza_generales($params,$fm)
	{
		
		$campos=array('username'=>$params['username'],
		'password'=>$params['password'],
		'nombreLegal'=>$params['nombreLegal'],
		'nombreRepresentante'=>$params['nombreRepresentante'],
		'direccion'=>$params['direccion'],
		'cp'=>$params['cp'],
		'colonia'=>$params['colonia'],
		'municipio'=>$params['municipio'],
		'estado'=>$params['estado'],
		'pais'=>$params['pais'],
		//'coordenadas'=>$params['coordenadas'],
		'email'=>$params['email'],
		'telefono'=>$params['telefono'],
		'fax'=>$params['fax'],
		'fechaModificacion'=>$fm);
		$this->db->where('id_cliente', $params['idcliente']);
		$this->db->update('cliente',$campos);
		
		
		
	}
	public function guardar_fiscal($data)
	{
		
		$campos=array('rfc'=>$data['rfc'],
		'razonSocial'=>$data['razonSocial'],
		
		'dirFiscal'=>$data['dirFiscal'],
		'nombreFactura'=>$data['nombreFactura'],
		'emailFactura'=>$data['emailFactura'],
		'telFactura'=>$data['telFactura'],
		'formaPago'=>$data['formaPago'],
		'banco'=>$data['banco'],
		'digitosTarjeta'=>$data['digitosTarjeta']);
		$this->db->insert('datos_fiscales',$campos);
	
	}
	public function actualiza_fiscal($data)
	{
		
		$campos=array('rfc'=>$data['rfc'],
		'razonSocial'=>$data['razonSocial'],
		
		'dirFiscal'=>$data['dirFiscal'],
		'nombreFactura'=>$data['nombreFactura'],
		'emailFactura'=>$data['emailFactura'],
		'telFactura'=>$data['telFactura'],
		'formaPago'=>$data['formaPago'],
		'banco'=>$data['banco'],
		'digitosTarjeta'=>$data['digitosTarjeta']);
		$this->db->where('fk_id_cliente', $data['idcliente']);
		$this->db->update('datos_fiscales',$campos);
		
	
	}
	public function consulta_datos_gral()
	{
		
		$this->db->select('*');
		
		$this->db->from('cliente c');
		
		$this->db->where('id_cliente',$this->session->userdata('s_idusuario'));
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
		
	}
	public function consulta_fiscal()
	{
		
		$this->db->select('*');
		
		$this->db->from('datos_fiscales c');
		
		$this->db->where('fk_id_cliente',$this->session->userdata('s_idusuario'));
	    $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
		
	}
}