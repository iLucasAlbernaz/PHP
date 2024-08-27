<?php 
    class ClassDisciplina{
        private $nome;
        private $requisito;
        private $carga_horaria;
        private $id;

        public function setNome($nome){
            $this->nome = $nome;
        }
        
        public function getNome(){
            return $this->nome;
        }
        
        public function setRequisito($requisito){
            $this->requisito = $requisito;
        }
        
        public function getRequisito(){
            return $this->requisito;
        }
        
        public function setCarga_horaria($carga_horaria){
            $this->carga_horaria = $carga_horaria;
        }
        
        public function getCarga_horaria(){
            return $this->carga_horaria;
        }
        
        public function setId($id){
            $this->id = $id;
        }
        
        public function getId(){
            return $this->id;
        }
    }
?>
