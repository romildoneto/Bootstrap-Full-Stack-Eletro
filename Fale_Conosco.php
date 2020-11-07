
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Stack Eletro</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
</head>

<body>
    <?php
       include_once("menu.html");
    ?>
    <!-- Inicio do Menu-->

    <h2 class="fconosco">Contatos:</h2>

    <br> <br>


 <div class="row ml-5">
    <div class="col"><img src="./imagens/email.jpeg" width="50px"></div>
    <div class="col"><img src="./imagens/zap2." width="50px"></div>
  </div>

 <div class="row ml-5">
    <div class="col" onmouseover="changecolor(this)" onmouseout="changecolor(this)">contato@fullstackeletro.com</div>
    <div class="col" onmouseover="changecolor(this)" onmouseout="changecolor(this)">(11)99999-9999</div>
 </div>

        <br> <br>


 <form method ="POST" action ="">
    
 <form method="post" action="">
  <div class="form-group m-4">
    <label for="nome">Nome</label>
    <input type="text" name="nome" class="form-control w-50 p-3" id="nome" placeholder="Digite seu nome">
  </div>


  <div class="form-group m-4">
    <label for="msg">Mensagem</label>
    <input type="text" name="mensagem" class="form-control w-50 p-3" id="mensagem" placeholder="Digite sua mensagem...">
    </div>
    <button type="submit" class="btn btn-danger  m-4">Enviar</button>
 </form>

    <br>

    <div class="container-center" style="text-align:center;">
      <footer>
         <p class="text-danger" onmouseover="changecolor(this)" onmouseout="changecolor(this)"><b>Formas de pagamento:</b></p>
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