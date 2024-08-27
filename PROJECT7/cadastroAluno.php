       <?php require_once("conexao.php") ?>
	   <?php require_once("Aluno.php") ?>
       <?php require_once("banco-aluno.php") ?>
        <?php
			//$aluno=new Aluno ();
			
			$aluno->matricula = $_GET["matricula"];
			$aluno->nome = $_GET["nome"];
			$aluno->disciplina = $_GET["disciplina"];	
   //Chama o método-------------------------------------------------
        if (insereAluno($conexao, $aluno)){  ?>
			 <center>  
			   <table >
				    <tr>
					  <th>Cadastrado com sucesso!</th>
				    </tr>
					<tr>
					   <td>Nome:  <?php echo $aluno->nome; ?></td>
					</tr>
					<tr>
					   <td>Matrícula:   <?php echo $aluno->matricula; ?></td>
					</tr>
					<tr>
					   <td>Endereço:<?php echo $aluno->disciplina; ?></td>
					</tr>
					<tr>
					   <td><a href="deletar.php">Deseja deletar?</td>
					</tr>

				</table>
		<?php
		      }else{
				 $erro=mysqli_error($conexao);
			     echo "Não foi adicionado:".$erro;
			  }
//Fim do método ---------------------------------------
		?>
		
                
    
