<?php 
include("lib/conecta.php");
include("lib/banco-produto.php");

$id = $_GET['id'];

removeProduto($conexao, $id);

header("Location: produto-lista.php?removido=true");
die();