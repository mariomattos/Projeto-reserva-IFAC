<?php
    //Requisições de acesso
    require_once 'Classes/Espaco.php';
    require_once 'Classes/Caracteristicas.php';
    //Criação do objeto
    $e1 = new Espaco;
    //Composição
    $e1->addCaracteristicas('50', 'Auditório', 'Espaço para eventos e palestras');

    foreach ($e1->getCaracteristicas() as $c) {
        print 'Dados do Espaço: ' . $c->getMaxPessoas() . ' - ' . $c->getNomeEspaco() . ' - ' . $c->getDescricaoEspaco();
    }
?>