<?php require_once "ClassDisciplina.php"; ?> <!-- Getts e Setts -->
<?php require_once "ClassDisciplinaDAO.php";?>
<?php 

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

$novoDisciplina = new classDisciplina();
$novoDisciplina->setId($id);

$ClassDisciplinaDAO = new ClassDisciplinaDAO(); 
$array = $ClassDisciplinaDAO-> excluirDisciplina($novoDisciplina);

if ($array==true) {
    header('Location:listarDisciplina.php');
} else {
    echo "Erro ao excluir Disciplina";
}
}
?>