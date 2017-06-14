<?php 
session_start();

if(empty($_SESSION['nome'])){

    header('Location: pagina_login.php');
}else{

	header('Location: portal.php');
}

?>