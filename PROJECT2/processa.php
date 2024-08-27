
<?php

    $nome = $_GET["nome"];
    $email= $_GET["email"];
    $mensagem = $_GET["mensagem"];
    $sexo = $_GET["sexo"];
    
          
        

echo"<center>";

    echo "<strong> NOME: </strong> $nome <br> ";
    echo " <strong> EMAIL: </strong> $email<br> ";
    echo " <strong> MENSAGEM: </strong> $mensagem<br> ";
    echo " <strong> SEXO: </strong> $sexo<br> ";

    if (isset($_GET["curso"])){
        $curso=$_GET["curso"];
        foreach ($curso as $item) {
          echo "<strong> CURSO: </strong> $item <br>";
        }
    }
    echo "<br>";
    echo "<a href= 'index.html'> Voltar </a>";
    echo "<br>";
    
echo "</center>";

?>