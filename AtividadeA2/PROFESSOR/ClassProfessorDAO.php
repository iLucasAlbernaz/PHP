<!-- ControleProfessorDAO -->
<?php require_once "Conexao.php"; ?>
<?php
Class ClassProfessorDAO {
    public function cadastrarProfessor($novoProfessor) {
        try {
        $pdo = Conexao::getInstance();
        $sql = "INSERT INTO professores (nome, email, salario, nivel) VALUES (?, ?, ?, ?)";

        $stmt = $pdo->prepare($sql);
         $stmt->bindValue(1,$novoProfessor->getNome());
         $stmt->bindValue(2,$novoProfessor->getEmail());
         $stmt->bindValue(3,$novoProfessor->getSalario());
         $stmt->bindValue(4,$novoProfessor->getNivel());

         $stmt->execute();
         echo "<center><h1>Cadastro Realizado com sucesso!</h1><center><br>";
         echo "<a href='listarProfessor.php'>Listar dos Professores</a>";
    } catch(PDOException $erro) {
        echo $erro->getMessage();
    }
    }//fechamento do método cadastrarProfessor

    Public function listarProfessor(){
        try{
            $pdo = Conexao::getInstance();
            $sql = "SELECT * FROM professores";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(); 
        }catch(PDOException $erro){
            echo $erro->getMessage();
        }
    }

    public function excluirProfessor($novoProfessor){
        try{
            $pdo = Conexao::getInstance();
            $sql = "DELETE FROM professores WHERE id=:id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':id',$novoProfessor->getId());
            $stmt->execute();
            return true;
        }catch(PDOException $erro){
            echo $erro->getMessage();
        }
    }

    public function alterarProfessor($novoProfessor){
        try{
            $pdo = Conexao::getInstance();
            $sql = "UPDATE professores SET nome=:nome, email=:email, salario=:salario, nivel=:nivel WHERE id=:id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':id',$novoProfessor->getId());
            $stmt->bindValue(':nome',$novoProfessor->getNome());
            $stmt->bindValue(':email',$novoProfessor->getEmail());
            $stmt->bindValue(':salario',$novoProfessor->getSalario());
            $stmt->bindValue(':nivel',$novoProfessor->getNivel());
            $stmt->execute();
            return true;
        }catch(PDOException $erro){
            echo $erro->getMessage();
        }
    }

}//fim da classe
?>