<?php 
include "../includes/conexao.php";

$id= $_GET["id"];

$nome = $_POST["Nome"];
$sql = "update ongs set Nome = '$nome' where Id_ong =$id";
mysqli_query($conexao,$sql);
mysqli_close($conexao);

header("location: selecionar.php");
?>