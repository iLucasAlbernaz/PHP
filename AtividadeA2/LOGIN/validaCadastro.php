<?php require_once 'conecta.php'?>
<?php
    $login= $_POST['login'];
    $senha=md5 ($_POST['senha']);
    inserir($conexao,$login,$senha);
        function inserir ($conexao,$login,$senha){
            $sql="insert into usuarios(login,senha)values ('$login','$senha')";
            
            if(mysqli_query($conexao,$sql)){
                echo 'Adicionado';
                header("Location:../index.php");
            }
            else{
                $erro=mysqli_error($conexao);
                echo'Não';
                echo $erro;
            }
        }
?> 




