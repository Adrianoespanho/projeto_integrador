<?php
include "../includes/conexao.php";

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email= $_POST['email'];
$cidade= $_POST['cidade'];
$sql = "insert into ongs(nome, telefone, email, cidade) values('$nome', '$telefone','$email','$cidade')";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php");
?>