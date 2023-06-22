<?php 
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";

$id = $_GET["id"];
$nome = "";
$sql = "select * from ongs where Id_ong= $id";
$todas_as_ongs = mysqli_query($conexao, $sql);
while($uma_ong = mysqli_fetch_assoc($todas_as_ongs)):
    $nome = $uma_ong ["Nome"];
endwhile;
?>
<h1>Editar ong <?php echo $id;?> </h1>
<form method="post" action="atualizar.php?id=<?php echo $id;?>">
    Nome: <input name="Nome" value="<?php echo $nome;?>"><br>
    <button type="submit">Atualizar</button>
</form>
<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>