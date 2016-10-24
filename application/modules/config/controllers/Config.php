<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Config
 *
 * @author felipe de jesus
 */
require_once APPPATH.'third_party/html2pdf/html2pdf.class.php';
require_once APPPATH.'third_party/PHPMailer_master/class.phpmailer.php';
require_once APPPATH.'third_party/phpqrcode/qrlib.php';
class Config extends MX_Controller{
    public function __construct() {
        parent::__construct();
        error_reporting(0);
        ini_set('memory_limit', '512M');     // OK - 512MB
//        session_start();  
        date_default_timezone_set('America/Mexico_City');
        $this->load->model(array('inicio/inicio_mdl','login/login_mdl','admin/admin_mdl','config/config_mdl'));
        
    }
    public function get_head() {
        $this->load->view('landing/Head');
    }
    public function get_footer() {
        $this->load->view('landing/Footer');
    }
    public function get_head_admin() {
        $this->load->view('admin/Head');
    }
    public function get_footer_admin() {
        $this->load->view('admin/Footer');
    }
    public function tour_medico() {
        $this->load->view('tour_medico');
    }
    public function tour_medico_certificado() {
        $this->load->view('tour_medico_certificado');
    }
    public function setOutput($json) {
        $this->output->set_content_type('application/json')->set_output(json_encode($json));
    }  
    public function cambiar_texto($String){
        $String = str_replace(array('á','à','â','ã','ª','ä'),"a",$String);
        $String = str_replace(array('Á','À','Â','Ã','Ä'),"A",$String);
        $String = str_replace(array('Í','Ì','Î','Ï'),"I",$String);
        $String = str_replace(array('í','ì','î','ï'),"i",$String);
        $String = str_replace(array('é','è','ê','ë'),"e",$String);
        $String = str_replace(array('É','È','Ê','Ë'),"E",$String);
        $String = str_replace(array('ó','ò','ô','õ','ö','º'),"o",$String);
        $String = str_replace(array('Ó','Ò','Ô','Õ','Ö'),"O",$String);
        $String = str_replace(array('ú','ù','û','ü'),"u",$String);
        $String = str_replace(array('Ú','Ù','Û','Ü'),"U",$String);
        $String = str_replace(array('[','^','´','`','¨','~',']'),"",$String);
        $String = str_replace("ç","c",$String);
        $String = str_replace("Ç","C",$String);
        $String = str_replace("ñ","n",$String);
        $String = str_replace("Ñ","N",$String);
        $String = str_replace("Ý","Y",$String);
        $String = str_replace("ý","y",$String);
        $String = str_replace("&aacute;","a",$String);
        $String = str_replace("&Aacute;","A",$String);
        $String = str_replace("&eacute;","e",$String);
        $String = str_replace("&Eacute;","E",$String);
        $String = str_replace("&iacute;","i",$String);
        $String = str_replace("&Iacute;","I",$String);
        $String = str_replace("&oacute;","o",$String);
        $String = str_replace("&Oacute;","O",$String);
        $String = str_replace("&uacute;","u",$String);
        $String = str_replace("&Uacute;","U",$String);
        $String = str_replace(".","_",$String);
        $String=  str_replace(array('”','“','"',",",'&','(',')','’','-'), '', $String);
        $String = preg_replace('/\s+/', '_', $String);
        return strtolower($String);
    }
    public function cambiar_texto_estado($String){
        $String = str_replace(array('á','à','â','ã','ª','ä'),"a",$String);
        $String = str_replace(array('Á','À','Â','Ã','Ä'),"A",$String);
        $String = str_replace(array('Í','Ì','Î','Ï'),"I",$String);
        $String = str_replace(array('í','ì','î','ï'),"i",$String);
        $String = str_replace(array('é','è','ê','ë'),"e",$String);
        $String = str_replace(array('É','È','Ê','Ë'),"E",$String);
        $String = str_replace(array('ó','ò','ô','õ','ö','º'),"o",$String);
        $String = str_replace(array('Ó','Ò','Ô','Õ','Ö'),"O",$String);
        $String = str_replace(array('ú','ù','û','ü'),"u",$String);
        $String = str_replace(array('Ú','Ù','Û','Ü'),"U",$String);
        $String = str_replace(array('[','^','´','`','¨','~',']'),"",$String);
        $String = str_replace("ç","c",$String);
        $String = str_replace("Ç","C",$String);
        $String = str_replace("ñ","n",$String);
        $String = str_replace("Ñ","N",$String);
        $String = str_replace("Ý","Y",$String);
        $String = str_replace("ý","y",$String);
        $String = str_replace("&aacute;","a",$String);
        $String = str_replace("&Aacute;","A",$String);
        $String = str_replace("&eacute;","e",$String);
        $String = str_replace("&Eacute;","E",$String);
        $String = str_replace("&iacute;","i",$String);
        $String = str_replace("&Iacute;","I",$String);
        $String = str_replace("&oacute;","o",$String);
        $String = str_replace("&Oacute;","O",$String);
        $String = str_replace("&uacute;","u",$String);
        $String = str_replace("&Uacute;","U",$String);
        $String = preg_replace('/\s+/', '', $String);
        return strtolower($String);
    }
    public function generar_password($longitud){
          $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
          $password = '';
          for ($i=0; $i<$longitud; ++$i) $password .= substr($caracteres, (mt_rand() % strlen($caracteres)), 1);
          return $password;
    }  
    public function CerrarSesion() {
        if($this->input->get_post('no_accept')){
            session_destroy();
            session_unset();
            $this->setOutput(array('accion'=>'1'));
        }else{
            session_destroy();
            session_unset();
            redirect(base_url());          
        }

    }  
    public function upload_image() {
        $url_sav = $_GET['tipo'];
        $dir = $url_sav . '/';
        $serverdir = $dir;
        $tmp = explode(',', $_POST['data']);
        $imgdata = base64_decode($tmp[1]);
        $extension = strtolower(end(explode('.', $_POST['name'])));
        $filename = substr($_POST['name'], 0, -(strlen($extension) + 1)) . '.' . substr(sha1(time()), 0, 6) . '.' . $extension;
        $handle = fopen($serverdir . $filename, 'w');
        fwrite($handle, $imgdata);
        fclose($handle);
        $response = array(
            "status" => "success",
            "url" => $filename . '?' . time(),
            "filename" => $filename
        );
        if (!empty($_POST['original'])) {
            $tmp = explode(',', $_POST['original']);
            $originaldata = base64_decode($tmp[1]);
            $original = substr($_POST['name'], 0, -(strlen($extension) + 1)) . '.' . substr(sha1(time()), 0, 6) . '.original.' . $extension;

            $handle = fopen($serverdir . $original, 'w');
            fwrite($handle, $originaldata);
            fclose($handle);
            $response['original'] = $original;
        }
        $this->setOutput($response);
    }    
    public function mapa() {
        $this->load->view('mapa');
    }   
    public function mapaV2() {
        $this->load->view('mapaV2');
    }
    public function mapaV3() {
        $this->load->view('mapaV3');
    }
    public function edit_perfil() {
        $this->load->view('mi_perfil');
    }
    public function cmot_mail($config) {
            require_once APPPATH.'third_party/PHPMailer_master/PHPMailerAutoload.php';
             $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->CharSet = 'UTF-8';
            $mail->Host = 'smtp.live.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'iti_fjpp@hotmail.com';
            $mail->Password = 'feliPE#$12jesuS'; 
            $mail->Port = 587; 
            $mail->From = 'info@cmot.org.mx';
            $mail->FromName = 'Consejo Mexicano de  Ortopedia y Traumatología A.C.';
            $mail->addAddress($config['mail']);

            $mail->isHTML(true);      
            $mail->Subject = $config['subject'];
            $mail->Body    = '<!DOCTYPE html>
                                <html>
                                    <head>
                                        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
                                        <meta content="telephone=no" name="format-detection">
                                        <meta content="width=mobile-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;" name="viewport">
                                        <meta content="IE=9; IE=8; IE=7; IE=EDGE;" http-equiv="X-UA-Compatible">
                                        <link href="http://fonts.googleapis.com/css?family=Lato:400,300,700,400italic,300italic" rel="stylesheet" type="text/css"></link>
                                        <title>CMOT</title>
                                        <style type="text/css">
                                            table {border-collapse:separate;} a, a:link, a:visited {text-decoration: none; color: #00788a}
                                            h2,h2 a,h2 a:visited,h3,h3 a,h3 a:visited,h4,h5,h6,.t_cht {color:#000 !important}p {margin-bottom: 0}
                                            .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td {line-height: 100%}	.ExternalClass {width: 100%;}
                                            #outlook a {padding:0;}body, #body-table {height:100% !important; width:100% !important; margin:0 auto; padding:0; line-height:100%!important; font-family: Lato, sans-serif;}
                                            img, a img {border:0; outline:none; text-decoration:none;}.image-fix {display:block;} table, td {border-collapse:collapse;}.ReadMsgBody {width:100%;} .ExternalClass{width:100%;}
                                            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height:100% !important;}
                                            .ExternalClass * {line-height: 100% !important;}table, td {mso-table-lspace:0pt; mso-table-rspace:0pt;}
                                            img {outline: none; border: none; text-decoration: none; -ms-interpolation-mode: bicubic;}body, table, td, p, a, li, blockquote {-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%;}
                                            body.outlook img {width: auto !important;max-width: none !important;}body{ -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
                                            body, #body-table {background: #F4F4F4 ;background-size: cover;background-position: center; margin:0 auto !important;; margin:0 auto !important; text-align:center !important;}
                                            p {padding:0; margin: 0; line-height: 24px; font-family: Lato, sans-serif;}
                                            a, a:link {color: #1c344d;text-decoration: none !important;}.footer-link a, .nav-link a {color: #fff6e5;}
                                            .thread-item.expanded .thread-body{background-color: #000000 !important;}.thread-item.expanded .thread-body .body, .msg-body{display:block !important;}
                                            #body-table .undoreset table {display: table !important;table-layout: fixed !important;}
                                            @media only screen and (max-width: 800px) {a[href^="tel"], a[href^="sms"] {text-decoration: none;pointer-events: none;	cursor: default;}.mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {text-decoration: default;	pointer-events: auto;cursor: default;}	
                                            }@media only screen and (max-width: 700px) {*[class].full-width {width: 100%!important;}*[class].content-width {width: 510px!important;}*[class].center {text-align:center !important; height:auto !important;}
                                            }@media only screen and (max-width: 640px) {*[class].mobile-width {width: 100%!important; padding: 0 4px;}*[class].content-width {width: 480px!important;}
                                            }@media only screen and (max-width: 480px) {*[class].content-width {width: 360px!important;}*[class].center {text-align:center !important; height:auto !important;}
                                            }@media only screen and (max-width: 360px) {*[class].content-width {width: 100% !important;}*[class].inner-width {width: 280px!important;}*[class].center {text-align:center !important; height:auto !important;}}
                                        </style>
                                    </head>
                                    <body >
                                        <table id="body-table" border="0" cellpadding="0" cellspacing="0" width="90%" style="table-layout:fixed;background-position: center center;background-size: cover;">
                                            <tbody><tr><td align="center" valign="top"><table width="450" border="0" cellspacing="0" cellpadding="0" class="mobile-width">
                                            <tbody><tr> <td height="80"></td></tr><tr><td align="center">
                                            <table bgcolor="#333333" width="100%" cellspacing="0" cellpadding="0" border="0" background="https://cmot.org.mx/assets/img/config_mail/header.jpg" style="background-repeat: no-repeat !important; background-position: center center;background-size: cover;" class="content-width">
                                            <tbody><tr><td align="center"><table width="510" cellspacing="0" cellpadding="0" border="0" class="content-width">
                                            <tbody><tr><td align="center"><table width="100%" align="center" cellspacing="0" cellpadding="0" border="0"><tbody><tr>
                                            <td height="40"></td></tr><tr><td align="center"><table width="100" align="center" cellspacing="0" cellpadding="0" border="0">
                                            <tbody><tr><td align="center" height="100"></td></tr></tbody></table>
                                            </td></tr><tr><td height="10"></td></tr><tr><td align="center"><table width="300" align="center" cellspacing="0" cellpadding="0" border="0">
                                            <tbody><tr><td align="center" style="color: white!important;font-family: Lato, sans-serif; font-size: 22px; mso-line-height-rule:exactly; line-height:25px; font-weight:200; ">
                                                
                                            </td></tr></tbody></table></td></tr><tr><td height="39"></td>
                                            </tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>
                                            <table width="510" bgcolor="#FFFFFF" border="0" cellspacing="0" cellpadding="0" class="content-width"><tbody><tr>
                                            <td align="center"><table width="450" cellspacing="0" cellpadding="0" border="0" class="content-width inner-width"><tbody>
                                            <tr><td height="40"></td></tr> <tr><td align="center" class="center" style="font-family: Lato, sans-serif; font-size: 22px; mso-line-height-rule:exactly; line-height:35px; font-weight:300; color: #343a43;" mc:edit="section2-title">
                                            <multiline label="section2-title1">
                                                <b>'.$config['msj1'].'</b>
                                            </multiline></td> </tr>
                                            <tr><td align="center" class="center" style="font-family: Lato, sans-serif; font-size: 15px; mso-line-height-rule:exactly; line-height:25px; font-weight:300; color: #343a43;" mc:edit="section2-title">
                                            <multiline label="section2-title1">
                                                '.$config['msj2'].'
                                            </multiline>
                                            </td></tr><tr><td height="15"></td> </tr><tr><td align="left" class="center" style="font-family: Lato, sans-serif; font-size: 14px; mso-line-height-rule:exactly; line-height:20px; color: #343a43; font-weight:300;"  mc:edit="section2-text">
                                            <multiline label="section2-text1"> 
                                                <p style="text-align:justify">'.$config['msj3'].'</p>
                                            </multiline></td></tr>
                                            <tr><td height="60"></td></tr></tbody></table></td></tr></tbody></table>
                                            <table width="510" bgcolor="#02344A" align="center" border="0" cellspacing="0" cellpadding="0" class="content-width">
                                            <tbody> <tr><td align="center"><table width="300" align="center" border="0" cellspacing="0" cellpadding="0">
                                            <tbody><tr><td height="25"></td></tr><tr><td><table width="400" align="center" border="0" cellspacing="0" cellpadding="0">
                                            <tbody> <tr><td align="center" class="center" style="font-family: Lato , sans-serif; font-size: 14px; mso-line-height-rule:exactly; font-weight:300; line-height:20px;" mc:edit="section3-title1">
                                            <singleline label="contact_title1">
                                                <a href="#" style="color:#FFFFFF;">
                                                        <span style="color:white">Derechos reservados 2016 | CMOT<br>
                                                        http://www.cmot.com.mx/</span>
                                                </a>
                                            </singleline></td></tr></tbody></table></td> </tr><tr><td height="25"><br></td></tr></tbody>
                                            </table></td> </tr></tbody></table></td></tr></tbody></table></td></tr>
                                         </tbody>
                                      </table>
                                   </body>
                                </html>';
            $mail->AltBody = 'Consejo Mexicano de  Ortopedia y Traumatología A.C.';
            if($config['info']=='Si'){
                if(!$mail->send()) {
                    $this->setOutput(array('accion'=>'1','msj'=>'Mailer Error: ' . $mail->ErrorInfo));
                } else {
                    $this->setOutput(array('accion'=>'2','msj'=>'Mail send success'));
                }          
            }else{
                $mail->send();
            }
    }
    public function load_css() {
        return '';
    }
    public function load_script() {
        return '';
    }
}
