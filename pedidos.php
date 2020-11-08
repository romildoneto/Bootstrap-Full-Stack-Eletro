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



<div class="container">
<div class="row">
<div class="col-6">

    <h1 id="tituloPedido">Faça seu pedido</h1>
    <div class="inputPedido">

    <form method ='POST' name = 'pedidos' action = "">
    <form method="post" action="">
        <div> 
           <label for="Nome" onmouseover="alterarcor(this)" onmouseout="alterarcor(this)">Nome</label>
           <input class="form-control"type="tesxt" name="nomeCliente"id="Nome" placeholder="digite seu nome" class="inputform" > <br>
        </div> 

         <div>
           <label for="telefone" onmouseover="alterarcor(this)" onmouseout="alterarcor(this)">Telefone</label>
           <input class="form-control"type="tesxt" name="telefone"id="Nome" placeholder="digite seu telefone" class="inputform" > <br>
        </div> 

         <div>
           <label for="produto" onmouseover="alterarcor(this)" onmouseout="alterarcor(this)">Produto</label>
           <input class="form-control"type="tesxt" name="nomeCliente"id="produto" placeholder="digite seu produto" class="inputform" > <br>
        </div> 

        <div>
           <label for="R$ inicial" onmouseover="alterarcor(this)" onmouseout="alterarcor(this)">R$ inicial</label>
           <input class="form-control"type="tesxt" name="valorUnitario"id="Nome" placeholder="digite valor Unitário" class="inputform" > <br>
        </div>

        <div>
           <label for="Quantidade" onmouseover="alterarcor(this)" onmouseout="alterarcor(this)">Quantitade</label>
           <input class="form-control"type="tesxt" name="quantidade"id="Nome" placeholder="digite a quantidade" class="inputform" > <br>
        </div>

        <div>
           <label for="R$ Total" onmouseover="alterarcor(this)" onmouseout="alterarcor(this)">R$ Total</label>
           <input class="form-control"type="tesxt" name="valorTotal"id="Nome" placeholder="digite valor total" class="inputform" > <br>
        </div>
       <div class="form-group text-center">
           <buntton type="submit" name="submit" class="btn btn-primary"> Enviar</button>
        </div>
    </div>
</form>
</div>
</div>
 </div> 


    <footer class="rodape text-align:center">
       <div class="jumbotron">
        <p onmouseover="alterarcor(this)" onmouseout="alterarcor(this)" class="fcartao"><b>Formas de pagamento:</b></p>
        <img src="imagens/imagem3.png" alt="imagem3">
        <p onmouseover="alterarcor(this)" onmouseout="alterarcor(this)">&copy;Recode</p>
        </div>
    </footer>
   
   
    <script src="./teste.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script

</body>


</html>