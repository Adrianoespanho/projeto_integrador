<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";

$id = $_GET["id"];

$Nome ="";
$Telefone ="";
$Email ="";
$Cidade ="";

$sql = "select *from ongs where Id_ong= $id";
$todas_as_ongs=mysqli_query($conexao, $sql);
while($uma_ong=mysqli_fetch_assoc($todas_as_ongs)):
    $Nome= $uma_ong["Nome"];
    $Telefone= $uma_ong["Telefone"];
    $Email= $uma_ong["Email"];
    $Cidade= $uma_ong["Cidade"];
endwhile;

?>

<h1>ficha das ong </h1>
Nome: <?php echo $Nome ."" ?> <br>
Telefone: <?php echo $Telefone ."" ?> <br>
Email: <?php echo $Email ."" ?> <br>
Cidade: <?php echo $Cidade ."" ?> <br>

<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>