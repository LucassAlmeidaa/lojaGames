<?php

require '../../model/Usuario.php';

$retorno = Usuario::cadastrarUsuario($_POST['usuario'], $_POST['email'], $_POST['senha']);

if( $retorno = 1){
    header('location: ../../index.php');
}else{
    echo 'Usuario não Cadastrado';
}

