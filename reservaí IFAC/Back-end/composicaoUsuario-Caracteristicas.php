<?php
    //Requisiçao de Acesso
    require_once 'Classes/Caracteristicas.php';
    require_once 'Classes/Usuario.php';

    //Criaçao do Objeto
    $u1 = new Usuario ('20251CRB45810510000', '123.456.789-00', '12/07/1981', 'breno.silveira@ifac.edu.br', '****');
    //Composiçao
    $u1->addCaracteristicas('Breno Carrillo Silveira', '', '');

    foreach ($u1->getCaracteristicas() as $c) {
        print 'Dados do usuário: <br><br> Nome: ' . $c->getNome() . '<br>';
    }

    echo 'Matrícula: ' . $u1->getMatricula() . '<br>';
    echo 'CPF: ' . $u1->getCpfUsuario() . '<br>';
    echo 'Nascimento: ' . $u1->getDataNascimentoUsuario() . '<br>';
    echo 'E-mail: ' . $u1->getEmailUsuario() . '<br>';
?>