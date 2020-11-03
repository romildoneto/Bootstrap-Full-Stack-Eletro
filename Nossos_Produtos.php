<?php

  $servername ="localhost";
  $username = "root";
  $password = "";
  $database = "fseletro";
  // criando conexão
 $conn = mysqli_connect($servername,$username,$password,$database);

  // verificação a conexão
  if (!$conn){
    die( "A conexão ao BD falhou: " . mysqli_connect_error());
  }
?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Produto -Full Stack Eletro</title>
  <link rel="stylesheet" href="./css/estilo.css">

</head>

<body>
  <!-- Inicio do Menu-->
  <?php
include_once("menu.html");
?>

  <h1 class="cabecalhoproduto">Produto</h1>


  <div Class="categorias">
    <h3>Categoria </h3>
  <ul>
      <li onmouseover="changecolor(this)" onmouseout="changecolor(this)" onclick="exibir_todos()">todos (12)</li>
      <li onmouseover="changecolor(this)" onmouseout="changecolor(this)" onclick="exibir_categoria('geladeira')"> Geladeira (3)</li>
      <li onmouseover="changecolor(this)" onmouseout="changecolor(this)" onclick="exibir_categoria('fogao')">Fogões (2)</li>
      <li onmouseover="changecolor(this)" onmouseout="changecolor(this)" onclick="exibir_categoria('microondas')">Microondas (3)</li>
      <li onmouseover="changecolor(this)" onmouseout="changecolor(this)" onclick="exibir_categoria('lavadouraderoupa')">Lavadoras de roupas (2)</li>
      <li onmouseover="changecolor(this)" onmouseout="changecolor(this)" onclick="exibir_categoria('lavaloucas')">Lava-louças (2)</li>
   </ul>
  </div>



 <div class="produtos">

<?php
    $sql = "select * from produto";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
      while($rows = $result->fetch_assoc()){
    
?>

    <div class="box_produto" id="box_<?php echo $rows["categoria"];?>" style="display:inline-block">
      <img src="<?php echo $rows["imagem"];?>" width="120px" onclick="imagem(this)"><br>
      <p class="descrição"><?php echo $rows["descricao"]; ?></p><hr>
      <p class="descrição"><strike>R$ <?php echo $rows["precoinicial"]; ?></strike></p>
      <p class="preço">R$ <?php echo $rows["precofinal"]; ?></p>
    </div>

<?php
    }
  }else{
    echo "nenhum produto cadastrado!";
  }
?>

  <br><br><br><br><br>
  <footer class="rodape">
    <p onmouseover="changecolor(this)" onmouseout="changecolor(this)" class="fcartao"><b>Formas de pagamento:</b></p>
    <br><br><br><br>

    <img src="imagens/imagem3.png" alt="imagem3"><br>
    <p>&copy;Recode</p>
  </footer>
   <script src="teste.js"></script>  
  
<!-- <script src="./js/script.js"></script>  -->
</body>

</html>