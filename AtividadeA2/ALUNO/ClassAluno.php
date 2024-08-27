<!-- ClassProfessor -->
<?php

class ClassAluno{
    private $nome;
    private $email;
    private $cpf;
    private $telefone;
    private $id;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setId($id) {
        $this->id = $id;
    }
    
    public function getId() {
        return $this->id;
    }
    
}//fim classe

?>