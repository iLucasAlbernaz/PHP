<?php require_once "Conexao.php" ?>
<?php 

class ClassDisciplinaDAO {
    public function cadastrarDisciplina($novoDisciplina) {
    try {
        $pdo = Conexao::getInstance();
        $sql = "INSERT INTO disciplina (nome, requisito, carga_horaria) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(1, $novoDisciplina->getNome());
        $stmt->bindValue(2, $novoDisciplina->getRequisito());
        $stmt->bindValue(3, $novoDisciplina->getCarga_Horaria());
        $stmt->execute();
        echo "<center><h1>Cadastro Realizado com sucesso</h1></center><br>";
        echo "<a href='listarDisciplina.php'>Lista das Disciplinas</a>";
    }catch(PDOException $erro){
    echo $erro.getMessage();
        
}
}
Public function listarDisciplina(){
    try{
        $pdo = Conexao::getInstance();
        $sql = "SELECT * FROM disciplina";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(); 
    }catch(PDOException $erro){
        echo $erro->getMessage();
    }
}

public function excluirDisciplina($novoDisciplina){
    try{
        $pdo = Conexao::getInstance();
        $sql = "DELETE FROM disciplina WHERE id=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id',$novoDisciplina->getId());
        $stmt->execute();
        return true;
    }catch(PDOException $erro){
        echo $erro->getMessage();
    }
}

public function alterarDisciplina($novoDisciplina){
    try{
        $pdo = Conexao::getInstance();
        $sql = "UPDATE disciplina SET nome=:nome, requisito=:requisito, carga_horaria=:carga_horaria WHERE id=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id',$novoDisciplina->getId());
        $stmt->bindValue(':nome',$novoDisciplina->getNome());
        $stmt->bindValue(':requisito',$novoDisciplina->getRequisito());
        $stmt->bindValue(':carga_horaria',$novoDisciplina->getCarga_Horaria());
        $stmt->execute();
        return true;
    }catch(PDOException $erro){
        echo $erro->getMessage();
    }   
}
}

?>