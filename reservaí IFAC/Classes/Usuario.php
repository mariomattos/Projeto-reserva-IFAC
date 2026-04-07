<?php
    //Classe Usuario
    class Usuario {
        //Referência de memória
        private $dados;

        //Métodos
        public function addDados($nomeUsuario, $matriculaUsuario, $cpfUsuario, $dataNascimentoUsuario) {
            $this->dados[] = new Dados ($nomeUsuario, $matriculaUsuario, $cpfUsuario, $dataNascimentoUsuario);
        }//Fim do método addDados()

        public function getDados () {
            return $this-> dados;
        }

    }//Fim da Classe Usuario
?>