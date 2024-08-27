<?php require_once "Produto.php" ?>
<?php 
    function insereProduto($conect,$prod){
        $sql="INSERT INTO estoque (nome,quantidade,preco,fornecedor) VALUES 
      ('$prod->nome',
        $prod->quantidade,
        $prod->preco,
       '$prod->fornecedor')";
        $resultado=mysqli_query($conect,$sql);
        return $resultado;
    }