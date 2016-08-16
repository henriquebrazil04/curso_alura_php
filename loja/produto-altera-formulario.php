<?php 
    include("cabecalho.php");
    include("lib/conecta.php");    
    include("lib/banco-categoria.php");
    include("lib/banco-produto.php");    
    

?>
    <h1>Alterando produto</h1>

<?php

    $id = $_GET['id'];
    $produto = buscaProduto($conexao, $id);
    
    $usado = $produto['usado'] ?"checked='checked'" : "";

    $categorias = listaCategorias($conexao);

?>
    
    <form action="alteraProduto.php" method="post">
    
        <table class="table">
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>" /></td>
        </tr>
        
        <tr>
            <td>Preço</td>
            <td><input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>"/></td>
        </tr>
        
        <tr>
            <td>Descrição</td>
            <td><textarea class="form-control" name="descricao" value="<?=$produto['descricao']?>"></textarea></td>
        </tr>
        <tr>
            
        <tr>
            <td></td>
            <td><input type="checkbox" name="usado" value="true" <?=$usado?>>Usado</td>
        </tr>
        <tr>
            <td>Categoria</td>
            <td>
                <select name="categoria_id" class="form-control">
                    
<?php
            foreach ($categorias as $categoria): 
                $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
                $selecao = $essaEhACategoria ? "selected='selected'" : "";
                
                ?>
                    <option value="<?=$categoria['id']?>" <?=$selecao?> >
                        <?=$categoria['nome']?>
                    </option>
                <?php       endforeach; ?>
                </select>               
            </td>
        </tr>                
        
        <tr>
            <td><button class="bt btn-primary" type="submit">Alterar</button></td>
        </tr>

    </form>        
        
    </table>
    

                
<?php include("rodape.php");