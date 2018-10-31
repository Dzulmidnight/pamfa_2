<? 
defined('BASEPATH') OR exit('No direct script access allowed');

class mExcel extends CI_Model {

	
	function _construct(){
		parent:: _construct();
		
	}
	
	public function guardar($_DATOS_EXCEL,$id,$tipo)
	{
		if ($tipo['tipo']==1) {
			# code...
		
		foreach($_DATOS_EXCEL as $campo => $valor){


	 $campos=array(
		'fk_id_solicitud'=>$id,
		'pregunta1'=>$valor['pregunta1'],
		'pregunta2'=>$valor['pregunta2'],
		'pregunta3'=>$valor['pregunta3'],
		'pregunta4'=>$valor['pregunta4'],
		'pregunta5'=>$valor['pregunta5'],
		'pregunta6'=>$valor['pregunta6'],
		'pregunta7'=>$valor['pregunta7'],
		'pregunta8'=>$valor['pregunta8'],
		'pregunta9'=>$valor['pregunta9'],
		'pregunta10'=>$valor['pregunta10'],
		'pregunta11'=>$valor['pregunta11'],
		'pregunta12'=>$valor['pregunta12'],
		'pregunta13'=>$valor['pregunta13'],
		'pregunta14'=>$valor['pregunta14'],
		'pregunta15'=>$valor['pregunta15'],
		'pregunta16'=>$valor['pregunta16'],
		'pregunta17'=>$valor['pregunta17'],
		'pregunta18'=>$valor['pregunta18'],
		'pregunta19'=>$valor['pregunta19']
);
		
		$this->db->insert('anexo_produccion',$campos);

 } 
	}
	if ($tipo['tipo']==2) {
			
		foreach($_DATOS_EXCEL as $campo => $valor){


	 $campos=array(
		'fk_id_solicitud'=>$id,
		'pregunta20'=>$valor['pregunta1'],
		'pregunta21'=>$valor['pregunta2'],
		
		'pregunta23'=>$valor['pregunta3'],
		'pregunta24'=>$valor['pregunta4'],
		'pregunta25'=>$valor['pregunta5'],
		'pregunta26'=>$valor['pregunta6'],
		'pregunta27'=>$valor['pregunta7'],
		'pregunta28'=>$valor['pregunta8'],
		'pregunta29'=>$valor['pregunta9'],
		'pregunta30'=>$valor['pregunta10'],
		'pregunta31'=>$valor['pregunta11'],
		'pregunta32'=>$valor['pregunta12'],
		'pregunta33'=>$valor['pregunta13'],
		'pregunta34'=>$valor['pregunta14'],
		'pregunta35'=>$valor['pregunta15'],
		'pregunta36'=>$valor['pregunta16'],
		'pregunta37'=>$valor['pregunta17'],
		'pregunta38'=>$valor['pregunta18'],
		'pregunta22'=>$valor['pregunta19'],
);
		
		$this->db->insert('anexo_manipulacion',$campos);

 } 
		}	
	}
	
	
	
	
	
}