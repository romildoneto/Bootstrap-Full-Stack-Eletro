
 <?php
  $servername ="localhost";
  $username = "root";
  $password = "";
  $database = "fseletro";
  // criando conexão
  $conn = mysqli_connect($servername,$username,$password,$database);

  // verificação a conexão
  if (!$conn) {
  die( "A conexão ao BD falhou: " . mysqli_connect_error());
} 


    if (isset($_POST['nome']) && isset($_POST['mensagem'])){
       $nome = $_POST['nome'];
       $mensagem =$_POST['mensagem'];

       $sql = "insert into usuarios(nome, mensagem) values ('$nome','$mensagem')";
       $result = $conn->query($sql);

}

?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Contato-Full Stack Eletro</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>

<body>
    <?php
       include_once("menu.html");
    ?>
    <!-- Inicio do Menu-->

    <h2 class="fconosco">Contatos:</h2>

    <br> <br>

    <div onmouseover="alterarcor(this)" onmouseout="alterarcor(this)" class="elementoEmail">
        <img src="./imagens/logoEmail.JPEG" width="50px" onclick="foto(this)">
        contato@fullstackeletro.com
    </div>

    <div onmouseover="alterarcor(this)" onmouseout="alterarcor(this)" class="elementoContato">
        <img src="imagens/zap2.jpeg" width="120px" onclick="foto(this)">
        (11) 89889-4566
    </div>


        <br> <br><br> <br>


 <form method ="POST" action ="">
    
       
<h4 style="margin-left:3%">Nome</h4>
<input type="text" name="nome" class="inputname">
<h4 style="margin-left:3%">Mensagem</h4>
<input type="text" name="mensagem" class="inputmensagem"> <br> <br>
<input type="submit" class="inputentrada" name="submit" value="enviar">






 </form>

    <br><br>

    <footer class="rodape">
        <p onmouseover="alterarcor(this)"onmouseout="alterarcor(this)" class="fcartao"><b>Formas de pagamento:</b></p>
        <br><br><br><br>
        <img src="imagens/imagem3.png" alt="imagem3"><br>
        <p>&copy;Recode</p>
    </footer>
   
    <script src="./javaScript/funcoes.js"></script>

</body>
</html>