<?php 
    include("cabecalho.php");
    include ("lib/banco-produto.php");    
    
    $nome = $_GET["nome"];
    $preco = $_GET["preco"];
    
    if(insereProduto($conexao, $nome, $preco)) {
        
        header("Location: produto-lista.php?adicionado=true");

    } else {
        
        $msg = mysqli_error($conexao);
        
        header("Location: produto-formulario.php?adicionado=false");

        
    }

?>

                
<?php include("rodape.php");
