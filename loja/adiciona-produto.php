<?php 
    include("cabecalho.php");
    include("lib/conecta.php");    
    include ("lib/banco-produto.php");    
    
    $nome = $_POST['nome'];
    echo "$nome".'<br>';
    
    $preco = $_POST['preco'];
    echo "$preco".'<br>';    
    
    $descricao = $_POST['descricao'];
    echo "$descricao".'<br>';        
    
    $categoria_id = $_POST['categoria_id'];
    echo "$categoria_id".'<br>';        

    
    
    if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id)) {
  
        echo 'OK';
        header("Location: produto-lista.php?adicionado=true");

    } else {

        header("Location: produto-formulario.php?adicionado=false");

    }

?>

                
<?php include("rodape.php");
