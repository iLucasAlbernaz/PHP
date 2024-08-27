<?php require 'Conexao.php'; ?>
<?php require 'Aluno.php'; ?>
<?php require 'Banco-aluno.php'; ?>
<?php
    
    $aluno=new Aluno();
    $aluno->matricula=$_GET["aluno"];
    $aluno->nome=$_GET["nome"];
    $aluno->disciplina=$_GET["disciplina"];

    if(insere($conect,$aluno)){
        echo "Aluno cadastrado com sucesso";
    
    }else{
        echo "Erro ao cadastrar aluno";
        echo mysqli_error($conect);
    }


?>