<?php

    require_once "../classes/Usuario.php";

    $usuario = new Usuario();

    $usuario->nome = $linha['nome'];
    $usuario->cpf = $linha['cpf'];
    $usuario->email = $linha['email'];
    $usuario->celular = $linha['celular'];
    $usuario->dataNascimento = $linha['dataNascimento'];
    $usuario->login = $linha['login'];
    $usuario->senha = $linha['senha'];
    $usuario->status = $linha['status'];


    $usuario->inserirUsuario();

?>