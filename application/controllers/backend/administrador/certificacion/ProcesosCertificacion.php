<?php
class ProcesosCertificacion extends CI_Controller{

	function __construct(){
		parent:: __construct();
		
	}

	public function index($etapa = false)
	{
		switch ($etapa) {
			case '1':
				$data['etapa_certificacion'] = $this->load->view('backend/administrador/certificacion/etapas/etapa1','',TRUE);
				break;
			case '2':
				$data['etapa_certificacion'] = '2. Plan de auditoria';
				break;
			case '3':
				$data['etapa_certificacion'] = '3. Revisión in situ. Documental';
				break;
			case '4':
				$data['etapa_certificacion'] = '4. Reporte de auditoria y hallazgos detectados';
				break;
			case '5':
				$data['etapa_certificacion'] = '5. Envió de acciones correctivas';
				break;
			case '6':
				$data['etapa_certificacion'] = '6. Revisión de acciones correctivas';
				break;
			case '7':
				$data['etapa_certificacion'] = '7. Cierre de acciones correctivas';
				break;
			case '8':
				$data['etapa_certificacion'] = '8. Decisión de certificación';
				break;
			case '9':
				$data['etapa_certificacion'] = '9. Emisión de certificado';
				break;
			default:
				$data['etapa_certificacion'] = '';
				break;
		}

		$this->load->view('backend/administrador/templates/head');
		$this->load->view('backend/administrador/templates/header');
		$this->load->view('backend/administrador/templates/sideNav');
			$this->load->view('backend/administrador/certificacion/procesos_certificacion', $data);
		$this->load->view('backend/administrador/templates/pre_footer');
		$this->load->view('backend/administrador/templates/footer');
	}
}