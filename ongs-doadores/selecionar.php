<?php
  include "../includes/cabecalho.php";
  include "../includes/menu.php";
  include "../includes/conexao.php";

?>

<h1>
    <img src="../img/logo-ong-cidadania-animal.png" width="100">Ong De Animais
</h1>
<p>
    <a href="novo.php">Adicionar ongs</a>
</p>
<h2>Listagem de ongs</h2>
<table border ="1">
    <tr>
        <td>codigo</td>
        <td>nome</td>
        <td>telefone</td>
        <td>email</td>
        <td>cidade</td>
        <td>Acões</td>
    </tr>
   
    <?php
   $sql = "select * from ongs";
   $todas_as_ongs = mysqli_query($conexao, $sql);
   while($uma_ong = mysqli_fetch_assoc($todas_as_ongs)):
    ?>
    <tr>
        <td><?php echo $uma_ong['Id_ong'] ?></td>
        <td><?php echo $uma_ong['Nome'] ?></td>
        <td><?php echo $uma_ong['Telefone'] ?></td>
        <td><?php echo $uma_ong['Email'] ?></td>
        <td><?php echo $uma_ong['Cidade'] ?></td>
        <td>
            <a href="visualizar.php?id=<?php echo $uma_ong["Id_ong"];?> "title=" Ver completo">Visualizar</a>
            <a href="editar.php?id=<?php echo $uma_ong["Id_ong"];?> ">Editar</a>
            <a href="deletar.php?id=<?php echo $uma_ong['Id_ong'];?>">deletar</a>
            <a href="atualizar.php?id=<?php echo $uma_ong['Id_ong'];?>">atualizar</a>
        </td>
    </tr>
    <?php
    endwhile;
    ?>
</table>


<?php
include "../includes/rodape.php";
?>