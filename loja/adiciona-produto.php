<?php 
    include("cabecalho.php");
    include("lib/conecta.php");    
    include ("lib/banco-produto.php");    
    
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];
    
    if(insereProduto($conexao, $nome, $preco, $descricao)) {
        
        header("Location: produto-lista.php?adicionado=true");

    } else {
        
        $msg = mysqli_error($conexao);
        
        header("Location: produto-formulario.php?adicionado=false");

    }

?>

                
<?php include("rodape.php");
