<?php 
session_start();

if(empty($_SESSION['nome'])){

    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sistema Odontológico</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="shortcut icon" href="imagem/ico.png">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style type="text/css">
    .bs-example{
        margin: 20px;
    }
</style>
<style>

    body {
        background: #F8F8FF;
        margin: 1px 10px;
        padding: 0;
        font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
        font-size: 14px;
    }

    #calendar {
        max-width: 1200px;
        margin: 0 auto;
        background: #FFFFFF;
    }

</style>

<link href='fullcalendar/fullcalendar.min.css' rel='stylesheet' />
<link href='fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='fullcalendar/lib/moment.min.js'></script>
<script src='fullcalendar/lib/jquery.min.js'></script>
<script src='fullcalendar/fullcalendar.min.js'></script>
<script src='fullcalendar/locale/pt-br.js'></script>



</head>
<body>
<div class="bs-example">
    <nav id="myNavbar" class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="portal.php" class="navbar-brand"> <li class="glyphicon glyphicon-cloud"> </li> Sistema Odontológico</a>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle "><li class="">Processo <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="cadastro_paciente.php">- Cadastrar Pacientes</a></li>
                            <li><a href="#">- Gerenciar Agenda</a></li>
                            <li><a href="#"></a></li>
                            <li class="divider"></li>
                            <li><a href="#">Abrir Prontuario</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Operacional <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">- Cadastrar Medicamentos</a></li>
                            <li><a href="#">- Cadastrar Serviços</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Atestado Horas</a></li>
                            <li><a href="#">Atestado Repouso</a></li>
                            <li><a href="portal.php">Agenda</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Executivo <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">- Gerar Relatórios</a></li>
                            <li class="divider"></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li >
                        <a style="text-shadow: 0.0em 0.0em 0.03em black; font-size: 18px;"><?php date_default_timezone_set('America/Sao_Paulo'); $date = date('d/m/Y - H:i'); echo $date ?> <b class="glyphicon glyphicon-time"></b>  </a> 
                        
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"><?php echo $_SESSION['nome']; ?> <b class="caret"></b>  </a> 
                        <ul class="dropdown-menu">
                            <li><a href="#">Configurações</a></li>
                            <li><a href="#">Sobre</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php">Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</div>
<div id='calendar'></div>
</div>
</div>
</body>
<script>

    $(document).ready(function() {

        $('#calendar').fullCalendar({
            defaultDate: '2017-03-12',
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                {
                    title: 'Paciente 1 - Serviço X',
                    start: '2017-03-01T12:01',
                    
                }
            ]
        });
        
    });

</script>
</html>      