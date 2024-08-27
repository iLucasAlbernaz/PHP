<?php require_once 'conexao.php'; ?>
<?php require_once 'Produto.php'; ?>
<?php require_once 'banco_Produto.php'; ?>
<?php
    $prod = new Produto();
    $prod->nome = $_POST["nome"]; 
    $prod->quantidade = $_POST["quantidade"];
    $prod->preco = $_POST["preco"];
    $prod->fornecedor = $_POST["fornecedor"];

    if (insere($conect, $prod)) {
        echo "Produto cadastrado com sucesso";
    } else {
        $erro=mysqli_error($conect);
        echo "Produto não cadastrado";
    }
?>