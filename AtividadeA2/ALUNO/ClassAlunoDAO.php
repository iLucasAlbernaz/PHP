
<?php require_once "../Conexao.php"; ?>
<?php
Class ClassAlunoDAO {
    public function cadastrarAluno($novoAluno) {
        try {
        $pdo = Conexao::getInstance();
        $sql = "INSERT INTO alunos (nome, cpf, email, telefone) VALUES (?, ?, ?, ?)";

        $stmt = $pdo->prepare($sql);
         $stmt->bindValue(1,$novoAluno->getNome());
         $stmt->bindValue(2,$novoAluno->getCpf());
         $stmt->bindValue(3,$novoAluno->getEmail());
         $stmt->bindValue(4,$novoAluno->getTelefone());

         $stmt->execute();
         echo "<center><h1>Cadastro Realizado com sucesso!</h1><center><br>";
         echo "<a href='listarAluno.php'>Listar dos Alunos</a>";
    } catch(PDOException $erro) {
        echo $erro->getMessage();
    }
    }//fechamento do método cadastrarProfessor

    Public function listarAluno(){
        try{
            $pdo = Conexao::getInstance();
            $sql = "SELECT * FROM alunos";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(); 
        }catch(PDOException $erro){
            echo $erro->getMessage();
        }
    }

    public function excluirAluno($novoAluno){
        try{
            $pdo = Conexao::getInstance();
            $sql = "DELETE FROM alunos WHERE id=:id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':id',$novoAluno->getId());
            $stmt->execute();
            return true;
        }catch(PDOException $erro){
            echo $erro->getMessage();
        }
    }

    public function alterarAluno($novoAluno){
        try{
            $pdo = Conexao::getInstance();
            $sql = "UPDATE alunos SET nome=:nome, cpf=:cpf, email=:email, telefone=:telefone WHERE id=:id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':nome',$novoAluno->getNome());
            $stmt->bindValue(':cpf',$novoAluno->getCpf());
            $stmt->bindValue(':email',$novoAluno->getEmail());
            $stmt->bindValue(':telefone',$novoAluno->getTelefone());
            $stmt->bindValue(':id',$novoAluno->getId());
            $stmt->execute();
            return true;
        }catch(PDOException $erro){
            echo $erro->getMessage();
        }
    }

}//fim da classe
?>