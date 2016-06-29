<?php 
include("conecta.php");
include("lib/banco-produto.php");

$id = $_POST['id'];

removeProduto($conexao, $id);

header("Location: produto-lista.php?removido=true");
die();