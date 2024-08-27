<?php require_once "ClassAluno.php"; ?>
<?php require_once "ClassAlunoDAO.php";?>
<?php

$id =       $_GET['id'];
$nome =     $_GET['nome'];
$email =    $_GET['email'];
$cpf =      $_GET['cpf'];
$telefone = $_GET['telefone'];

$novoAluno = new classAluno();

$novoAluno->setId($id);
$novoAluno->setNome($nome);
$novoAluno->setEmail($email);
$novoAluno->setCpf($cpf);
$novoAluno->setTelefone($telefone);

$ClassAlunoDAO = new ClassAlunoDAO(); 
$array = $ClassAlunoDAO->alterarAluno($novoAluno);

    if ($array==true){
        header('Location:listarAluno.php');
    }else{
        echo "Erro ao alterar Aluno";
    }
?>