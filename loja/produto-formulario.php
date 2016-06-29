<?php 
    include("cabecalho.php");
    include("lib/conecta.php");    
    include("lib/banco-categoria.php");

?>
    <h1>Formulário de cadastro</h1>

<?php

    $categorias = listaCategorias($conexao);

    if(array_key_exists("adicionado", $_POST) && $_POST['adicionado']=='false') { ?>
            <p class="text-danger">Erro ao adicionar produto!</p>
    
    <?php }

?>
    
    <form action="adiciona-produto.php" method="post">
    
    <table>
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" /></td>
        </tr>
        
        <tr>
            <td>Preço</td>
            <td><input class="form-control" type="number" name="preco" /></td>
        </tr>
        
        <tr>
            <td>Descrição</td>
            <td><textarea class="form-control" name="descricao"></textarea></td>
        </tr>
        <tr>
            <td>
<?php
            foreach ($categorias as $categoria): ?>

                <input type="radio" name="categoria_id" value="<?=categoria['id']?>"><?=$categoria['nome']?></br>
                
<?php       endforeach; ?>
               
            </td>
        </tr>                
        
        <tr>
            <td><input class="bt btn-primary" type="submit" value="Cadastrar" /></td>
        </tr>

    </form>        
        
    </table>
    

                
<?php include("rodape.php");