<?php 
    include("cabecalho.php");
    include("lib/conecta.php");    
    include ("lib/banco-produto.php");    
    
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    $categoria_id = $_POST['categoria_id'];
    $usado = $_POST['usado'];

    
    
    if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)) {
  
        echo 'OK';
        header("Location: produto-lista.php?adicionado=true");

    } else {

        header("Location: produto-formulario.php?adicionado=false");

    }

?>

                
<?php include("rodape.php");
