
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
    <title>Pedido-Full Stack Eletro</title>
    <link rel="stylesheet" href="./css/estilo.css">
    
</head>

<body>
    <!-- Inicio do Menu-->

    <?php
include_once("menu.html");
?>

    <!-- Inicio do Menu-->
    <br> 

<form method = 'POST' name = 'pedidos' action = "" >

    <h1 id="tituloPedido">Faça seu pedido já:</h1>
        <div class="inputPedido">
        <h4 onmouseover="alterarcor(this)" onmouseout="alterarcor(this)"> Meu nome:</h4>
        <input type="text" name= "nomeCliente" placeholder="digite seu nome" class="inputform" > <br>
        
        <h4 onmouseover="alterarcor(this)" onmouseout="alterarcor(this)"> Endereço:</h4>
        <input type="text" name= "endereco" placeholder="digite seu endereço" class="inputform" > <br>
       
        <h4 onmouseover="alterarcor(this)" onmouseout="alterarcor(this)"> Telefone:</h4>
        <input type="text" name= "telefone" placeholder="Digite seu telefone" class=" inputform"> <br>
        
        <h4 onmouseover="alterarcor(this)" onmouseout="alterarcor(this)"> Produto:</h4>
        <input type="text" name= "nomeProduto" placeholder="digite seu produto" class="inputform" > <br>
        
        <h4 onmouseover="alterarcor(this)" onmouseout="alterarcor(this)"> R$ Inicial:</h4>
        <input type="text" name= "valorUnitario" placeholder="digite o valor" class="inputform" > <br>
       
        <h4 onmouseover="alterarcor(this)" onmouseout="alterarcor(this)">Quantidade:</h4>
        <input type="text" name="quantidade" placeholder="digite a quantidade" class="inputform" > <br>
       
        <h4 onmouseover="alterarcor(this)" onmouseout="alterar]]cor(this)">R$ Total:</h4>
        <input type="text" name="valorTotal" number="numero" placeholder="digite valor total" class="inputform" > <br><br>
       
        <input type="submit" name="submit" value="ENVIAR!" class=" inputEnviar">
 </form>
 
    <footer class="rodape">
        <p onmouseover="alterarcor(this)" onmouseout="alterarcor(this)" class="fcartao"><b>Formas de pagamento:</b></p>
        <br><br>
        <img src="imagens/imagem3.png" alt="imagem3">
        <p>&copy;Recode</p>
    </footer>
    <script src="./javaScript/funcoes.js"></script>
</body>


</html>