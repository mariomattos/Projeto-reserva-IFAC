<?php   
    //Requisição de Acesso
    require_once 'Classes/Reserva.php';
    require_once 'Classes/Usuario.php';
    //Criação dos Objetos
    $r1 = new Reserva ('1', '13:30', '04/05/2026');
    $u1 = new Usuario ('20251CRB45810510000', '', '', 'breno.silveira.ifac.edu.br', '');

    //Associação
    $r1->setUsuario ($u1);

    //Exibindo os dados
    echo 'Usuário que fez a reserva: <br><br>' . 'Matricula do usuario: ' . $u1->getMatricula() . '<br>';
    echo 'E-mail do usuário: ' . $u1->getEmailUsuario() . '<br>';
    echo 'Horário da reserva: ' . $r1->getHorarioReserva() . '<br>';
    echo 'Data da reserva: ' . $r1->getDataReserva() . '<br>';
?>