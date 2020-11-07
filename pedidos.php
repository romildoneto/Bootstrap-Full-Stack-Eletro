
<?php

$servername = "localhost";
$username =  "root";
$password = "";
$database = "fseletro";

$conn = mysqli_connect($servername, $username, $password, $database);

if(isset($_POST['nomeCliente']) && isset($_POST['endereco']) && isset($_POST['telefone']) && isset($_POST['nomeProduto'])
 && isset($_POST['valorUnitario']) && isset($_POST['quantidade']) && isset($_POST['valorTotal'])){

  //echo "sucesso";

$nome_cliente = $_POST['nomeCliente'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$nome_produto = $_POST['nomeProduto'];
$valor_unitario = $_POST['valorUnitario'];
$quantidade = $_POST['quantidade'];
$valor_total = $_POST['valorTotal'];

$sql = "insert into pedidos (nomeCliente, endereco, telefone, nomeProduto, valorUnitario, quantidade, valorTotal) 
values ('$nome_cliente','$endereco','$telefone','$nome_produto','$valor_unitario', '$quantidade', '$valor_total')";
$result = $conn->query($sql);
}
//echo $nome_cliente,$endereco;
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

    <!-- Inicio do Menu-->
    <br> 

<form method ='POST' name = 'pedidos' action = "">
<form method="post" action="">

    <h1 id="tituloPedido">Faça seu pedido já:</h1>
        <div class="inputPedido">
        <h4 onmouseover="alterarcor(this)" onmouseout="alterarcor(this)"> Meu nome:</h4>
        <input type="text" name= "nomeCliente"class="form-control w-130 p-3" placeholder="digite seu nome" class="inputform" > <br>
        
        <h4 onmouseover="alterarcor(this)" onmouseout="alterarcor(this)"> Endereço:</h4>
        <input type="text" name= "endereco" class="form-control w-130 p-3"placeholder="digite seu endereço" class="inputform" > <br>
       
        <h4 onmouseover="alterarcor(this)" onmouseout="alterarcor(this)"> Telefone:</h4>
        <input type="text" name= "telefone"class="form-control w-130 p-3" placeholder="Digite seu telefone" class=" inputform"> <br>
        
        <h4 onmouseover="alterarcor(this)" onmouseout="alterarcor(this)"> Produto:</h4>
        <input type="text" name= "nomeProduto" class="form-control w-130 p-3"placeholder="digite seu produto" class="inputform" > <br>
        
        <h4 onmouseover="alterarcor(this)" onmouseout="alterarcor(this)"> R$ Inicial:</h4>
        <input type="text" name= "valorUnitario"class="form-control w-130 p-3" placeholder="digite o valor" class="inputform" > <br>
       
        <h4 onmouseover="alterarcor(this)" onmouseout="alterarcor(this)">Quantidade:</h4>
        <input type="text" name="quantidade" class="form-control w-130 p-3"placeholder="digite a quantidade" class="inputform" > <br>
       
        <h4 onmouseover="alterarcor(this)" onmouseout="alterar]]cor(this)">R$ Total:</h4>
        <input type="text" name="valorTotal" number="numero"class="form-control w-130 p-3" placeholder="digite valor total" class="inputform"> <br>
       
        <input type="submit" name="submit" value="ENVIAR!" class="btn btn-danger m-0  form-control w-130 p-3 text-align:center"  class=" inputEnviar">
 </form>
 
<br><br>
    <footer class="rodape text-align:center">
       <div class="jumbotron">
        <p onmouseover="alterarcor(this)" onmouseout="alterarcor(this)" class="fcartao"><b>Formas de pagamento:</b></p>
        <img src="imagens/imagem3.png" alt="imagem3">
        <p>&copy;Recode</p>
        </div>
    </footer>
   
   
   
    <script src="./teste.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script

</body>


</html>