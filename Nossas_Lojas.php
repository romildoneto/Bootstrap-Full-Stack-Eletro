<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Nossas lojas - Full Stack Eletro</title>
  <link rel="stylesheet" href="./css/estilo.css">
  
</head>

<body>
  <!-- Inicio do inicio-->

  <?php
include_once("menu.html");

?>
  <br> <br>

  <!-- Inicio do meio-->

  <h2 onmouseover="changecolor(this)" onmouseout="changecolor(this)" id="tituloh2">Nossos endereços </h2>

  <br> <br>
  <br> <br>

  <section class="inicioendereco">

    <div class="enderecoloja">
      <h3 onmouseover="changecolor(this)" onmouseout="changecolor(this)" id="nomeestados">Rio de janeiro</h3>
      <p onmouseover="changecolor(this)" onmouseout="changecolor(this)">Avenida Presidente Vargas, 5000</p>
      <p onmouseover="changecolor(this)" onmouseout="changecolor(this)">10ºandar, 349</p>
      <p onmouseover="changecolor(this)" onmouseout="changecolor(this)"> Centro</p>
      <p onmouseover="changecolor(this)" onmouseout="changecolor(this)">(11) 3333-3333</p>
    </div>


    <div class="enderecoloja">
      <h3 onmouseover="changecolor(this)" onmouseout="changecolor(this)" id="nomeestados">São paulo</h3>
      <p onmouseover="changecolor(this)" onmouseout="changecolor(this)">Avenida paulista, 985</p>
      <p onmouseover="changecolor(this)" onmouseout="changecolor(this)"> 3ºandar ,200 </p>
      <p onmouseover="changecolor(this)" onmouseout="changecolor(this)"> Jardins </p>
      <p onmouseover="changecolor(this)" onmouseout="changecolor(this)">(11) 4444-4444</p>
    </div>



    <div class="enderecoloja">
      <h3 onmouseover="changecolor(this)" onmouseout="changecolor(this)" id="nomeestados">Santa Catarina</h3>
      <p onmouseover="changecolor(this)" onmouseout="changecolor(this)">Rua Major Avila, 370</p>
      <p onmouseover="changecolor(this)" onmouseout="changecolor(this)"> 4ºandar ,345 </p>
      <p onmouseover="changecolor(this)" onmouseout="changecolor(this)"> Sabará </p>
      <p onmouseover="changecolor(this)" onmouseout="changecolor(this)">(11) 6887-4658</p>
    </div>

  </section>

  <br> <br> <br>
  <br> <br> <br>
  <br> <br> <br>
  <br> <br> <br>

  <!-- fim -->


  <footer class="rodape">
    <p onmouseover="changecolor(this)" onmouseout="changecolor(this)" class="fcartao"><b>Formas de pagamento:</b></p>
    <br><br><br><br>

    <img src="imagens/imagem3.png" alt="imagem3"><br>
    <p>&copy;Recode</p>
  </footer>


  <script src="./javaScript/funcoes.js"></script>
</body>


</html>