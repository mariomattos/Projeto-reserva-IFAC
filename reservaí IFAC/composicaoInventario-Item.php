<?php
    //Requisições de acesso
    require_once 'Classes/Inventario.php';
    require_once 'Classes/ItemQueVaiComporInventário.php';

    //Criação do objeto
    $i1 = new Inventario;

    //Composição
    $i1->addItem('1', 'Cadeira', '10', 'Cadeira de Plástico');

    foreach ($i1->getItem() as $c) {
        print 'Dados do Item: ' . $c->getIdItem() . ' - ' . $c->getNomeItem() . ' - ' . $c->getQuantidadeItem() . ' - ' . $c->getDescricaoItem();
    }
?>