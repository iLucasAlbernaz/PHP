<!-- ClassProfessor -->
<?php

class ClassProfessor{
    private $nome;
    private $email;
    private $salario;
    private $nivel;
    private $id;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }

    public function setNivel($nivel) {
        $this->nivel = $nivel;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function getNivel() {
        return $this->nivel;
    }

    public function setId($id) {
        $this->id = $id;
    }
    
    public function getId() {
        return $this->id;
    }
    
}//fim classe

?>