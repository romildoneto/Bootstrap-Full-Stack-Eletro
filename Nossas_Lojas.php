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
  <!-- Inicio do inicio-->

  <?php
include_once("menu.html");

?>
  <br> <br>

  <!-- Inicio do meio-->
<header  style="text-align:left;margin-left:3%;">
  <h2 onmouseover="changecolor(this)" onmouseout="changecolor(this)">Nossos endereços </h2>
</header>
  <br> <br>


  <table class="table bg-info"style="text-align:center;">
        <thead>
            <tr>
                <th onmouseover="changecolor(this)" onmouseout="changecolor(this)" style="font-size:20px;" >Rio de Janeiro</th>
                <th onmouseover="changecolor(this)" onmouseout="changecolor(this)" style="font-size:20px;"> São Paulo</th>
                <th onmouseover="changecolor(this)" onmouseout="changecolor(this)" style="font-size:20px;">Santa Catarina</th>
            </tr>
            <tr>
                <th onmouseover="changecolor(this)" onmouseout="changecolor(this)">Faria lima, 100</th>
                <th onmouseover="changecolor(this)" onmouseout="changecolor(this)">Avenida Paulista, 985</th>
                <th onmouseover="changecolor(this)" onmouseout="changecolor(this)">Rua antonio furtado, 46 &Aacute;vila, 370</th>
            </tr>
            <tr>
                <th onmouseover="changecolor(this)" onmouseout="changecolor(this)">10 &ordm; andar</th>
                <th onmouseover="changecolor(this)" onmouseout="changecolor(this)">3 &ordm; andar</th>
                <th onmouseover="changecolor(this)" onmouseout="changecolor(this)">Vila Mariana</th>
            </tr>
            <tr>
                <th onmouseover="changecolor(this)" onmouseout="changecolor(this)">Centro</th>
                <th onmouseover="changecolor(this)" onmouseout="changecolor(this)">Jardins</th>
                <th onmouseover="changecolor(this)" onmouseout="changecolor(this)">Zona leste</th>
            </tr>
            <tr>
                <th onmouseover="changecolor(this)" onmouseout="changecolor(this)">(21) 1111-1111</th>
                <th onmouseover="changecolor(this)" onmouseout="changecolor(this)">(21) 2222-2222</th>
                <th onmouseover="changecolor(this)" onmouseout="changecolor(this)">(47) 3333-3333</th>
                </th>
            </tr>
        </thead>
      </table>
   
  

  <!-- fim -->
  <div class="jumbotron">
  <div class="container-center" style="text-align:center;">
   <footer>
       <p class="text-danger" onmouseover="changecolor(this)" onmouseout="changecolor(this)"><b>Formas de pagamento:</b></p>
       
       <img id="cartcredito" src="imagens/imagem3.png" alt="imagem3" onclick="ftcredito(this)"><br>
       <p>&copy;Recode</p>
   </footer>
</div>
   

</div>
  
  <script src="./teste.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script
</body>
</html>