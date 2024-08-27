<?php require_once "ClassProfessor.php"; ?>
<?php require_once "ClassProfessorDAO.php";?>
<?php

$id =       $_GET['id'];
$nome =     $_GET['nome'];
$email =    $_GET['email'];
$salario =  $_GET['salario'];
$nivel =    $_GET['nivel'];

$novoProfessor = new classProfessor();
$novoProfessor->setId($id);
$novoProfessor->setNome($nome);
$novoProfessor->setEmail($email);
$novoProfessor->setSalario($salario);
$novoProfessor->setNivel($nivel);

$ClassProfessorDAO = new ClassProfessorDAO(); 

$array = $ClassProfessorDAO-> alterarProfessor($novoProfessor);

    if ($array==true){
        header('Location:listarProfessor.php');
    }else{
        echo "Erro ao alterar Professor";
    }