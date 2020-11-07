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

<header>
  <div class="container-fluir">
  <h1 class="cabecalhoproduto">Produto</h1>
</header>

<div Class="categorias">
  <h3 style="font-size:20px">Categoria </h3>
<ul>
    <li onmouseover="changecolor(this)" onmouseout="changecolor(this)" onclick="exibir_todos()">todos (12)</li>
    <li onmouseover="changecolor(this)" onmouseout="changecolor(this)" onclick="exibir_categoria('geladeira')"> Geladeira (3)</li>
    <li onmouseover="changecolor(this)" onmouseout="changecolor(this)" onclick="exibir_categoria('fogao')">Fogões (2)</li>
    <li onmouseover="changecolor(this)" onmouseout="changecolor(this)" onclick="exibir_categoria('microondas')">Microondas (3)</li>
    <li onmouseover="changecolor(this)" onmouseout="changecolor(this)" onclick="exibir_categoria('lavadouraderoupa')">Lavadoras de roupas (2)</li>
    <li onmouseover="changecolor(this)" onmouseout="changecolor(this)" onclick="exibir_categoria('lavaloucas')">Lava-louças (2)</li>
 </ul>
</div>
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
  
  
    <script src="./teste.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script
</body>
</html>