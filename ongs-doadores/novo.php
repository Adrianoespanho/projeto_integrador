<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
?>
<h1>Novo ongs</h1>
<p>Vamos cadastrar um ongs novo no sistema.</p>
<form action="inserir.php" method="post">
    Nome: <input name="nome" type="text" required maxlength="50">
    <br>
    Telefone: <input name="telefone" type="text" required maxlength="50">
    <br>
    Email: <input name="email" type="text" required maxlength="50">
    <br>
    Cidade: <input name="cidade" type="text" required maxlength="50">
    <br>
    <button type="submit">Salvar</button>
</form>
<?php
include "../includes/rodape.php";
?>
