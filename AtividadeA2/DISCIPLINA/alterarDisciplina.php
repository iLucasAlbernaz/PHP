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

?>

<body>
        <center>
            <form action = "alterarProcessaDisciplina.php" method = "GET">
                <h1>ALTERAR DADOS</h1>

                Id:<br><input type= "text" name="id" readonly="true" value=<?php echo $novoDisciplina->getId($id);?>><br>
                Nome:<br><input type= "text" name="nome" value=<?php echo $novoDisciplina->getNome($nome);?>><br>
                Requisito:<br><input type= "text" name="requisito" value=<?php echo $novoDisciplina->getRequisito($requisito);?>><br>
                Carga Horaria:<br><input type= "text" name="carga_horaria" value=<?php echo $novoDisciplina->getCarga_Horaria($carga_horaria);?>><br>
               
                <br><br>

                    <button type="submit" class="btn btn-primary" >Alterar</button>
           
                </form>
        </center>
</body>