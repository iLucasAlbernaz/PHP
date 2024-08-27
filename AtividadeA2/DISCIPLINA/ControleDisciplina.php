<?php require_once "ClassDisciplina.php" ?>
<?php require_once "ClassDisciplinaDAO.php" ?>
<?php

$nome = $_POST['nome'];
$requisito = $_POST['requisito'];
$carga_horaria = $_POST['carga_horaria'];

$novaDisciplina = new ClassDisciplina();
$novaDisciplina->setNome($nome);
$novaDisciplina->setRequisito($requisito);
$novaDisciplina->setCarga_Horaria($carga_horaria);

$ClassDisciplinaDAO = new ClassDisciplinaDAO();
$ClassDisciplinaDAO->cadastrarDisciplina($novaDisciplina);