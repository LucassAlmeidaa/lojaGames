<?php

require '../../model/Usuario.php';

$retorno = Usuario::loginUsuario($_POST);

if(isset($retorno)){
    include '../../view/principal/principal.php';
    
}else {
    include '../../view/loginNaoEncontrado/loginNaoEncontrado.php';
}
