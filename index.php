<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Full Stack Eletro</title>
    <link rel="stylesheet" href="./css/estilo.css">
    
</head>

<body>
    <!-- Inicio do Menu-->
<?php
include_once("menu.html");

?>

    <br> <br><br>
    <div class="entrada">
        <h2 onmouseover="changecolor(this)">Seja bem vindo(a)</h2>
        <p> Aqui em nossa loja programador tem desconto!</p>
    </div>

   
        <br> <br><br>
           <br><br><br>
           <br> <br><br>

    <footer class="rodape">
        <p onmouseover="changecolor(this)" class="fcartao"><b>Formas de pagamento:</b></p>
        <br><br> <br><br>
        <img id="cartcredito" src="imagens/imagem3.png" alt="imagem3" onclick="ftcredito(this)"><br>
        <p>&copy;Recode</p>
    </footer>
    <script src="./javaScript/funcoes.js"></script>
</body>


</html>