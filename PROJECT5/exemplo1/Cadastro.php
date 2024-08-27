<?php include 'Conexao.php'; ?>
<?php
    $nome=$_GET["nome"];
    $rg=$_GET["rg"];
    $cpf=$_GET["cpf"];
    $salario=$_GET["salario"];
    $funcao=$_GET["funcao"];

    function insere($conect,$nome,$rg,$cpf,$salario,$funcao){

        $sql="INSERT INTO funcionarios (nome,rg,cpf,salario,funcao) VALUES ('$nome','$rg','$cpf','$salario','$funcao')";
        $resultado=mysqli_query($conect,$sql);
        return $resultado;
   
}//FIM DA FUNÇÃO
     
    if(insere($conect,$nome,$rg,$cpf,$salario,$funcao)){
        echo "Funcionário cadastrado com sucesso!";
    }else{
        echo "Falha ao cadastrar funcionário!";
        echo mysqli_error($conect);
    }
?>