<?php 
session_start();

if(empty($_SESSION['nome'])){

    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Sistema Odontológico</title>
    <head lang="pt-br">
      <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/mobile.css">
      <link rel="shortcut icon" href="imagem/ico.png">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
      <script src="js/validator.min.js"></script>
      <title>Sistema Odontológico</title>
    </head>

<body style="background-image: url(imagem/wallpapers.jpg); opacity: ;" class="wallpaper-mobile">

    <div class="container-fluid">    
        <div id="loginbox" style="margin-top:200px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="painel-topo">Sistema Odontológico | Recuperar Senhas</div>
                        <div style="float:right; font-size: 100%; position: relative; top:-10px"><a href="index.php">Voltar para o inicío</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <h3>Tudo certo, foi enviado um e-mail para definir uma nova senha.<a class="glyphicon glyphicon-ok-circle"></a></h3>



                        </div>                     
                    </div>  
        </div>
</body>
</html>

