<?php
    $usuario='root';
    $senha='';
    $servidor='localhost';
    $banco='biblioteca';

    echo "<h1> Livros </h1>";
    try {
        $bd= new PDO("mysql:host=$servidor;dbname=$banco",
                      $usuario,$senha);

        $sql = "SELECT * FROM livros limit 3";
        $res = $bd->query($sql);

        while ($linha = $res->fetch()) {
            $isbn = $linha["isbn"];
            $titulo = $linha["titulo"];
            $autor = $linha["autor"];
            echo "$isbn - $titulo - $autor<br>";
        }
        
        $bd=null;

    } catch(PDOException $e) {
        echo $e->getMenssage();
    }

    





?>
