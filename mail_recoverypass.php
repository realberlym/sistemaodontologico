<?php

require_once('config/db.php');

$sql = "select * from sis_login where email = '".$_POST['username']."'";

$result = mysql_query($sql);

$row = mysql_fetch_row($result);

$codigo = $row[7];



if(mysql_num_rows($result) > 0){

	$to  = 'sistema.odonto.2017@gmail.com' . ', '; // note the comma
	$to .=  $_POST['username'];

	// subject
	$subject = 'Definir senha nova';


	// message
	$message = '
	<!DOCTYPE html>
	<html>
	<head>
	<body >

    
                    <div style="background:#87CEFA; width:1050px; margin: auto; padding:10px; text-align:;-moz-border-radius:7px;-webkit-border-radius:7px; border-radius:7px;">Sistema Odontológico | Login</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        
                        <a style="">Olá tudo bem ? você solicitou uma redefinição de senha do e-mail:</a><a>'.$_POST['username'].'</a>
                       <a href="http://localhost/SistemaOdontologico/direct_pass_sucess.php?token='.$codigo.'"><h4>Clique aqui para redefinir sua senha</h4></a> 

                       <div style="background:#87CEFA; width:1050px; margin: auto; padding:10px; text-align:;-moz-border-radius:7px;-webkit-border-radius:7px; border-radius:7px;"> .</div>
                       
	</body>
	</html>
	';

	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-Type: text/html; charset=utf-8' . "\r\n";

	// Additional headers
	//$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
	$headers .= 'From: Sistema Odontológico - Recuperação de senha <sistema.odonto.2017@gmail.com>' . "\r\n";
	//$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
	//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";


	// Mail it
	mail($to, $subject, $message, $headers);

	header('Location: recovery_sucess.php');

}elseif (mysql_num_rows($result) == 0) {

	header('Location: recovery_password_front _alert.php');
}






// multiple recipients
?>