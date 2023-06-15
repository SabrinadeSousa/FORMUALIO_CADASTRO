<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title>Carousel Template · Bootstrap v5.3</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.mim.css" type="test/css">
    <script type="text/javascript" src="js/jquery-3.7.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">    
    <?php
    //Recebendo dados pessoais//
    $primeiro_nome = $_POST["primeiro_nome"];
    $sobrenome = $_POST["sobrenome"];
    $cpf = $_POST["cpf"];
    $data = $_POST["data"];
    $sexo = $_POST["sexo"];

    //Recebendo contatos//
    $tel_1 = $_POST["tel_1"];
    $tel_2 = $_POST["tel_2"];
    $email = $_POST["email"];
    
    //Recebendo endereço//
    $cep = $_POST["cep"];
    $uf = $_POST["uf"];
    $cidade = $_POST["cidade"];
    $logradouro = $_POST["logradouro"];
    $bairro = $_POST["bairro"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];

    ?>
    
<main>

    <div class="py-1 text-center">
      <h2>Informações De Cadastro Realizado</h2>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="text-center">
        <h5 class="featurette-heading fw-normal lh-1" id="nome"> 

          <!--Dados Pessoais-->
          <h3><p class="lead">Dados Pessoais</p></h3>
            <p class="lead">Nome:<?php echo $primeiro_nome?></p>
            <p class="lead">Sobrenome:<?php echo $sobrenome?></p>
            <p class="lead">CPF:<?php echo $cpf?></p>
            <p class="lead">Data de Nascimento:<?php echo $data?>
            <p class="lead">Sexo:<?php echo $sexo?></p>
            <hr>
            <!--Contato-->
            <h3><p class="lead">Contato</p></h3>
            <p class="lead"> Telefone 1:<?php echo $tel_1?></p>
            <p class="lead">Telefone 2:<?php echo $tel_2?></p>
            <p class="lead">Email:<?php echo $email?></p> 
            <hr>
            <!--Endereço-->
            <h3><p class="lead">Endereço</p></h3> 
              <p class="lead">CEP:<?php echo $cep?></p> 
              <p class="lead">UF:<?php echo $uf?></p> 
              <p class="lead">Cidade:<?php echo $cidade?></p> 
              <p class="lead">Logradouro:<?php echo $logradouro?></p> 
              <p class="lead">Bairro:<?php echo $bairro?></p> 
              <p class="lead">Numero:<?php echo $numero?></p>
              <p class="lead">Complemento:<?php echo $complemento?></p>
            <hr>
        </h5>
      </div>
    </div>

  <!-- FOOTER -->
  <footer class="container">
    <p class="text-center">&copy; 2023 Sabrina de Sousa</p>
  </footer>
</main>
</body>
</html>