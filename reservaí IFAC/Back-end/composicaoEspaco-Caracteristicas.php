<?php
    //Requisiçao de Acesso
    require_once 'Classes/Caracteristicas.php';
    require_once 'Classes/Espaco.php';
    //Criaçao do Objeto
    $e1 = new Espaco ('1', 'Disponível');
    //Composiçao
    $e1->addCaracteristicas('Quadra', 'Espaço para práticas esportivas', '1');
    
    foreach ($e1->getCaracteristicas() as $c) {
        print 'Caracteristicas do Espaço: <br> <br> Nome: ' . $c->getNome() . '<br>' . 'Descrição: ' . $c->getDescricao() . '<br>' . 'Quantidade: ' . $c->getQuantidade() . '<br>';
    }

    echo 'ID do espaço: ' . $e1->getIdEspaco() . '<br>';
    echo 'Condição: ' . $e1->getCondicao() . '<br>';
?>