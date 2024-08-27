<?php require_once "ClassDisciplina.php" ?>
<?php require_once "ClassDisciplinaDAO.php" ?>
<?php

$id = $_GET['id'];
$nome = $_GET['nome'];
$requisito = $_GET['requisito'];
$carga_horaria = $_GET['carga_horaria'];

$novaDisciplina = new ClassDisciplina();

$novaDisciplina->setId($id);
$novaDisciplina->setNome($nome);
$novaDisciplina->setRequisito($requisito);
$novaDisciplina->setCarga_Horaria($carga_horaria);

$ClassDisciplinaDAO = new ClassDisciplinaDAO();

$array = $ClassDisciplinaDAO->alterarDisciplina($novoDisciplina);

    if ($array==true){
        header('Location:listarDisciplina.php');
    }else{
        echo "Erro ao alterar Disciplina";
    }
    
?>