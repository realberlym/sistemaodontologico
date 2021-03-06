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
                            
                        <form id="loginform" action="mail_recoverypass.php" method="POST" class="form-horizontal" role="form" data-toggle="validator">
                            <h4> Digite seu e-mail abaixo e iremos enviar uma mensagem para recuparação.</h4>           
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" class="form-control" name="username" value="" placeholder="Digite seu e-mail" type="email" data-error="Por favor, informe um e-mail correto." required>
                                        <div class="help-block with-errors"></div>                                       
                                    </div>
                            <div class="input-group">
                                      
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      
                                      
                                      
                                      <button id="btn-login"  class="btn btn-success" type="submit" > Enviar e-mail </button>
                                     
                                    </div>
                                </div>

                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                    Não tem uma conta?
                                        <a href="mailto:senac.douglas@gmail.com" >
                                        Fale conosco.
                                        </a>
                                 </div>
                                
                            </form>     



                        </div>                     
                    </div>  
        </div>
</body>
</html>

