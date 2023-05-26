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
        $_POST['senha'],
        $_POST['cep'],
        $_POST['rua'],
        $_POST['numero'],
        $_POST['bairro'],
        $_POST['cidade'],
        $_POST['estado'],
    );

?>