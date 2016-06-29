<?php 
    include("cabecalho.php");
    include("lib/conecta.php");    
    include ("lib/banco-produto.php");
    
    $produtos = listaProdutos($conexao);
    
    if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
            <p class="alert-success">Produto removido com sucesso!</p>
    <?php  } 
    
    if(array_key_exists("adicionado", $_GET) && $_GET['adicionado']=='true') { ?>
            <p class="text-success">Produto adicionado com sucesso!</p>
    
    <?php }
    ?>
        
    <table class="table table-striped table-bordered">
    

<?php
    foreach ($produtos as $produto){
        
?>        
        <tr>
            <td><?= $produto['nome'] ?></td>
            <td><?= $produto['preco'] ?></td>
            <td><?= substr($produto['descricao'],0,40) ?></td>
            <td>
                <form action="remove-produto.php?id=<?=$produto['id']?>" method="post">
                    <input type="hidden" name="id" value="<?=$produto['id']?>" />
                    <button class="btn btn-danger">Remover</button>
                </form>
            </td>
        </tr>
<?php
    } 
 ?>   
    </table>
<?php
php_include("rodape.php");