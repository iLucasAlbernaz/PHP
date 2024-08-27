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

?>

<body>
        <center>
            <form action = "alterarProcessaProfessor.php" method = "GET">
                <h1>ALTERAR DADOS</h1>

                    Id:<br><input type= "text" name="id" readonly="true" value=<?php echo $novoProfessor->getId($id);?>><br>
                    Nome:<br><input type= "text" name="nome" value=<?php echo $novoProfessor->getNome($nome);?>><br>
                    Email:<br><input type= "text" name="email" value=<?php echo $novoProfessor->getEmail($email);?>><br>
                    Salário:<br><input type= "text" name="salario" value=<?php echo $novoProfessor->getSalario($salario);?>><br>
                    Nível:<br><input type= "text" name="nivel" value=<?php echo $novoProfessor->getNivel($nivel);?>><br>
                    <br><br>

                    <button type="submit" class="btn btn-primary" >Alterar</button>
            </form>
        </center>
</body>