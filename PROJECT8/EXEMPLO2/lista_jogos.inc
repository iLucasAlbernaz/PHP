<?php
    $usuario='root';
    $senha='';
    $servidor='localhost';
    $banco='campeonato';

    echo "<h1> Jogos de Hoje </h1>";
    try {
        $bd= new PDO("mysql:host=$servidor;dbname=$banco",
                      $usuario,$senha);
        $hoje=date("Y-m-d");
        $sql="SELECT jogo,local,horario FROM jogos WHERE data= '$hoje' ORDER BY horario";
        $res = $bd->query($sql);

        while ($linha = $res->fetch()) {
            $jogo = $linha["jogo"];
            $local = $linha["local"];
            $horario = $linha["horario"];
            
            echo "<tr>";
                    echo "<td>$jogo</td>";
                    echo "<td>$local</td>";
                    echo "<td>$horario</td>";
            echo "</tr>";
        }
        
        $bd=null;

    } catch(PDOException $e) {
        echo $e->getMenssage();
    }
