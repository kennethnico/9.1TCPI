<?php
error_reporting(0);
#consulta
#SELECT tcpi_ocho.id,tcpi_ocho.nombre,tcpi_ocho.email,tcpi_ocho.dependencia,checklist_ocho.email,checklist_ocho.primerdia,checklist_ocho.segundodia,checklist_ocho.tercerdia FROM `tcpi_ocho` INNER JOIN `checklist_ocho` WHERE `tcpi_ocho`.`email`="krenicgm@gmail.com" AND `checklist_ocho`.`email`="krenicgm@gmail.com";
#BaseConst--> https://srae.poderjudicialcdmx.gob.mx:2053/8TCPI/Cons8TCPI.jpeg
session_start();
date_default_timezone_set("America/Monterrey");
require __DIR__.'/vendor/autoload.php';
require '../PHPMailer/PHPMailerAutoload.php';
use Spipu\Html2Pdf\Html2Pdf;
$e = $_SESSION['myemail'];
$orienta = "P"; #P o L
#$e = 'krenicgm@gmail.com';
#$e = 'alemanrn20@gmail.com';
#$e = 'mfloresr@sre.gob.mx';
$dd = 'Test';
$res = verifica($e);
if(!$res){
    echo json_encode(array('success' => false, 'why' => date("d/m/Y H:i:s a"), 'day' => $dd,'r' => 'Lo sentimos, no se encontró registro de su asistencia.'));
}else{
    #echo json_encode(array('success' => false, 'why' => date("d/m/Y H:i:s a"), 'day' => $res[primerdia],'r' => 'Lo sentimos, no se encontró registro de su asistencia.'));
    $val = (int)str_split($res[primerdia])[0] + (int)str_split($res[segundodia])[0] + (int)str_split($res[tercerdia])[0];
    if ($val >= 2){
        #echo json_encode(array('success' => true, 'why' => date("d/m/Y H:i:s a"), 'day' => $val,'r' => 'Felicidades, registraste '.$val.' ocasiones tu asistencia.'));
        #creaPDF($res[nombre],$orienta,$res[id]);
        $sendChance = enviaEmail($res[email],$res[nombre],"edwin.nicolas@tsjcdmx.gob.mx","Constancia de Participación 9° Taller de Cooperación Procesal I.","8° Taller de Cooperación Procesal","Today",$res[id]);
        if($sendChance){
            echo json_encode(array('success' => true, 'why' => date("d/m/Y H:i:s a"), 'day' => $val,'r' => 'Felicidades, tu constancia ha sido enviada.'));
        }
        else{
            echo json_encode(array('success' => false, 'why' => date("d/m/Y H:i:s a"), 'day' => $val,'r' => 'Lo sentimos, ocurrió un error en el envío de la constancia.'));
        }
    }else{
        echo json_encode(array('success' => false, 'why' => date("d/m/Y H:i:s a"), 'day' => $val,'r' => 'Lo sentimos, solo registraste'.$val.' ocasión tu asistencia.'));
    }
}
######################################################
# Comprueba la asistencia del usuario                #
# Retorna 0, sí el usuario no ha tomado asistencia   #
# Retorna un arreglo, sí el usuario tomó asistencia #
######################################################
function verifica($e){
    require 'base.php';
    $query = 'SELECT tcpi_ocho.id,tcpi_ocho.nombre,tcpi_ocho.email,tcpi_ocho.dependencia,checklist_ocho.email,checklist_ocho.primerdia,checklist_ocho.segundodia,checklist_ocho.tercerdia FROM tcpi_ocho INNER JOIN checklist_ocho WHERE tcpi_ocho.email=:email AND checklist_ocho.email=:email';
    #$records = $conn->prepare('SELECT * FROM checklist_ocho WHERE email = :email LIMIT 1;');
    $records = $conn->prepare($query);
    $records->execute(array(':email' => $e));
    $numeroDeFilas = $records->rowCount();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    if ($numeroDeFilas <= 0) {
        return false;
    } else {
        return $results;
    }
}
####################################################
#              Función para crear el PDF           #
#  Cons: creaPDF(imagen,nombre,orientación)        #
####################################################
function creaPDF($n,$o,$id){
    include('phpqrcode/qrlib.php');
    $k = base64_encode($id);
    #$content='https://srae.poderjudicialcdmx.gob.mx/TCPI21/bXlDb25z.php?n='.$k;
    #$imgsrc ='res'.$id.'.png';
// outputs image directly into browser, as PNG stream
    #QRcode::png($content,$imgsrc,QR_ECLEVEL_L,10,2);
    $filename = renamer($n);
#$key ="Constancia emitida a: ".$nom.".";#
    $bd1 = '<div style="width:100%; height:99%; position:relative;text-aling:center;">
            <div style="width: 100%; height:98%; margin:auto; position:relative; z-index:10; text-align:center;">
                    <img src="https://srae.poderjudicialcdmx.gob.mx:2053/8TCPI/Cons8TCPI.jpeg" width="790" height="1120" style="display:block;margin:auto;">
            </div>
            <div style="width: 90%; height:22%; margin:0px auto!important;padding:0px; left:40px; top:45%; position:absolute; z-index:20; aling:center;">
                    <p style="font-size:45pt;color: rgb(100, 10, 14); font-weight: 900;text-align:center;">'.$n.'</p>
            </div>
        </div>';
    $html2pdf = new Html2Pdf($o,"A4","es","true","UTF-8",array(0,0,0,0),true);
    $html2pdf->pdf->SetProtection(array('copy','modify','extract'), '', 'nire93');
#$html2pdf->AddFont('LatoBold', 'bold', 'LatoBold.php');
#$html2pdf->setDefaultFont('LatoBold');
    $html2pdf->writeHTML($bd1);
#$html2pdf->output();
    $pdfdoc = $html2pdf->output('','S');
    return $pdfdoc;
}
##################################
#  Función para crear el nombre  #
##################################
function renamer($n){
    $nop = array("Á","É","Í","Ó","Ú","Ñ","á","é","í","ó","ú","ñ");
    $pe = array("A","E","I","O","U","N","a","e","i","o","u","n");
    $filename = "C_".strtolower(str_replace(" ","_",str_replace($nop, $pe,$n))).".pdf";
    return $filename;
}
##################################
#  Función para enviar el email  #
##################################
function enviaEmail($emaildestino,$nombre,$emailenvia,$asunto,$nRemite,$f,$id){
    global $errorM;
    $mail = new PHPMailer(true);
    $sFrom = $nRemite;
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = $emailenvia;
    #$mail->Password   = base64_decode('Q29uYXRyaWIyMDIwIQ==');
    $mail->Password   = 'recuerdoapoli1';
    $mail->SMTPSecure = "tls";         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    $mail->CharSet = 'UTF-8';
    #$mail->SMTPDebug = 2;
    //Destinatarios
    $mail->setFrom($emailenvia, $sFrom);
    $mail->addAddress($emaildestino, $nombre);     // Add a recipient
    // Attachments
    $mail->addStringAttachment(creaPDF($nombre,"P",$id),renamer($nombre));
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "=?UTF-8?B?".base64_encode($asunto)."=?=";
    $mail->Body ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml"><head><meta content="text/html; charset=utf-8" http-equiv="Content-Type"/><meta content="width=device-width" name="viewport"/><!--[if !mso]><!--><meta content="IE=edge" http-equiv="X-UA-Compatible"/><title></title><!--[if !mso]><!--><style type="text/css">body {margin: 0;padding: 0;}table,td,tr{vertical-align: top;border-collapse: collapse;}* {line-height: inherit;}		a[x-apple-data-detectors=true] {color: inherit !important;text-decoration: none !important;}</style><style id="media-query" type="text/css">@media (max-width: 660px) {.block-grid,.col {min-width: 320px !important;max-width: 100% !important;display: block !important;}.block-grid {width: 100% !important;}.col {width: 100% !important;}.col_cont {margin: 0 auto;}img.fullwidth,img.fullwidthOnMobile {	max-width: 100% !important;}.no-stack .col {min-width: 0 !important;display: table-cell !important;}.no-stack.two-up .col {width: 50% !important;}.no-stack .col.num2 {width: 16.6% !important;}.no-stack .col.num3 {width: 25% !important;}.no-stack .col.num4 {width: 33% !important;}.no-stack .col.num5 {width: 41.6% !important;}.no-stack .col.num6 {width: 50% !important;}.no-stack .col.num7 {width: 58.3% !important;}.no-stack .col.num8 {width: 66.6% !important;}.no-stack .col.num9 {width: 75% !important;}.no-stack .col.num10 {width: 83.3% !important;}.video-block {max-width: none !important;}.mobile_hide {min-height: 0px;max-height: 0px;max-width: 0px;display: none;overflow: hidden;font-size: 0px;}.desktop_hide {display: block !important;max-height: none !important;}}</style><style id="icon-media-query" type="text/css">@media (max-width: 660px) {.icons-inner {text-align: center;}.icons-inner td {margin: 0 auto;}}</style></head><body class="clean-body" style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #f8f8f9;"><!--[if IE]><div class="ie-browser"><![endif]--><table bgcolor="#f8f8f9" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="table-layout: fixed; vertical-align: top; min-width: 320px; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f8f8f9; width: 100%;" valign="top" width="100%"> <tbody><tr style="vertical-align: top;" valign="top"><td style="word-break: break-word; vertical-align: top;" valign="top"><!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color:#f8f8f9"><![endif]--><div style="background-color:#1aa19c;"><div class="block-grid" style="min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #1aa19c;"><div style="border-collapse: collapse;display: table;width: 100%;background-color:#1aa19c;"><!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#1aa19c;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:640px"><tr class="layout-full-width" style="background-color:#1aa19c"><![endif]--><!--[if (mso)|(IE)]><td align="center" width="640" style="background-color:#1aa19c;width:640px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]--><div class="col num12" style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;"><div class="col_cont" style="width:100% !important;"><!--[if (!mso)&(!IE)]><!--><div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;"><!--<![endif]--><table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%"><tbody><tr style="vertical-align: top;" valign="top"><td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;" valign="top"><table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 4px solid #1AA19C; width: 100%;" valign="top" width="100%"><tbody><tr style="vertical-align: top;" valign="top"><td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td></tr></tbody></table></td></tr></tbody></table><!--[if (!mso)&(!IE)]><!--></div><!--<![endif]--></div></div><!--[if (mso)|(IE)]></td></tr></table><![endif]--><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]--></div></div></div><div style="background-color:transparent;"><div class="block-grid" style="min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: transparent;"><div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;"><!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:640px"><tr class="layout-full-width" style="background-color:transparent"><![endif]--><!--[if (mso)|(IE)]><td align="center" width="640" style="background-color:transparent;width:640px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]--><div class="col num12" style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;"><div class="col_cont" style="width:100% !important;"><!--[if (!mso)&(!IE)]><!--><div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;"><!--<![endif]--><div align="center" class="img-container center fixedwidth" style="padding-right: 0px;padding-left: 0px;"><!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 0px;padding-left: 0px;" align="center"><![endif]--><a href="#" style="outline:none" tabindex="-1" target="_blank"><img align="center" alt="" border="0" class="center fixedwidth" src="https://srae.poderjudicialcdmx.gob.mx:2053/8TCPI/assets/logos/logo_txt.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 160px; display: block;" title="" width="160"/></a><!--[if mso]></td></tr></table><![endif]--></div><!--[if (!mso)&(!IE)]><!--></div><!--<![endif]--></div></div><!--[if (mso)|(IE)]></td></tr></table><![endif]--><!--[if (mso)|(IE)]></td>/tr></table></td></tr></table><![endif]--></div></div></div><div style="background-color:transparent;"><div class="block-grid" style="min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #fff;">
<div style="border-collapse: collapse;display: table;width: 100%;background-color:#fff;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:640px"><tr class="layout-full-width" style="background-color:#fff"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="640" style="background-color:#fff;width:640px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->
<div class="col num12" style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">
<div class="col_cont" style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<div align="center" class="img-container center autowidth" style="padding-right: 0px;padding-left: 0px;">
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 0px;padding-left: 0px;" align="center"><![endif]--><a href="#" style="outline:none" tabindex="-1" target="_blank"><img align="center" alt="" border="0" class="center autowidth" src="https://i.ibb.co/0Fr9z1R/constancia.gif" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 640px; display: block;" title="" width="640"/></a>
<!--[if mso]></td></tr></table><![endif]-->
</div>
<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 30px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;" valign="top">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid #BBBBBB; width: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 40px; padding-left: 40px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
<div style="color:#555555;line-height:1.2;padding-top:10px;padding-right:40px;padding-bottom:10px;padding-left:40px;">
<div class="txtTinyMce-wrapper" style="line-height: 1.2; font-size: 12px; color: #555555; mso-line-height-alt: 14px;">
<p style="margin: 0; font-size: 30px; line-height: 1.2; text-align: center; word-break: break-word; mso-line-height-alt: 36px; margin-top: 0; margin-bottom: 0;"><span style="font-size: 30px; color: #2b303a;"><strong>¡Apreciable '.$nombre.'!</strong></span></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 40px; padding-left: 40px; padding-top: 10px; padding-bottom: 10px; font-family: Tahoma, sans-serif"><![endif]-->
<div style="color:#555555;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.5;padding-top:10px;padding-right:40px;padding-bottom:10px;padding-left:40px;">
<div class="txtTinyMce-wrapper" style="line-height: 1.5; font-size: 12px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; color: #555555; mso-line-height-alt: 18px;">
<p style="margin: 0; font-size: 15px; line-height: 1.5; text-align: center; word-break: break-word; mso-line-height-alt: 23px; margin-top: 0; margin-bottom: 0;"><span style="color: #808389; font-size: 15px;">Nos complace informarte que tu Constancia de participación del 8° Taller de Cooperación Procesal Internacional 2022, ha sido generada exitosamente.<br> Debes saber que, por motivos de seguridad, tu constancia estará disponible para su descarga durante 10 días naturales a partir de la primer solicitud de descarga.<br><br> Sin más por el momento y a nombre de todo el comité organizador, agradecemos tu valiosa participación en el 8° Taller de Cooperación Procesal Internacional 2022.</span></p>
</div>
</div>
<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 60px; padding-right: 0px; padding-bottom: 12px; padding-left: 0px;" valign="top">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid #BBBBBB; width: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td></tr></tbody></table></td></tr></tbody></table><!--[if (!mso)&(!IE)]><!--></div><!--<![endif]--></div></div><!--[if (mso)|(IE)]></td></tr></table><![endif]--><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]--></div></div></div><div style="background-color:transparent;">
<div class="block-grid" style="min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #8A2138;">
<div style="border-collapse: collapse;display: table;width: 100%;background-color:#410125;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:640px"><tr class="layout-full-width" style="background-color:#410125"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="640" style="background-color:#410125;width:640px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->
<div class="col num12" style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">
<div class="col_cont" style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<div align="center" class="img-container center fixedwidth" style="padding-right: 0px;padding-left: 0px;">
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><!--<tr style="line-height:0px"><td style="padding-right: 0px;padding-left: 0px;" align="center"><![endif]--><!--<a href="www.example.com" style="outline:none" tabindex="-1" target="_blank"><img align="center" alt="Your logo. " border="0" class="center fixedwidth" src="images/aa73bcbb-1ce0-453a-8b6f-4f9e10336b9c.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 216px; display: block;" title="Your logo. " width="216"/></a>-->
<!--[if mso]></td><td style="padding-right: 0px;padding-left: 0px;" align="center"><![endif]--><!--<a href="www.example.com" style="outline:none" tabindex="-1" target="_blank"><img align="center" alt="Your logo. " border="0" class="center fixedwidth" src="images/aa73bcbb-1ce0-453a-8b6f-4f9e10336b9c.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 216px; display: block;" title="Your logo. " width="216"/></a>-->
<!--[if mso]></td><td style="padding-right: 0px;padding-left: 0px;" align="center"><![endif]--><!--<a href="www.example.com" style="outline:none" tabindex="-1" target="_blank"><img align="center" alt="Your logo. " border="0" class="center fixedwidth" src="images/aa73bcbb-1ce0-453a-8b6f-4f9e10336b9c.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 216px; display: block;" title="Your logo. " width="216"/></a>-->
<!--[if mso]></td></tr></table><![endif]-->
</div>
<table cellpadding="0" cellspacing="0" class="social_icons" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top; padding-top: 28px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
<table align="center" cellpadding="0" cellspacing="0" class="social_table" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-tspace: 0; mso-table-rspace: 0; mso-table-bspace: 0; mso-table-lspace: 0;" valign="top">
<tbody>
<tr align="center" style="vertical-align: top; display: inline-block; text-align: center;" valign="top">
<td style="word-break: break-word; vertical-align: top; padding-bottom: 0; padding-right: 10px; padding-left: 10px;" valign="top"><a href="https://www.facebook.com/SREMX" target="_blank"><img alt="Facebook" height="32" src="https://i.ibb.co/GQcBLpm/facebook2x.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; display: block;" title="Facebook" width="32"/></a></td>
<td style="word-break: break-word; vertical-align: top; padding-bottom: 0; padding-right: 10px; padding-left: 10px;" valign="top"><a href="https://twitter.com/SRE_mx" target="_blank"><img alt="Twitter" height="32" src="https://i.ibb.co/41Q05Qs/twitter2x.png
" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; display: block;" title="Twitter" width="32"/></a></td>
<td style="word-break: break-word; vertical-align: top; padding-bottom: 0; padding-right: 10px; padding-left: 10px;" valign="top"><a href="https://www.instagram.com/sremx/" target="_blank"><img alt="Instagram" height="32" src="https://i.ibb.co/ysmyx1J/instagram2x.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; display: block;" title="Instagram" width="32"/></a></td>
<!--<td style="word-break: break-word; vertical-align: top; padding-bottom: 0; padding-right: 10px; padding-left: 10px;" valign="top"><a href="https://www.linkedin.com/" target="_blank"><img alt="LinkedIn" height="32" src="images/linkedin2x.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; display: block;" title="LinkedIn" width="32"/></a></td>-->
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%"><tbody><tr style="vertical-align: top;" valign="top"><td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 25px; padding-right: 40px; padding-bottom: 10px; padding-left: 40px;" valign="top"><table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 1px solid #555961; width: 100%;" valign="top" width="100%"><tbody><tr style="vertical-align: top;" valign="top"><td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td></tr></tbody></table></td></tr></tbody></table><!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 40px; padding-left: 40px; padding-top: 20px; padding-bottom: 30px; font-family: Tahoma, sans-serif"><![endif]--><div style="color:#555555;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:20px;padding-right:40px;padding-bottom:30px;padding-left:40px;"><div class="txtTinyMce-wrapper" style="line-height: 1.2; font-size: 12px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; color: #555555; mso-line-height-alt: 14px;"><p style="margin: 0; font-size: 12px; line-height: 1.2; word-break: break-word; text-align: center; mso-line-height-alt: 14px; margin-top: 0; margin-bottom: 0;"><span style="color: #95979c; font-size: 12px;">Poder Judicial de la Ciudad de México © 2021</span></p><p style="margin: 0; font-size: 12px; line-height: 1.2; word-break: break-word; text-align: center; mso-line-height-alt: 14px; margin-top: 0; margin-bottom: 0;"><span style="color: #95979c; font-size: 12px;">Si tienes dificultades para ingresar, responde a este email detallando lo sucedido.</span></p></div></div><!--[if mso]></td></tr></table><![endif]--><!--[if (!mso)&(!IE)]><!--></div><!--<![endif]--></div></div><!--[if (mso)|(IE)]></td></tr></table><![endif]--><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]--></div></div></div><div style="background-color:transparent;"><div class="block-grid" style="min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: transparent;"><div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;"><!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:640px"><tr class="layout-full-width" style="background-color:transparent"><![endif]--><!--[if (mso)|(IE)]><td align="center" width="640" style="background-color:transparent;width:640px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]--><div class="col num12" style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;"><div class="col_cont" style="width:100% !important;"><!--[if (!mso)&(!IE)]><!--><div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;"><!--<![endif]--><table cellpadding="0" cellspacing="0" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" valign="top" width="100%"><tr style="vertical-align: top;" valign="top"><td align="center" style="word-break: break-word; vertical-align: top; padding-top: 5px; padding-right: 0px; padding-bottom: 5px; padding-left: 0px; text-align: center;" valign="top"><!--[if vml]><table align="left" cellpadding="0" cellspacing="0" role="presentation" style="display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"><![endif]--><!--[if !vml]><!--><table cellpadding="0" cellspacing="0" class="icons-inner" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;" valign="top"><!--<![endif]--></table></td></tr></table><!--[if (!mso)&(!IE)]><!--></div><!--<![endif]--></div></div><!--[if (mso)|(IE)]></td></tr></table><![endif]--><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]--></div></div></div><!--[if (mso)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table><!--[if (IE)]></div><![endif]--></body></html>';

    #$mail->AltBody = 'Estimado '.$nombre.'
    #Estimado (a) Juez (a):
    #Reciba este cálido mensaje en una fecha tan especial, como lo es, el <bold>Día del Juzgador Mexicano </bold>. La labor de juzgar es un compromiso que llevamos a cabalidad todos los días y que, sin duda, se ejerce con honradez, independencia, imparcialidad y profesionalismo.
    ##Por lo anterior, no cabe más que felicitarles reconociendo su vocación de servicio y entrega a esta Casa de Justicia.
    #Atentamente,
    #Magdo. Dr. Rafael Guerra Álvarez
    #Presidente del Poder Judicial de la Ciudad de México.';

    if(!$mail->Send()) {
        $errorM = 'Mail error: '.$mail->ErrorInfo;
        return false;
    } else {
        $errorM = 'Message sent!';
        return true;
    }
}
?>