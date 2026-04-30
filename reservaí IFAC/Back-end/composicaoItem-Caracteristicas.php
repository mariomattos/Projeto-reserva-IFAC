<?php
    //Requisiçao de Acesso
    require_once 'Classes/Caracteristicas.php';
    require_once 'Classes/Item.php';
    //Criação do Objeto
    $i1 = new Item('1');
    //Composiçao
    $i1->addCaracteristicas('Carteira', 'Carteira com apoio pro braço direito ou esquerdo, cores azul e branco.', '40');

    foreach ($i1->getCaracteristicas() as $c) {
        print 'Caracteristicas do Item: <br><br> Nome: ' . $c->getNome() . '<br>' . 'Descrição: ' . $c->getDescricao() . '<br>' . 'Quantidade: ' . $c->getQuantidade() . '<br>';
    }
    
    print 'ID: ' . $i1->getIdItem() . '<br>';
?>