<?php
//librerias
require 'PHPMailer/PHPMailerAutoload.php';
require 'partials/base.php';
$key_pass = 'MzH3WPNc';
#Test Values#
#$key_mail = 'krenicgm@gmail.com';
#$key_name = 'Edwin Nicolás';
#$key_ubica = 'CDMX';
#$key_depen = 'PJCDMX';
#$key_cel = '5582329936';

$key_mail = $_POST['email'];
$key_name = $_POST['nombre'];
$key_ubica = $_POST['pais'];
$key_depen = $_POST['dependencia'];
$key_cel = $_POST['cel'];
if(is_equal($key_mail))
{
    echo json_encode(array('success' => false, 'why' => 'El email ya está registrado'));
}
else{
    if(is_valid_email($key_mail))
    {
        $contr = r_pass();
        # (nombre,email,cel,ubicacion,dependencia,password)
        if(data_inyect($key_name,$key_mail,$key_cel,$key_ubica,$key_depen,$contr) !== false){
            #echo json_encode(array('success' => true, 'why' => 'Registro añadido', 'pass' => $contr, 'remy' => $key_mail));
            if(enviar_email($key_mail,$key_name,$contr)){
                echo json_encode(array('success' => true, 'why' => 'Registro añadido y correo enviado', 'pass' => $contr, 'remy' => $key_mail));
            }
            else{
                echo json_encode(array('success' => false, 'why' => 'El registro se agregó, pero ocurrió un error al intentar enviar email','kenneth' => $key_mail));
            }
        }
        else{
            echo json_encode(array('success' => false, 'why' => 'No es posible agregar el registro', 'number' => $count));
        }
    }else{
        echo json_encode(array('success' => false, 'why' => 'Email inválido'));
    }
}
#########################
# Settea una Password   #
#########################
function r_pass(){
    $key_temp='MzH3WPNc';
    do{
        $key_temp = generate_p();
    }while (is_not_set($key_temp) == 1);
    return $key_temp;
}
#####################
# Genera Password   #
#####################
function generate_p(){
    //Carácteres para la contraseña
    $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    $password = "";
    //Reconstruimos la contraseña segun la longitud que se quiera
    for($i=0;$i<8;$i++) {
        //obtenemos un caracter aleatorio escogido de la cadena de caracteres
        $password .= substr($str,rand(0,62),1);
    }
    //Mostramos la contraseña generada
    return $password;
}
#######################################
# Comprueba que el email sea válido   #
#######################################
function is_valid_email($str)
{
    return (false !== filter_var($str, FILTER_VALIDATE_EMAIL));
}
###############################################
# Comprueba que el email no esté registrado   #
# Retorna 0, sí el email no está registrado   #
# Retorna 1, sí el email ya está registrado   #
###############################################
function is_equal($str1)
{
    require 'partials/base.php';
    //echo '<script>console.log('.$str1.')</script>';
    $records = $conn->prepare('SELECT email FROM tcpi_nueve WHERE email = :email');
    $records->bindParam(':email', $str1);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_OBJ);
    if ($records -> rowCount() > 0)
    {
        $conn=null;
        return 1;
    }
    else
    {
        $conn=null;
        return 0;
    }
}
###############################################
# Comprueba que las pass no esté repetida     #
# Retorna 0, sí la password no existe.        #
# Retorna 1, sí la password ya existe.        #
###############################################
function is_not_set($value)
{
    require 'partials/base.php';
    $records = $conn->prepare('SELECT passsword FROM tcpi_nueve WHERE passsword = :pss');
    $records->bindParam(':pss', $value);
    $records->execute();
    $resultados = $records->fetch(PDO::FETCH_OBJ);
    if ($records -> rowCount() > 0)
    {
        #foreach($records as $record){echo $record -> passsword;}
        $conn = null;
        return 1;
    }else{
        $conn = null;
        return 0;
    }

}
###############################################
# Comprueba que las pass no esté repetida     #
# (nombre,email,cel,ubicacion,dependencia,password)     #
###############################################
function data_inyect($n,$e,$c,$u,$d,$p){
    require 'partials/base.php';
    $sql = "INSERT INTO tcpi_nueve(nombre,email,telefono,ubicacion,dependencia, passsword) VALUES ('".$n."','".$e."','".$c."','".$u."','".$d."','".$p."')";
    $count = $conn->exec($sql);
    return $count;
}
#######################
# Enviar el email     #
# Requiere: Email     #
#           Nombre    #
#           Pass      #
# Todo verificado     #
#######################
function enviar_email($email, $nombre, $contrasena)
{
    global $errorM;
    $mail = new PHPMailer(); //Create a new PHPMailer instance
    $mail->SMTPDebug = SMTP::DEBUG_LOWLEVEL;
    $mail->IsSMTP();
    //Configuracion servidor mail
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl'; //seguridad
    #$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Host = "smtp.gmail.com"; // servidor smtp
    $mail->Port = 465; //puerto
    $mail->CharSet = 'UTF-8';
    /*
    $mail->From = "example@example.com"; //remitente
    $mail->Username ='krenicgm@gmail.com';
    $mail->Password = base64_decode("cmVjdWVyZG9hcG9saQ==");
    */

    #$mail->From = "edwin.nicolas@tsjcdmx.gob.mx";
    $mail->Username = "edwin.nicolas@tsjcdmx.gob.mx";
    $mail->FromName ="=?ISO-8859-1?B?".base64_encode(utf8_decode("9° Taller de Cooperación Procesal Internacional"))."=?=";
    $mail->Password = base64_decode("cmVjdWVyZG9hcG9saTE=");

    $mail->AddAddress($email);
    $mail->Subject =  "=?ISO-8859-1?B?".base64_encode(utf8_decode("Confirmación de registro"))."=?=";
    //Avisar si fue enviado o no y dirigir al index
    /*$mail->Body = "Hola: ".$_POST['name']."\n
    \n\nCon tu registro tendrás acceso al material didáctico y contenido multimedia del 6° Taller de Cooperación Procesal Internacional. Asimismo, al finalizar el taller, podrás descargar tu constancia de participación.
    Tu registro se ha completado con éxito.\n\nPuedes iniciar sesión aquí, recuerda que deberás acceder con tu correo electrónico (".$_POST['email'].").";*/
    $mail->Body ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml"><head><meta content="text/html; charset=utf-8" http-equiv="Content-Type"/><meta content="width=device-width" name="viewport"/><!--[if !mso]><!--><meta content="IE=edge" http-equiv="X-UA-Compatible"/><title></title><!--[if !mso]><!--><style type="text/css">body {margin: 0;padding: 0;}table,td,tr{vertical-align: top;border-collapse: collapse;}* {line-height: inherit;}		a[x-apple-data-detectors=true] {color: inherit !important;text-decoration: none !important;}</style><style id="media-query" type="text/css">@media (max-width: 660px) {.block-grid,.col {min-width: 320px !important;max-width: 100% !important;display: block !important;}.block-grid {width: 100% !important;}.col {width: 100% !important;}.col_cont {margin: 0 auto;}img.fullwidth,img.fullwidthOnMobile {	max-width: 100% !important;}.no-stack .col {min-width: 0 !important;display: table-cell !important;}.no-stack.two-up .col {width: 50% !important;}.no-stack .col.num2 {width: 16.6% !important;}.no-stack .col.num3 {width: 25% !important;}.no-stack .col.num4 {width: 33% !important;}.no-stack .col.num5 {width: 41.6% !important;}.no-stack .col.num6 {width: 50% !important;}.no-stack .col.num7 {width: 58.3% !important;}.no-stack .col.num8 {width: 66.6% !important;}.no-stack .col.num9 {width: 75% !important;}.no-stack .col.num10 {width: 83.3% !important;}.video-block {max-width: none !important;}.mobile_hide {min-height: 0px;max-height: 0px;max-width: 0px;display: none;overflow: hidden;font-size: 0px;}.desktop_hide {display: block !important;max-height: none !important;}}</style><style id="icon-media-query" type="text/css">@media (max-width: 660px) {.icons-inner {text-align: center;}.icons-inner td {margin: 0 auto;}}</style></head><body class="clean-body" style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #f8f8f9;"><!--[if IE]><div class="ie-browser"><![endif]--><table bgcolor="#f8f8f9" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="table-layout: fixed; vertical-align: top; min-width: 320px; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f8f8f9; width: 100%;" valign="top" width="100%"> <tbody><tr style="vertical-align: top;" valign="top"><td style="word-break: break-word; vertical-align: top;" valign="top"><!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color:#f8f8f9"><![endif]--><div style="background-color:#1aa19c;"><div class="block-grid" style="min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #1aa19c;"><div style="border-collapse: collapse;display: table;width: 100%;background-color:#1aa19c;"><!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#1aa19c;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:640px"><tr class="layout-full-width" style="background-color:#1aa19c"><![endif]--><!--[if (mso)|(IE)]><td align="center" width="640" style="background-color:#1aa19c;width:640px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]--><div class="col num12" style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;"><div class="col_cont" style="width:100% !important;"><!--[if (!mso)&(!IE)]><!--><div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;"><!--<![endif]--><table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%"><tbody><tr style="vertical-align: top;" valign="top"><td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;" valign="top"><table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 4px solid #1AA19C; width: 100%;" valign="top" width="100%"><tbody><tr style="vertical-align: top;" valign="top"><td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td></tr></tbody></table></td></tr></tbody></table><!--[if (!mso)&(!IE)]><!--></div><!--<![endif]--></div></div><!--[if (mso)|(IE)]></td></tr></table><![endif]--><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]--></div></div></div><div style="background-color:transparent;"><div class="block-grid" style="min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: transparent;"><div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;"><!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:640px"><tr class="layout-full-width" style="background-color:transparent"><![endif]--><!--[if (mso)|(IE)]><td align="center" width="640" style="background-color:transparent;width:640px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]--><div class="col num12" style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;"><div class="col_cont" style="width:100% !important;"><!--[if (!mso)&(!IE)]><!--><div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;"><!--<![endif]--><div align="center" class="img-container center fixedwidth" style="padding-right: 0px;padding-left: 0px;"><!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 0px;padding-left: 0px;" align="center"><![endif]--><a href="#" style="outline:none" tabindex="-1" target="_blank"><img align="center" alt="" border="0" class="center fixedwidth" src="https://i.ibb.co/VHG1KpT/logo-txt.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 160px; display: block;" title="" width="160"/></a><!--[if mso]></td></tr></table><![endif]--></div><!--[if (!mso)&(!IE)]><!--></div><!--<![endif]--></div></div><!--[if (mso)|(IE)]></td></tr></table><![endif]--><!--[if (mso)|(IE)]></td>/tr></table></td></tr></table><![endif]--></div></div></div><div style="background-color:transparent;"><div class="block-grid" style="min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #fff;">
  <div style="border-collapse: collapse;display: table;width: 100%;background-color:#fff;">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:640px"><tr class="layout-full-width" style="background-color:#fff"><![endif]-->
    <!--[if (mso)|(IE)]><td align="center" width="640" style="background-color:#fff;width:640px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->
    <div class="col num12" style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">
      <div class="col_cont" style="width:100% !important;">
        <!--[if (!mso)&(!IE)]><!-->
        <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
          <!--<![endif]-->
          <div align="center" class="img-container center autowidth" style="padding-right: 0px;padding-left: 0px;">
            <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 0px;padding-left: 0px;" align="center"><![endif]--><a href="#" style="outline:none" tabindex="-1" target="_blank"><img align="center" alt="" border="0" class="center autowidth" src="https://i.ibb.co/0KF1Gv6/passconf.gif" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 640px; display: block;" title="" width="640"/></a>
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
              <p style="margin: 0; font-size: 30px; line-height: 1.2; text-align: center; word-break: break-word; mso-line-height-alt: 36px; margin-top: 0; margin-bottom: 0;"><span style="font-size: 30px; color: #2b303a;"><strong>¡Felicidades '.$nombre.'!</strong></span></p>
            </div>
          </div>
          <!--[if mso]></td></tr></table><![endif]-->
          <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 40px; padding-left: 40px; padding-top: 10px; padding-bottom: 10px; font-family: Tahoma, sans-serif"><![endif]-->
          <div style="color:#555555;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.5;padding-top:10px;padding-right:40px;padding-bottom:10px;padding-left:40px;">
            <div class="txtTinyMce-wrapper" style="line-height: 1.5; font-size: 12px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; color: #555555; mso-line-height-alt: 18px;">
              <p style="margin: 0; font-size: 15px; line-height: 1.5; text-align: center; word-break: break-word; mso-line-height-alt: 23px; margin-top: 0; margin-bottom: 0;"><span style="color: #808389; font-size: 15px;">
                Has completado tu registro al 9° Taller de Cooperación Procesal Internacional. Que se llevará a cabo del 19 al 21 de abril de 2023.
                <br> Con tu registro, podrás ingresar al micrositio del evento, de igual manera accederás a las ponencias y material de apoyo que sea provisto por los organizadores.
                <br>Al finalizar el evento, las instrucciones para recibir tu constancia de participación serán evaludas y emitidas en el micrositio.
                <br>A continuación se comparten los datos de acceso que has obtenido con tu registro:
                <br> Usuario: '.$email.' <br> Contraseña: '.$contrasena.'<br>Te sugerimos <i>copiar y pegar</i> tu contraseña para evitar errores.</span></p>
            </div>
          </div>
          <!--[if mso]></td></tr></table><![endif]-->
          <div align="center" class="button-container" style="padding-top:15px;padding-right:10px;padding-bottom:0px;padding-left:10px;">
            <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"><tr><td style="padding-top: 15px; padding-right: 10px; padding-bottom: 0px; padding-left: 10px" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="www.example.com" style="height:46.5pt;width:202.5pt;v-text-anchor:middle;" arcsize="57%" stroke="false" fillcolor="#f7a50c"><w:anchorlock/><v:textbox inset="0,0,0,0"><center style="color:#ffffff; font-family:Arial, sans-serif; font-size:16px"><![endif]--><a href="https://srae.poderjudicialcdmx.gob.mx:2053/8TCPI/" style="-webkit-text-size-adjust: none; text-decoration: none; display: inline-block; color: #ffffff; background-color: #BC955C; border-radius: 35px; -webkit-border-radius: 35px; -moz-border-radius: 35px; width: auto; width: auto; border-top: 1px solid #f7a50c; border-right: 1px solid #f7a50c; border-bottom: 1px solid #f7a50c; border-left: 1px solid #f7a50c; padding-top: 15px; padding-bottom: 15px; text-align: center; mso-border-alt: none; word-break: keep-all;" target="_blank"><span style="padding-left:30px;padding-right:30px;font-size:16px;display:inline-block;letter-spacing:undefined;"><span style="font-size: 16px; margin: 0; line-height: 2; word-break: break-word; mso-line-height-alt: 32px;"><strong>Iniciar Sesión</strong></span></span></a>
            <!--[if mso]></center></v:textbox></v:roundrect></td></tr></table><![endif]-->
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
            <table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%"><tbody><tr style="vertical-align: top;" valign="top"><td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 25px; padding-right: 40px; padding-bottom: 10px; padding-left: 40px;" valign="top"><table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 1px solid #555961; width: 100%;" valign="top" width="100%"><tbody><tr style="vertical-align: top;" valign="top"><td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td></tr></tbody></table></td></tr></tbody></table><!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 40px; padding-left: 40px; padding-top: 20px; padding-bottom: 30px; font-family: Tahoma, sans-serif"><![endif]--><div style="color:#555555;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:20px;padding-right:40px;padding-bottom:30px;padding-left:40px;"><div class="txtTinyMce-wrapper" style="line-height: 1.2; font-size: 12px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; color: #555555; mso-line-height-alt: 14px;"><p style="margin: 0; font-size: 12px; line-height: 1.2; word-break: break-word; text-align: center; mso-line-height-alt: 14px; margin-top: 0; margin-bottom: 0;"><span style="color: #95979c; font-size: 12px;">Poder Judicial de la Ciudad de México © 2022</span></p><p style="margin: 0; font-size: 12px; line-height: 1.2; word-break: break-word; text-align: center; mso-line-height-alt: 14px; margin-top: 0; margin-bottom: 0;"><span style="color: #95979c; font-size: 12px;">Si tienes dificultades para ingresar, responde a este email detallando lo sucedido.</span></p></div></div><!--[if mso]></td></tr></table><![endif]--><!--[if (!mso)&(!IE)]><!--></div><!--<![endif]--></div></div><!--[if (mso)|(IE)]></td></tr></table><![endif]--><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]--></div></div></div><div style="background-color:transparent;"><div class="block-grid" style="min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: transparent;"><div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;"><!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:640px"><tr class="layout-full-width" style="background-color:transparent"><![endif]--><!--[if (mso)|(IE)]><td align="center" width="640" style="background-color:transparent;width:640px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]--><div class="col num12" style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;"><div class="col_cont" style="width:100% !important;"><!--[if (!mso)&(!IE)]><!--><div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;"><!--<![endif]--><table cellpadding="0" cellspacing="0" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" valign="top" width="100%"><tr style="vertical-align: top;" valign="top"><td align="center" style="word-break: break-word; vertical-align: top; padding-top: 5px; padding-right: 0px; padding-bottom: 5px; padding-left: 0px; text-align: center;" valign="top"><!--[if vml]><table align="left" cellpadding="0" cellspacing="0" role="presentation" style="display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"><![endif]--><!--[if !vml]><!--><table cellpadding="0" cellspacing="0" class="icons-inner" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;" valign="top"><!--<![endif]--></table></td></tr></table><!--[if (!mso)&(!IE)]><!--></div><!--<![endif]--></div></div><!--[if (mso)|(IE)]></td></tr></table><![endif]--><!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]--></div></div></div><!--[if (mso)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table><!--[if (IE)]></div><![endif]--></body></html>';

    /*$mail->Body = '<table class="body-wrap" style=" width: 100%; border-width: thick; border-bottom-color: firebrick;">
    <tr>
        <td></td>
        <td class="container">
            <div class="content" style="background-image:url("http://srae.poderjudicialcdmx.gob.mx/TCPI21/img/bg_movil/Fondo.jpg"); background-repeat:no-repeat;background-position:center center; padding: 15px; max-width: 600px; margin: 0 auto; display: block;">
                <table>
                    <tr>
                        <td>
                            <h3 style="font-weight: 500; font-size: 27px; color: #11322C; text-align: center;">¡Felicidades '.$nombre.'!<small style="font-size: 60%; color: #235C4E; line-height: 0; text-transform: none;">.</small></h3>
                            <p style="text-align: justify;">Has completado tu registro al 7° Taller de Cooperación Procesal Internacional 2021. <br>El cual se llevará a cabo del 8 al 10 de septiembre de 2021. <br> Con tu registro, podrás ingresar al micrositio del evento; de igual manera accederás a las ponencias y material de apoyo que sea provisto por los organizadores. <br> Al finalizar el evento, las instrucciones para recibir tu constancia de participación serán evaludas y emitidas en el micrositio.</p>
                            <!-- Callout Panel -->
                            <p class="callout" style="padding: 15px; background-color: rgba(188,149,92,0.8); color: #fff; margin-bottom: 15px; border-radius: 20px; text-align: center; font-size:17;">
                                A continuación se comparte la liga y los datos de acceso que has obtenido con tu registro:<br>Para iniciar sesión <a href="http://srae.poderjudicialcdmx.gob.mx/TCPI21/login.php" style="color: #11322C;" text-decoration:inline;><strong>da clic aquí</strong></a> e ingresa los siguientes datos:<br> Usuario: '.$email.' <br> Contraseña: '.$contrasena.'
                            </p><!-- /Callout Panel -->
                             <p style="text-align: justify;">En caso de tener dificultades para ingresar, responde a este email, describiendo lo sucedido a detalle.</p>
                            <br />
                            <br />
                            <p><!--<img src="http://srae.poderjudicialcdmx.gob.mx/splash_email.png" style="max-width: 100%;" />--></p>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
        <td></td>
    </tr>
</table>';*/
    $mail->AltBody= "Hola: ".$nombre."\n
        \n\nHas completado tu registro al 9° Taller de Cooperación Procesal Internacional 2023. El cual se llevará a cabo del 19 al 21 de abril de 2023. Con tu registro, podrás ingresar al micrositio del evento; de igual manera accederás a las ponencias y material de apoyo que sea provisto por los organizadores. Al finalizar el evento, las instrucciones para recibir tu constancia de participación serán evaludas y emitidas en el micrositio. A continuación se comparten los datos de acceso que has obtenido con tu registro: -Usuario: '.$email.'   -Contraseña: '.$contrasena.'";

    ###########################
    if(!$mail->Send()) {
        $errorM = 'Mail error: '.$mail->ErrorInfo;
        #echo $errorM;
        return false;
    } else {
        $errorM = 'Message sent!';
        return true;
    }
}
?>