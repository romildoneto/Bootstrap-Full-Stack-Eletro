$sql = "select * from produto";
  $result = $conn->query($sql);

  if ($result->num_rows > 0){
  while($rows = $result->fetch_assoc()){
    echo $rows["categoria"];

  }
  }else{
    echo "nenhum produto cadastrado!";
  }