<?php

require_once('config/db.php');

$token = $_GET['token1'];
$senha = $_POST['password'];


$sql_consul = "select * from sis_login where token = '".$token."'";

$sql_up = "update sis_login SET senha = MD5('".$senha."') WHERE token = '".$token."'";

$result = mysql_query($sql_consul);

if(mysql_num_rows($result) > 0){

	mysql_query($sql_up);

	header('Location: reset_sucess.php');

}else{

	header('Location: conteudo_indisponivel.php');
}


?>