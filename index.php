<?php
require "Classes/Connect.php";
$conexao = new Connect('localhost', 'senhas', 'vinicius', 'vs');
if (isset($_POST['nome'])) {
  $link = addslashes($_POST['link']);
  $nome = addslashes($_POST['nome']);
  $login = addslashes($_POST['login']);
  $senha = addslashes($_POST['senha']);
  $categoria = addslashes($_POST ['ct_id']);

  $conexao->query("INSERT INTO acesso SET link = '$link',nome='$nome',login='$login', senha='$senha', ct_id='$categoria'");

}

if(isset($_POST['nome_empresas'])) {
  $nome_emp = addslashes($_POST['nome_empresas']);
  $link_emp = addslashes($_POST['link_empresas']);
  $senha_emp = addslashes($_POST['senha_empresas']);
  $conexao->query("INSERT INTO empresas SET nome = '$nome_emp',link = '$link_emp',senha='$senha_emp'");
}

if(isset($_POST['nome_pessoas'])) {
  $nome_pes = addslashes($_POST['nome_pessoas']);
  $telefone_pes = addslashes($_POST['telefone_pessoas']);
  $conexao->query("INSERT INTO pessoas SET nome = '$nome_pes',telefone = '$telefone_pes'");

}




?>

<!DOCTYPE html>
<html lang="pr-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/uikit.css"/>
  <link rel="stylesheet" href="css/style.css"/>
  <script src="js/uikit.min.js"></script>
  <script src="js/uikit-icons.min.js"></script>

  <!-- Optional theme -->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

  <title>Senhas</title>

</head>
<body>

<header>

  <div class="header uk-flex uk-flex-center" uk-grid>
    <div class="">
      <h1><span class="fas fa-cogs"></span></h1>
    </div>
    <div class=" ">
      <h2>F.A.S</h2>
    </div>

  </div>



</header>

<section>



    <div class="uk-position-relative uk-margin-medium">

        <ul class="uk-child-width-expand" uk-tab>
          <li class="uk-active"><a href="#"><span uk-icon="icon: cog; ratio: 1.5"></span> Ferramentas</a></li>
          <li class="teste"><a href="#"><span uk-icon="icon:receiver; ratio: 1.5"></span> Clientes</a></li>

        </ul>

      <!--<ul uk-tab="" class="uk-tab">
        <li aria-expanded="true" class="uk-active"><a href="#">Preview</a></li>
        <li aria-expanded="false" class=""><a href="#">Markup</a></li>
      </ul>-->

      <div class="uk-switcher uk-margin">
        <div class="uk-active">
          <?php include_once './includes/_senha.php'?>
<!--          --><?php //include_once 'testes.html'?>
        </div>

        <div class="teste">
          <?php  include_once './includes/_cliente.php'?>
        </div>




</section>
</body>
</html>