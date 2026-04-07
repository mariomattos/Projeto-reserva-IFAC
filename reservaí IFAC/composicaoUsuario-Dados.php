<?php

    //Requisições de acesso
    require_once 'Classes/Usuario.php';
    require_once 'Classes/Dados.php';

    //Criação do objeto
    $u1 = new Usuario;

    //Composição
    $u1->addDados('Caio', '20251CRB45810510013', '987.143.231-99', '2009-07-06');

    foreach ($u1->getDados() as $c) {
        print 'Dados do Usuário: ' . $c->getnomeUsuario() . ' - ' . $c->getMatriculaUsuario() . ' - ' . $c->getCpfUsuario() . ' - ' . $c->getDataNascimentoUsuario();
    }
?>