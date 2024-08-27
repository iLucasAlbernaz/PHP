<?php
function buscaUsuario($conexao,$login,$senha){

    $sql= "SELECT * FROM usuarios WHERE login = '$login' AND senha =md5 ('$senha')"; 
    $resultado = mysqli_query($conexao,$sql);
    $usuario = mysqli_fetch_assoc($resultado);
    
    return $usuario;

}

?>