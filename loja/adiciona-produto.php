<?php 
    include("cabecalho.php");
    include ("lib/conecta.php");    
    include("lib/functions.php");
    
    $nome = $_GET["nome"];
    $preco = $_GET["preco"];
    
    if(insereProduto($conexao, $nome, $preco)) {
        ?>
        <p class="text-success">Produto <?=$nome?>, cujo preco eh <?=$preco?> adicionado com sucesso!</p>
        <?php
    } else {
        
        $msg = mysqli_error($conexao);
        ?>
            <p class="text-danger">Ocorreu um erro. Produto <?=$nome?> NÃO incluído: <?= $msg ?></p>
        <?php
    }

?>

                
<?php include("rodape.php");
