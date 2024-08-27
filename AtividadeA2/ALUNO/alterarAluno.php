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

?>

<body>
        <center>
            <form action = "alterarProcessaAluno.php" method = "GET">
                <h1>ALTERAR DADOS</h1>

                Id:<br><input type= "text" name="id" readonly="true" value=<?php echo $novoAluno->getId($id);?>><br>
                Nome:<br><input type= "text" name="nome" value=<?php echo $novoAluno->getNome($nome);?>><br>
                Email:<br><input type= "text" name="email" value=<?php echo $novoAluno->getEmail($email);?>><br>
                CPF:<br><input type= "text" name="cpf" value=<?php echo $novoAluno->getCpf($cpf);?>><br>
                Telefone:<br><input type= "text" name="telefone" value=<?php echo $novoAluno->getTelefone($telefone);?>><br>
                
                <br><br>

                    <button type="submit" class="btn btn-primary" >Alterar</button>
           
                </form>
        </center>
</body>