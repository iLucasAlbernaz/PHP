    <?php require_once "Aluno.php" ?>

    <?php
	  function insereAluno($conexao, $aluno){ 
		$sql="insert into alunos(nome,matricula,disciplina)values 
			('$aluno->nome',
			 '$aluno->matricula',
			 '$aluno->disciplina'
			)";
			$resultado =mysqli_query($conexao, $sql);
         return $resultado ;
	    }
?>