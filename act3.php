<a href="index.php">voltar</a><br><br>
<?php 

  include_once "default.inc.php";
  require_once "Conexao.php";

  
  $data = isset($_POST['arq'])?$_POST['arq']:null;
  $data = explode(',',$data);
  $table = isset($_POST['table'])?$_POST['table']:null;
 
  // echo "$data";

  $pdo = Conexao::getInstance();

  $stmt = $pdo->prepare("INSERT INTO $table VALUES(?, ?, ?);");
  $stmt -> bindParam(1, $data[0]);
  $stmt -> bindParam(2, $data[1]);
  $stmt -> bindParam(3, $data[2]);
  $stmt -> execute(); 

  header('location:index3.php');
?>