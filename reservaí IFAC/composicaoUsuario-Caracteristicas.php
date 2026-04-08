<?php
    //Requisiçao de Acesso
    require_once 'Classes/Caracteristicas.php';
    require_once 'Classes/Usuario.php';

    //Criaçao do Objeto
    $u1 = new Usuario;
    //Composiçao
    $u1->addCaracteristicas('1', 'Matheus', '1', '1');

    foreach ($u1->getCaracteristicas() as $c) {
        print 'Caracteristicas do usuario: ' . $c->getNome();
    }
?>