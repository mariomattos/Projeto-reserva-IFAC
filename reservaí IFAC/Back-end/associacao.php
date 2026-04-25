<?php
    //Simula execução de back-end para manipular
    //as classes

    //Requisitar acesso de cada classe
    require_once 'Classes/Usuario.php';
    require_once 'Classes/Reserva.php';

    //Criar os objetos
    $u1 = new Usuario('Caio', '20251CRB45810510010', 15949587188, 16);
    $r1 = new Reserva(21049210, '22:09', 'quadrinha');

    //Associação
    $r1->setUsuario($u1);

    //Exibição de teste
    print 'ID da reserva: '.$r1->getID()."<br>\n";
    print 'Horário da reserva: '.$r1->getHorario()."<br>\n";
    print 'Espaço reservado: '.$r1->getEspaco()."<br>\n";
    print 'Usuário: '.$r1->getUsuario()->getNome()."<br>\n";
    print 'Matrícula do Usuário: '.$r1->getUsuario()->getMatricula()."<br>\n";
    print 'CPF do Usuário: '.$r1->getUsuario()->getCPF()."<br>\n";
    print 'Idade do Usuário: '.$r1->getUsuario()->getIdade()."<br>\n";
?>