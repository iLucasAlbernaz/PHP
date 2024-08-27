<!-- excluirProfessor -->
<?php require_once "ClassProfessor.php"; ?> <!-- Getts e Setts -->
<?php require_once "ClassProfessorDAO.php";?>
<?php 

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

$novoProfessor = new classProfessor();
$novoProfessor->setId($id);

$ClassProfessorDAO = new ClassProfessorDAO(); 
$array = $ClassProfessorDAO-> excluirProfessor($novoProfessor);

if ($array==true) {
    header('Location:listarProfessor.php');
} else {
    echo "Erro ao excluir Professor";
}
}
?>