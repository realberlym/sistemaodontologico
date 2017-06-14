<?php

session_start();

require_once('config/db.php');

$login = $_POST['username'];
$senha = $_POST['password'];

$sql = " select * from sis_login where email = '".$login."' and senha = md5('".$senha."')";
$sql_bloked = "select * from sis_login where email = '".$login."'";


//echo $sql;

$result = mysql_query($sql);


if(mysql_num_rows($result) > 0){

	
	$row = mysql_fetch_row($result);

	if($row[6] == 5){

		header('Location: pagina_bloked.php');

	}elseif ($row[6]  < 5) {
		
		$_SESSION['nome'] = $row[1];
		$_SESSION['sobrenome'] = $row[2];
		$_SESSION['email']= $row[3];



		header('Location: portal.php');

	}	


}elseif (mysql_num_rows($result) == 0) {

	$result_bloked = mysql_query($sql_bloked);

	if(mysql_num_rows($result_bloked) > 0){

		mysql_query("update sis_login set bloqueio = bloqueio+1 where email = '".$login."'");

		header('Location: pagina_alert.php');

	}elseif (mysql_num_rows($result_bloked)  == 0) {

		header('Location: pagina_alert.php');
	}

}


?>