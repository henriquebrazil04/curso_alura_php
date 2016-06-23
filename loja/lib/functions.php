<?php

    function insereProduto($conexao, $nome, $preco) {
        $query = "insert into produtos (nome, preco) values('{$nome}', {$preco})";        
        $resultado_insercao = mysqli_query($conexao, $query);  
        return $resultado_insercao;
    }