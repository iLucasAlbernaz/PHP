<?php require 'Aluno.php'; ?>
<?php

    function insere($conect,$aluno){

        $sql="INSERT INTO aluno (matricula,nome,disciplina) 
              VALUES ('$aluno->matricula',
                      '$aluno->nome',
                      '$aluno->disciplina')";

        $resultado=mysqli_query($conect,$sql);
        return $resultado;

    }






?>

