<html>
    <head>
        <meta charset = 'UTF-8'>
    </head>

    <body>
        <center><h1> CAMPEONATO </h1>
         <p>Confira os jogos de hoje
            (<?php echo date("Y-m-d"); ?>):</>
            <table border = 1>
                    <th>Jogo</th>
                    <th>Local</th>
                    <th>Horario</th>
                <?php include_once "lista_jogos.inc"; ?>
            </table>
        </center>
    </body>

</html>