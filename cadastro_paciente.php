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
<title>Cadastro de Paciente</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="shortcut icon" href="imagem/ico.png">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/jquery.mask.js"></script>
<script src="js/jquery.mask.min.js"></script>
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
        background: #FFFFF0;
    }

</style>



</head>
<body>
<div class="bs-example">
    <nav id="myNavbar" class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
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
                            <li><a href="cadastro_cliente.php">- Cadastrar Pacientes</a></li>
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
<div id="main" class="container-fluid col-md-10" style="background: #FFFFFF; left: 50%; margin-left: -555px; position: absolute;
  ">
  
  <h3 class="page-header">Cadastro do paciente</h3>
  
  <form action="#" >
    <div class="row">
      <div class="form-group col-md-4">
        <label for="exampleInputEmail1">Nome e sobrenome * :</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o nome completo do paciente">
      </div>
      <div class="form-group col-md-2">
        <label for="exampleInputEmail1">Sexo * :</label>
        <select class="form-control">
          <option>Masculino</option>
          <option>Feminino</option>
          <option>Indefinido</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="exampleInputEmail1">RG * :</label>
        <input type="email" class="form-control rg" id="exampleInputEmail1" placeholder="Digite o RG">
      </div>
      <div class="form-group col-md-2">
        <label for="exampleInputEmail1">CPF * :</label>
        <input type="email" class="form-control cpf" id="exampleInputEmail1" placeholder="Digite o CPF">
      </div>
      <div class="form-group col-md-2">
        <label for="exampleInputEmail1">Naturalidade * :</label>
        <select class="form-control">
          <option>Brasileiro(a)</option>
          <option>Exterior</option>
        </select>
      </div>
    </div>
    
    <div class="row">
      <div class="form-group col-md-2">
        <label for="exampleInputEmail1">Data de Nascimento * :</label>
        <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
      </div>
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Endereço * :</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o endreço, número e complemento">
      </div>
      <div class="form-group col-md-2">
        <label for="exampleInputEmail1">CEP * :</label>
        <input type="email" class="form-control cep" id="exampleInputEmail1" placeholder="Digite o CEP">
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-3">
        <label for="exampleInputEmail1">Bairro * :</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o Bairro do paciente">
      </div>
      <div class="form-group col-md-3">
        <label for="exampleInputEmail1">Cidade * :</label>
        <select class="form-control">
            <option>  Arealva </option>
            <option>    Areias  </option>
            <option>    Areiópolis  </option>
            <option>    Ariranha    </option>
            <option>    Artur Nogueira  </option>
            <option>    Arujá   </option>
            <option>    Aspásia </option>
            <option>    Assis   </option>
            <option>    Atibaia </option>
            <option>    Auriflama   </option>
            <option>    Avaí    </option>
            <option>    Avanhandava </option>
            <option>    Avaré   </option>
            <option>    Adamantina  </option>
            <option>    Adolfo  </option>
            <option>    Aguaí   </option>
            <option>    Águas da Prata  </option>
            <option>    Águas de Lindóia    </option>
            <option>    Águas de Santa Bárbara  </option>
            <option>    Águas de São Pedro  </option>
            <option>    Agudos  </option>
            <option>    Alambari    </option>
            <option>    Alfredo Marcondes   </option>
            <option>    Altair  </option>
            <option>    Altinópolis </option>
            <option>    Alto Alegre </option>
            <option>    Alumínio    </option>
            <option>    Álvares Florence    </option>
            <option>    Álvares Machado </option>
            <option>    Álvaro de Carvalho  </option>
            <option>    Alvinlândia </option>
            <option>    Americana   </option>
            <option>    Américo Brasiliense </option>
            <option>    Américo de Campos   </option>
            <option>    Amparo  </option>
            <option>    Analândia   </option>
            <option>    Andradina   </option>
            <option>    Angatuba    </option>
            <option>    Anhembi </option>
            <option>    Anhumas </option>
            <option>    Aparecida   </option>
            <option>    Aparecida d’Oeste   </option>
            <option>    Apiaí   </option>
            <option>    Araçariguama    </option>
            <option>    Bady Bassitt    </option>
            <option>    Barbosa </option>
            <option>    Bariri  </option>
            <option>    Barra Bonita    </option>
            <option>    Barra do Chapéu </option>
            <option>    Barra do Turvo  </option>
            <option>    Barretos    </option>
            <option>    Barrinha    </option>
            <option>    Barueri </option>
            <option>    Bastos  </option>
            <option>    Batatais    </option>
            <option>    Bauru   </option>
            <option>    Bebedouro   </option>
            <option>    Bento de Abreu  </option>
            <option>    Bernardino de Campos    </option>
            <option>    Balbinos    </option>
            <option>    Bálsamo </option>
            <option>    Bananal </option>
            <option>    Barão de Antonina   </option>
            <option>    Bertioga    </option>
            <option>    Bilac   </option>
            <option>    Birigui </option>
            <option>    Biritibamirim   </option>
            <option>    Boa Esperança do Sul    </option>
            <option>    Bocaina </option>
            <option>    Bofete  </option>
            <option>    Boituva </option>
            <option>    Bom Jesus dos Perdões   </option>
            <option>    Bom Sucesso de Itararé  </option>
            <option>    Borá    </option>
            <option>    Boracéia    </option>
            <option>    Borborema   </option>
            <option>    Borebi  </option>
            <option>    Botucatu    </option>
            <option>    Bragança Paulista   </option>
            <option>    Braúna  </option>
            <option>    Brejo Alegre    </option>
            <option>    Brodowski   </option>
            <option>    Brotas  </option>
            <option>    Buri    </option>
            <option>    Buritama    </option>
            <option>    Buritizal   </option>
            <option>    Cabrália Paulista   </option>
            <option>    Cabreúva    </option>
            <option>    Cedral  </option>
            <option>    Cerqueira César </option>
            <option>    Cerquilho   </option>
            <option>    Cesário Lange   </option>
            <option>    Charqueada  </option>
            <option>    Chavantes   </option>
            <option>    Clementina  </option>
            <option>    Colina  </option>
            <option>    Colômbia    </option>
            <option>    Conchal </option>
            <option>    Conchas </option>
            <option>    Cordeirópolis   </option>
            <option>    Coroados    </option>
            <option>    Coronel Macedo  </option>
            <option>    Corumbataí  </option>
            <option>    Cosmópolis  </option>
            <option>    Caçapava    </option>
            <option>    Cachoeira Paulista  </option>
            <option>    Caconde </option>
            <option>    Cafelândia  </option>
            <option>    Caiabu  </option>
            <option>    Caieiras    </option>
            <option>    Caiuá   </option>
            <option>    Cajamar </option>
            <option>    Cajati  </option>
            <option>    Cajobi  </option>
            <option>    Cajuru  </option>
            <option>    Campina do Monte Alegre </option>
            <option>    Campinas    </option>
            <option>    Campo Limpo Paulista    </option>
            <option>    Campos do Jordão    </option>
            <option>    Campos Novos Paulista   </option>
            <option>    Cananéia    </option>
            <option>    Canas   </option>
            <option>    Cândido Mota    </option>
            <option>    Cândido Rodrigues   </option>
            <option>    Canitar </option>
            <option>    Capão Bonito    </option>
            <option>    Capela do Alto  </option>
            <option>    Capivari    </option>
            <option>    Caraguatatuba   </option>
            <option>    Carapicuíba </option>
            <option>    Cardoso </option>
            <option>    Casa Branca </option>
            <option>    Cássia dos Coqueiros    </option>
            <option>    Castilho    </option>
            <option>    Catanduva   </option>
            <option>    Catiguá </option>
            <option>    Cosmorama   </option>
            <option>    Cotia   </option>
            <option>    Cravinhos   </option>
            <option>    Cristais Paulista   </option>
            <option>    Cruzália    </option>
            <option>    Cruzeiro    </option>
            <option>    Cubatão </option>
            <option>    Cunha   </option>
            <option>    Descalvado  </option>
            <option>    Diadema </option>
            <option>    Dirce Reis  </option>
            <option>    Divinolândia    </option>
            <option>    Dobrada </option>
            <option>    Dois Córregos   </option>
            <option>    Dolcinópolis    </option>
            <option>    Dourado </option>
            <option>    Dracena </option>
            <option>    Duartina    </option>
            <option>    Dumont  </option>
            <option>    Echaporã    </option>
            <option>    Eldorado    </option>
            <option>    Elias Fausto    </option>
            <option>    Elisiário   </option>
            <option>    Embaúba </option>
            <option>    Embu    </option>
            <option>    Embu-Guaçu  </option>
            <option>    Emilianópolis   </option>
            <option>    Engenheiro Coelho   </option>
            <option>    Espírito Santo do Pinhal    </option>
            <option>    Espírito Santo do Turvo </option>
            <option>    Estiva Gerbi    </option>
            <option>    Estrela do Norte    </option>
            <option>    Estrela d’Oeste </option>
            <option>    Euclides da Cunha Paulista  </option>
            <option>    F[editar | editar código-fonte] </option>
            <option>    Fartura </option>
            <option>    Fernando Prestes    </option>
            <option>    Fernandópolis   </option>
            <option>    Fernão  </option>
            <option>    Ferraz de Vasconcelos   </option>
            <option>    Flora Rica  </option>
            <option>    Floreal </option>
            <option>    Flórida Paulista    </option>
            <option>    Florínea    </option>
            <option>    Franca  </option>
            <option>    Francisco Morato    </option>
            <option>    Franco da Rocha </option>
            <option>    Gabriel Monteiro    </option>
            <option>    Gália   </option>
            <option>    Garça   </option>
            <option>    Gastão Vidigal  </option>
            <option>    Gavião Peixoto  </option>
            <option>    General Salgado </option>
            <option>    Getulina    </option>
            <option>    Glicério    </option>
            <option>    Guaiçara    </option>
            <option>    Guaimbê </option>
            <option>    Guaíra  </option>
            <option>    Guapiaçu    </option>
            <option>    Guapiara    </option>
            <option>    Guará   </option>
            <option>    Guaraçaí    </option>
            <option>    Guaraci </option>
            <option>    Guarani d’Oeste </option>
            <option>    Guarantã    </option>
            <option>    Guararapes  </option>
            <option>    Guararema   </option>
            <option>    Guaratinguetá   </option>
            <option>    Guareí  </option>
            <option>    Guariba </option>
            <option>    Guarujá </option>
            <option>    Guarulhos   </option>
            <option>    Guatapará   </option>
            <option>    Guzolândia  </option>
            <option>    Herculândia </option>
            <option>    Holambra    </option>
            <option>    Hortolândia </option>
            <option>    Iacanga </option>
            <option>    Iacri   </option>
            <option>    Iaras   </option>
            <option>    Itaóca  </option>
            <option>    Itapecerica da Serra    </option>
            <option>    Itapetininga    </option>
            <option>    Itapeva </option>
            <option>    Itapevi </option>
            <option>    Itapira </option>
            <option>    Itapirapuã Paulista </option>
            <option>    Itápolis    </option>
            <option>    Itaporanga  </option>
            <option>    Itapuí  </option>
            <option>    Itapura </option>
            <option>    Itaquaquecetuba </option>
            <option>    Itararé </option>
            <option>    Itariri </option>
            <option>    Itatiba </option>
            <option>    Ibaté   </option>
            <option>    Ibirá   </option>
            <option>    Ibirarema   </option>
            <option>    Ibitinga    </option>
            <option>    Ibiúna  </option>
            <option>    Icém    </option>
            <option>    Iepê    </option>
            <option>    Igaraçu do Tietê    </option>
            <option>    Igarapava   </option>
            <option>    Igaratá </option>
            <option>    Iguape  </option>
            <option>    Ilha Comprida   </option>
            <option>    Ilha Solteira   </option>
            <option>    Ilhabela    </option>
            <option>    Indaiatuba  </option>
            <option>    Indiana </option>
            <option>    Indiaporã   </option>
            <option>    Inúbia Paulista </option>
            <option>    Ipaussu </option>
            <option>    Iperó   </option>
            <option>    Ipeúna  </option>
            <option>    Ipiguá  </option>
            <option>    Iporanga    </option>
            <option>    Ipuã    </option>
            <option>    Iracemápolis    </option>
            <option>    Irapuã  </option>
            <option>    Irapuru </option>
            <option>    Itaberá </option>
            <option>    Itaí    </option>
            <option>    Itajobi </option>
            <option>    Itaju   </option>
            <option>    Itanhaém    </option>
            <option>    Itatinga    </option>
            <option>    Itirapina   </option>
            <option>    Itirapuã    </option>
            <option>    Itobi   </option>
            <option>    Itu </option>
            <option>    Itupeva </option>
            <option>    Ituverava   </option>
            <option>    Jaborandi   </option>
            <option>    Jaboticabal </option>
            <option>    Jacareí </option>
            <option>    Jaci    </option>
            <option>    Jacupiranga </option>
            <option>    Jaguariúna  </option>
            <option>    Jales   </option>
            <option>    Jambeiro    </option>
            <option>    Jandira </option>
            <option>    Jardinópolis    </option>
            <option>    Jarinu  </option>
            <option>    Jaú </option>
            <option>    Jeriquara   </option>
            <option>    Joanópolis  </option>
            <option>    João Ramalho    </option>
            <option>    José Bonifácio  </option>
            <option>    Júlio Mesquita  </option>
            <option>    Jumirim </option>
            <option>    Jundiaí </option>
            <option>    Junqueirópolis  </option>
            <option>    Juquiá  </option>
            <option>    Juquitiba   </option>
            <option>    Lagoinha    </option>
            <option>    Laranjal Paulista   </option>
            <option>    Lavínia </option>
            <option>    Lavrinhas   </option>
            <option>    Leme    </option>
            <option>    Lençóis Paulista    </option>
            <option>    Limeira </option>
            <option>    Lindóia </option>
            <option>    Lins    </option>
            <option>    Lorena  </option>
            <option>    Lourdes </option>
            <option>    Louveira    </option>
            <option>    Lucélia </option>
            <option>    Lucianópolis    </option>
            <option>    Luís Antônio    </option>
            <option>    Luiziânia   </option>
            <option>    Lupércio    </option>
            <option>    Lutécia </option>
            <option>    Macatuba    </option>
            <option>    Macaubal    </option>
            <option>    Macedônia   </option>
            <option>    Monte Alegre do Sul </option>
            <option>    Monte Alto  </option>
            <option>    Monte Aprazível </option>
            <option>    Monte Azul Paulista </option>
            <option>    Monte Castelo   </option>
            <option>    Monte Mor   </option>
            <option>    Monteiro Lobato </option>
            <option>    Morro Agudo </option>
            <option>    Morungaba   </option>
            <option>    Motuca  </option>
            <option>    Murutinga do Sul    </option>
            <option>    Magda   </option>
            <option>    Mairinque   </option>
            <option>    Mairiporã   </option>
            <option>    Manduri </option>
            <option>    Marabá Paulista </option>
            <option>    Maracaí </option>
            <option>    Marapoama   </option>
            <option>    Mariápolis  </option>
            <option>    Marília </option>
            <option>    Marinópolis </option>
            <option>    Martinópolis    </option>
            <option>    Matão   </option>
            <option>    Mauá    </option>
            <option>    Mendonça    </option>
            <option>    Meridiano   </option>
            <option>    Mesópolis   </option>
            <option>    Miguelópolis    </option>
            <option>    Mineiros do Tietê   </option>
            <option>    Mira Estrela    </option>
            <option>    Miracatu    </option>
            <option>    Mirandópolis    </option>
            <option>    Mirante do Paranapanema </option>
            <option>    Mirassol    </option>
            <option>    Mirassolândia   </option>
            <option>    Mococa  </option>
            <option>    Mogi das Cruzes </option>
            <option>    Mogi Guaçu  </option>
            <option>    Mogi Mirim  </option>
            <option>    Mombuca </option>
            <option>    Monções </option>
            <option>    Mongaguá    </option>
            <option>    Nantes  </option>
            <option>    Narandiba   </option>
            <option>    Nova Granada    </option>
            <option>    Nova Guataporanga   </option>
            <option>    Nova Independência  </option>
            <option>    Nova Luzitânia  </option>
            <option>    Nova Odessa </option>
            <option>    Novais  </option>
            <option>    Novo Horizonte  </option>
            <option>    Nuporanga   </option>
            <option>    Natividade da Serra </option>
            <option>    Nazaré Paulista </option>
            <option>    Neves Paulista  </option>
            <option>    Nhandeara   </option>
            <option>    Nipoã   </option>
            <option>    Nova Aliança    </option>
            <option>    Nova Campina    </option>
            <option>    Nova Canaã Paulista </option>
            <option>    Nova Castilho   </option>
            <option>    Nova Europa </option>
            <option>    Ocauçu  </option>
            <option>    Óleo    </option>
            <option>    Orindiúva   </option>
            <option>    Orlândia    </option>
            <option>    Osasco  </option>
            <option>    Oscar Bressane  </option>
            <option>    Osvaldo Cruz    </option>
            <option>    Ourinhos    </option>
            <option>    Ouro Verde  </option>
            <option>    Ouroeste    </option>
            <option>    Olímpia </option>
            <option>    Onda Verde  </option>
            <option>    Oriente </option>
            <option>    Pacaembu    </option>
            <option>    Palestina   </option>
            <option>    Palmares Paulista   </option>
            <option>    Palmeira d’Oeste    </option>
            <option>    Palmital    </option>
            <option>    Panorama    </option>
            <option>    Paraguaçu Paulista  </option>
            <option>    Paraibuna   </option>
            <option>    Paraíso </option>
            <option>    Paranapanema    </option>
            <option>    Paranapuã   </option>
            <option>    Platina </option>
            <option>    Poá </option>
            <option>    Poloni  </option>
            <option>    Pompeia </option>
            <option>    Pongaí  </option>
            <option>    Pontal  </option>
            <option>    Pontalinda  </option>
            <option>    Pontes Gestal   </option>
            <option>    Populina    </option>
            <option>    Porangaba   </option>
            <option>    Porto Feliz </option>
            <option>    Porto Ferreira  </option>
            <option>    Potim   </option>
            <option>    Potirendaba </option>
            <option>    Pracinha    </option>
            <option>    Parapuã </option>
            <option>    Pardinho    </option>
            <option>    Pariquera-Açu   </option>
            <option>    Parisi  </option>
            <option>    Patrocínio Paulista </option>
            <option>    Paulicéia   </option>
            <option>    Paulínia    </option>
            <option>    Paulistânia </option>
            <option>    Paulo de Faria  </option>
            <option>    Pederneiras </option>
            <option>    Pedra Bela  </option>
            <option>    Pedranópolis    </option>
            <option>    Pedregulho  </option>
            <option>    Pedreira    </option>
            <option>    Pedrinhas Paulista  </option>
            <option>    Pedro de Toledo </option>
            <option>    Penápolis   </option>
            <option>    Pereira Barreto </option>
            <option>    Pereiras    </option>
            <option>    Peruíbe </option>
            <option>    Piacatu </option>
            <option>    Piedade </option>
            <option>    Pilar do Sul    </option>
            <option>    Pindamonhangaba </option>
            <option>    Pindorama   </option>
            <option>    Pinhalzinho </option>
            <option>    Piquerobi   </option>
            <option>    Piquete </option>
            <option>    Piracaia    </option>
            <option>    Piracicaba  </option>
            <option>    Piraju  </option>
            <option>    Pirajuí </option>
            <option>    Pirangi </option>
            <option>    Pirapora do Bom Jesus   </option>
            <option>    Pirapozinho </option>
            <option>    Pirassununga    </option>
            <option>    Piratininga </option>
            <option>    Pitangueiras    </option>
            <option>    Planalto    </option>
            <option>    Quadra  </option>
            <option>    Quatá   </option>
            <option>    Queiroz </option>
            <option>    Queluz  </option>
            <option>    Quintana    </option>
            <option>    Pradópolis  </option>
            <option>    Praia Grande    </option>
            <option>    Pratânia    </option>
            <option>    Presidente Alves    </option>
            <option>    Presidente Bernardes    </option>
            <option>    Presidente Epitácio </option>
            <option>    Presidente Prudente </option>
            <option>    Presidente Venceslau    </option>
            <option>    Promissão   </option>
            <option>    Rafard  </option>
            <option>    Rancharia   </option>
            <option>    Ribeirão Corrente   </option>
            <option>    Ribeirão do Sul </option>
            <option>    Ribeirão dos Índios </option>
            <option>    Ribeirão Grande </option>
            <option>    Ribeirão Pires  </option>
            <option>    Ribeirão Preto  </option>
            <option>    Rifaina </option>
            <option>    Rincão  </option>
            <option>    Rinópolis   </option>
            <option>    Rio Claro   </option>
            <option>    Redenção da Serra   </option>
            <option>    Regente Feijó   </option>
            <option>    Reginópolis </option>
            <option>    Registro    </option>
            <option>    Restinga    </option>
            <option>    Ribeira </option>
            <option>    Ribeirão Bonito </option>
            <option>    Ribeirão Branco </option>
            <option>    Rio das Pedras  </option>
            <option>    Rio Grande da Serra </option>
            <option>    Riolândia   </option>
            <option>    Riversul    </option>
            <option>    Rosana  </option>
            <option>    Roseira </option>
            <option>    Rubiácea    </option>
            <option>    Rubinéia    </option>
            <option>    Sabino  </option>
            <option>    Sagres  </option>
            <option>    Sales   </option>
            <option>    Sales Oliveira  </option>
            <option>    Salesópolis </option>
            <option>    Salmourão   </option>
            <option>    Saltinho    </option>
            <option>    Salto   </option>
            <option>    Salto de Pirapora   </option>
            <option>    Salto Grande    </option>
            <option>    Serra Negra </option>
            <option>    Serrana </option>
            <option>    Sertãozinho </option>
            <option>    Sete Barras </option>
            <option>    Severínia   </option>
            <option>    Silveiras   </option>
            <option>    Socorro </option>
            <option>    Sorocaba    </option>
            <option>    Sud Mennucci    </option>
            <option>    Sumaré  </option>
            <option>    Suzanápolis </option>
            <option>    Suzano  </option>
            <option>    Sandovalina </option>
            <option>    Santa Adélia    </option>
            <option>    Santa Albertina </option>
            <option>    Santa Bárbara d’Oeste   </option>
            <option>    Santa Branca    </option>
            <option>    Santa Clara d’Oeste </option>
            <option>    Santa Cruz da Conceição </option>
            <option>    Santa Cruz da Esperança </option>
            <option>    Santa Cruz das Palmeiras    </option>
            <option>    Santa Cruz do Rio Pardo </option>
            <option>    Santa Ernestina </option>
            <option>    Santa Fé do Sul </option>
            <option>    Santa Gertrudes </option>
            <option>    Santa Isabel    </option>
            <option>    Santa Lúcia </option>
            <option>    Santa Maria da Serra    </option>
            <option>    Santa Mercedes  </option>
            <option>    Santa Rita do Passa-Quatro  </option>
            <option>    Santa Rita d’Oeste  </option>
            <option>    Santa Rosa de Viterbo   </option>
            <option>    Santa Salete    </option>
            <option>    Santana da Ponte Pensa  </option>
            <option>    Santana de Parnaíba </option>
            <option>    Santo Anastácio </option>
            <option>    Santo André </option>
            <option>    Santo Antônio da Alegria    </option>
            <option>    Santo Antônio de Posse  </option>
            <option>    Santo Antônio do Aracanguá  </option>
            <option>    Santo Antônio do Jardim </option>
            <option>    Santo Antônio do Pinhal </option>
            <option>    Santo Expedito  </option>
            <option>    Santópolis do Aguapeí   </option>
            <option>    Santos  </option>
            <option>    São Bento do Sapucaí    </option>
            <option>    São Bernardo do Campo   </option>
            <option>    São Caetano do Sul  </option>
            <option>    São Carlos  </option>
            <option>    São Francisco   </option>
            <option>    São João da Boa Vista   </option>
            <option>    São João das Duas Pontes    </option>
            <option>    São João de Iracema </option>
            <option>    São João do Pau d’Alho  </option>
            <option>    São Joaquim da Barra    </option>
            <option>    São José da Bela Vista  </option>
            <option>    São José do Barreiro    </option>
            <option>    São José do Rio Pardo   </option>
            <option>    São José do Rio Preto   </option>
            <option>    São José dos Campos </option>
            <option>    São Lourenço da Serra   </option>
            <option>    São Luiz do Paraitinga  </option>
            <option>    São Manuel  </option>
            <option>    São Miguel Arcanjo  </option>
            <option>    São Paulo   </option>
            <option>    São Pedro   </option>
            <option>    São Pedro do Turvo  </option>
            <option>    São Roque   </option>
            <option>    São Sebastião   </option>
            <option>    São Sebastião da Grama  </option>
            <option>    São Simão   </option>
            <option>    São Vicente </option>
            <option>    Sarapuí </option>
            <option>    Sarutaiá    </option>
            <option>    Sebastianópolis do Sul  </option>
            <option>    Serra Azul  </option>
            <option>    Tabapuã </option>
            <option>    Tabatinga   </option>
            <option>    Taboão da Serra </option>
            <option>    Taciba  </option>
            <option>    Trabiju </option>
            <option>    Tremembé    </option>
            <option>    Três Fronteiras </option>
            <option>    Tuiuti  </option>
            <option>    Tupã    </option>
            <option>    Tupi Paulista   </option>
            <option>    Turiúba </option>
            <option>    Turmalina   </option>
            <option>    Taguaí  </option>
            <option>    Taiaçu  </option>
            <option>    Taiúva  </option>
            <option>    Tambaú  </option>
            <option>    Tanabi  </option>
            <option>    Tapiraí </option>
            <option>    Tapiratiba  </option>
            <option>    Taquaral    </option>
            <option>    Taquaritinga    </option>
            <option>    Taquarituba </option>
            <option>    Taquarivaí  </option>
            <option>    Tarabai </option>
            <option>    Tarumã  </option>
            <option>    Tatuí   </option>
            <option>    Taubaté </option>
            <option>    Tejupá  </option>
            <option>    Teodoro Sampaio </option>
            <option>    Terra Roxa  </option>
            <option>    Tietê   </option>
            <option>    Timbo   </option>
            <option>    Timburi </option>
            <option>    Torre de Pedra  </option>
            <option>    Torrinha    </option>
            <option>    Ubarana </option>
            <option>    Ubatuba </option>
            <option>    Ubirajara   </option>
            <option>    Uchoa   </option>
            <option>    União Paulista  </option>
            <option>    Urânia  </option>
            <option>    Uru </option>
            <option>    Urupês  </option>
            <option>    Valentim Gentil </option>
            <option>    Valinhos    </option>
            <option>    Vera Cruz   </option>
            <option>    Vinhedo </option>
            <option>    Viradouro   </option>
            <option>    Vista Alegre do Alto    </option>
            <option>    Vitória Brasil  </option>
            <option>    Votorantim  </option>
            <option>    Votuporanga </option>
            <option>    Valparaíso  </option>
            <option>    Vargem  </option>
            <option>    Vargem Grande do Sul    </option>
            <option>    Vargem Grande Paulista  </option>
            <option>    Várzea Paulista </option>
            <option>    Zacarias    </option>
        </select>
      </div>
      <div class="form-group col-md-1">
        <label for="exampleInputEmail1">UF * :</label>
        <select class="form-control">
            <option>    AC  </option>
            <option>    AL  </option>
            <option>    AP  </option>
            <option>    AM  </option>
            <option>    BA  </option>
            <option>    CE  </option>
            <option>    DF  </option>
            <option>    ES  </option>
            <option>    GO  </option>
            <option>    MA  </option>
            <option>    MT  </option>
            <option>    MS  </option>
            <option>    MG  </option>
            <option>    PA  </option>
            <option>    PB  </option>
            <option>    PR  </option>
            <option>    PE  </option>
            <option>    PI  </option>
            <option>    RJ  </option>
            <option>    RN  </option>
            <option>    RS  </option>
            <option>    RO  </option>
            <option>    RR  </option>
            <option>    SC  </option>
            <option>    SP  </option>
            <option>    SE  </option>
            <option>    TO  </option>
      </select>
      </div>
      <div class="form-group col-md-2">
        <label for="exampleInputEmail1">Telefone Fixo :</label>
        <input type="text" class="form-control telefone" placeholder="Ex.: (00) 0000-0000">
      </div>
      <div class="form-group col-md-2">
        <label for="exampleInputEmail1">Celular * :</label>
        <input type="text" class="form-control celular" placeholder="Ex.: (00) 0 0000-0000">
      </div>
    </div>

    <div class="row">
     <div class="form-group col-md-2">
        <label for="exampleInputEmail1">Estado Civil:</label>
        <select class="form-control">
          <option></option>
          <option>Solteiro(a)</option>
          <option>Casado(a)</option>
          <option>Divorciado(a)</option>
        </select>
      </div>
      <div class="form-group col-md-5">
        <label for="exampleInputEmail1">Profissão:</label>
        <input type="text" class="form-control" placeholder="Digite a profissão do paciente">
      </div>
    </div>

    <div class="row" align="center">
      <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="template.html" class="btn btn-default">Cancelar</a>
      </div>
    </div>

  </form>
 </div>

</div>
</div>
</body>
<script type="text/javascript">
      $(document).ready(function(){
      $('.data').mask('11/11/1111');
      $('.tempo').mask('00:00:00');
      $('.date_time').mask('99/99/9999 00:00:00');
      $('.cep').mask('99999-999');
      $('.telefone').mask('(00) 0000-0000');
      $('.celular').mask('(00) 0 0000-0000');
      $('.cpf').mask('000.000.000-00');
      $('.rg').mask('00.000.000-0');
    });
</script>
</html>      