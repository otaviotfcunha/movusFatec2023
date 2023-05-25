<?php

    require_once "classes/Usuario.php";
    $usuario = new Usuario();

    $usuario->inserirUsuario
    (
        $_POST['nome'],
        $_POST['cpf'],
        $_POST['email'],
        $_POST['celular'],
        $_POST['dataNascimento'],
        $_POST['login'],
        $_POST['senha']
    );

?>