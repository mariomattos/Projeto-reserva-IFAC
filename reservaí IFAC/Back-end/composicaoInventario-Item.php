<?php
    //Requisição de acesso
    require_once 'Classes/Inventario.php';
    require_once 'Classes/Item.php';
    //Criaçao do objeto
    $Inv1 = new Inventario ();
    //Composição
    $Inv1->addItem ('1');

    foreach ($Inv1->getItem() as $i) {
        print 'Caracterísiticas do Item: <br> <br> ID: ' . $i->getIdItem() . '<br>';
    }
?>