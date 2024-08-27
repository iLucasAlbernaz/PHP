<?php

$nome=$_POST["Nome"];
$turma=$_POST["Turma"];

echo "<center><strong> ALUNO: </strong> $nome </center>";
echo "<center><strong> TURMA: </strong> $turma  </center><br>";

/*CALCULO*/ 

    class Aluno{

        public $AV1;
        public $AV2;
        public $AV3;
        public $acao;
        public $resultado;
        function __construct($AV1, $AV2, $AV3, $acao){
                
                if ($acao =="dividir"){
                        $resultado=($AV1+$AV2+$AV3)/3;
                echo " <center> <h1>    MEDIA: $resultado </h1> </center>";
                } 
                  
        }// fim do método
    }// fim da classe
    
    $objeto = new Aluno($_POST['AV1'], $_POST['AV2'], $_POST['AV3'], $_POST['acao']);

    if ($_POST['acao'] == 'dividir') {
        $media = ($_POST['AV1'] + $_POST['AV2'] + $_POST['AV3']) / 3;
        if ($media >= 7) {
            echo "<center><h2>O aluno está APROVADO!</h2></center>";
        } elseif ($media < 3) {
            echo "<center><h2>O aluno está REPROVADO!</h2></center>";
        } else {
            echo "<center><h2>O aluno está em RECUPERAÇÃO!</h2></center>";
        }
    }
?>
