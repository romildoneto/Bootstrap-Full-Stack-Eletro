<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Stack Eletro</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
</head>

<body>
    <!-- Inicio do Menu-->
<?php
include_once("menu.html");

?>

    <br> <br><br>
 
    <div class="container-fluid">
        <div class="jumbotron bg-gray">
        <h2 class="display-4"onmouseover="changecolor(this)">Seja bem vindo(a)</h2>
        <p class="lead"> Aqui em nossa loja programador tem desconto!</p>
    
    </div>
           
           <br> <br><br>

       
   <div class="container-center" style="text-align:center;">
    <footer>
        <p class="text-pramary" onmouseover="changecolor(this)" onmouseout="changecolor(this)"><b>Formas de pagamento:</b></p>
      
        <img id="cartcredito" src="imagens/imagem3.png" alt="imagem3" onclick="ftcredito(this)"><br>
        <p>&copy;Recode</p>
    </footer>
</div>

    <script src="./teste.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script

</body>
</html>
