   <?php
class cCorreo extends CI_Controller {
   
       function __construct(){
    parent:: __construct();
        $this->load->library('My_PHPMailer');
          $this->load->model('mSolicitud');
    $this->load->model('mRechazo_servicio');
    $this->load->model('mCotizacion');
       $this->load->model('mPago');
       $this->load->model('mGlobal_ifa');
    $this->load->model('mProducto_srrc');
    $this->load->model('mGlobal_coc');
    $this->load->model('mMcs');
    $this->load->model('mDen_origen');
    $this->load->model('mMexico');
    $this->load->model('mSrrc');
    $this->load->model('mContrato');
    }
    public function enviar($id) {
      //////////pdf///////
      

// As PDF creation takes a bit of memory, we're saving the created file in /downloads/reports/
    
       if(isset($_POST['op1'])&&$_POST['op1']==1)
      {

$data['consulta_sol_id']= $this->mSolicitud->consulta_solicitudes_full_id($id);
  $data['consulta_rechazo']= $this->mRechazo_servicio->consulta_rechazo($id);
   $this->load->view('backend/administrador/templates/head');
  $html = $this->load->view('backend/administrador/cotizaciones/rechazo_pdf', $data, true); // render the view into HTML

    $this->load->view('backend/administrador/templates/footer');

 $filename = $data['consulta_rechazo']->fk_id_admin."_".$data['consulta_rechazo']->fecha;
 $f=date('d/m/Y',$data['consulta_rechazo']->fecha);
 $pdfFilePath = "cotizacion/$filename.pdf";
}


       if(isset($_POST['op1'])&&$_POST['op1']==2)
       {

      
$data['consulta_sol_id']= $this->mSolicitud->consulta_solicitudes_full_id($id);
  $data['consulta_cotizacion']= $this->mCotizacion->consulta_cotizacion($id);
  $data['consulta_pago']= $this->mPago->consulta_pago($id);
   $this->load->view('backend/administrador/templates/head');
  $html = $this->load->view('backend/administrador/cotizaciones/cotizacion_pdf', $data, true); // render the view into HTML

    $this->load->view('backend/administrador/templates/footer');

  $filename = $data['consulta_pago']->fk_id_admin."_".$data['consulta_pago']->fecha;
 $f=date('d/m/Y',$data['consulta_pago']->fecha);

  
$pdfFilePath = "docs_rechazo/$filename.pdf";
}

else
      {


         $data['consulta_contrato']= $this->mContrato->consulta_contrato($id);

          $data['id_contrato'] = $id;
         $data['consulta_sol_id']= $this->mSolicitud->consulta_solicitudes_full_id($id);


            foreach ($data['consulta_sol_id'] as $f) 
            {
      
                if($f->global_ifa!=null)
                  {
                  $data['consulta_ifa']= $this->mGlobal_ifa->consulta_ifa($id);

                  }
                  if($f->global_coc!=null)
                  {
                  $data['consulta_coc']= $this->mGlobal_coc->consulta_coc($id);

                  }
                  if($f->mcs!=null)
                  {
                  $data['consulta_mcs']= $this->mMcs->consulta_mexcalsup($id);

                  }
                  if($f->srrc!=null)
                  {
                  $data['consulta_srrc']= $this->mProducto_srrc->consulta_srrc($id);
                  $data['consulta_srrc2']= $this->mSrrc->consulta_srrc($id);

                  }
                  if($f->hecho_mexico!=null)
                  {
                  $data['consulta_mex']= $this->mMexico->consulta_mex($id);

                  }
                  if($f->den_origen!=null)
                  {
                  $data['consulta_origen']= $this->mDen_origen->consulta_origen($id);

                   }    

           }
          $this->load->view('backend/administrador/templates/head');
          $html = $this->load->view('backend/administrador/contratos/contrato_pdf', $data, true); // render the view into HTML

          $this->load->view('backend/administrador/templates/footer');   

          $filename = $data['consulta_contrato']->fk_id_admin."_".$data['consulta_contrato']->fecha;
          $f=date('d/m/Y',$data['consulta_contrato']->fecha);
     
  
          $pdfFilePath = "contrato/$filename.pdf";
      }






$data['page_title'] = 'Hello world'; // pass data to the view

if (file_exists($pdfFilePath) == FALSE)

{

  ini_set('memory_limit','32M'); // boost the memory limit if it's low ;)

  $this->load->library('pdf');

  $pdf = $this->pdf->load();

  $pdf->SetFooter("".'|{PAGENO}|'.$f); // Add a footer for good measure ;)

  $pdf->WriteHTML($html); // write the HTML into the PDF

  $pdf->Output($pdfFilePath , 'F'); // save to file because we can

}



      ///////correo/////////77
        $mail = new PHPMailer();
        $mail->IsSMTP(); // establecemos que utilizaremos SMTP
        $mail->SMTPAuth   = true; // habilitamos la autenticación SMTP
        //$mail->SMTPSecure = "ssl";  // establecemos el prefijo del protocolo seguro de comunicación con el servidor
        $mail->Host       = "smtp.mailtrap.io";      // establecemos GMail como nuestro servidor SMTP
        $mail->Port       = 2525;                   // establecemos el puerto SMTP en el servidor de GMail
        $mail->Username   = "cf83702fd87684";  // la cuenta de correo GMail
        $mail->Password   = "f1d7231c8fe3c7";            // password de la cuenta GMail
       $mail->SetFrom('soporte@inforganic.net', 'Nombre Apellido');  //Quien envía el correo
        //$mail->AddReplyTo("response@tudominio.com","Nombre Apellido");  //A quien debe ir dirigida la respuesta
        $mail->Subject    = "Asunto del correo";  //Asunto del mensaje
        $mail->Body      = "Cuerpo en HTML<br />";
        $mail->AltBody    = "Cuerpo en texto plano";
        $destino = "meruta@wokcy.com";
        $mail->AddAddress($destino, "Juan Palotes");

        $mail->AddAttachment($pdfFilePath);      // añadimos archivos adjuntos si es necesario
        //$mail->AddAttachment("images/phpmailer_mini.gif"); // tantos como queramos

        if(!$mail->Send()) {
            $data["message"] = "Error en el envío: " . $mail->ErrorInfo;
        } else {
            $data["message"] = "¡Mensaje enviado correctamente!";
        }
        //$this->load->view('sent_mail',$data);
    }
}

