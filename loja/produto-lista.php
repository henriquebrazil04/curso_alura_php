<?php 
    include("cabecalho.php");
    include ("lib/conecta.php");

    $resultado = mysqli_query($conexao, "select * from produtos");
    
    while($produto = mysqli_fetch_assoc($resultado)) {
        
        echo $produto['nome'] . "<br/>";
        
    }

php_include("rodape.php");