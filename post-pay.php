<?php
$_SESSION['nome']=$_POST['nome'];
$_SESSION['email']=$_POST['email'];
$_SESSION['telefone']=$_POST['telefone'];
$_SESSION['cidade']=$_POST['cidade'];
$_SESSION['estado']=$_POST['estado'];

$telefone=$_SESSION['telefone'];
$nome=$_SESSION['nome'];
$email=$_SESSION['email'];
$cidade=$_SESSION['cidade'];
$estado=$_SESSION['estado'];


require_once("conn/conn.php");


$result_user= "INSERT INTO inscritos (nome, email, cidade, estado, telefone) VALUES ('$nome', '$email', '$cidade', '$estado', '$telefone')";

$resultado_user= mysqli_query($conn, $result_user);

if(mysqli_insert_id($conn)){
   echo "<script>location.href='http://tattooweek.com.br'; </script>";
}

else{
        echo "<script>location.href='index.php?ERROR';</script>";
      }


?>