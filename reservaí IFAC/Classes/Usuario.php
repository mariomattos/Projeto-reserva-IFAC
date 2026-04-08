<?php
    //Classe Usuario
    class Usuario {
        //Atributos
        private $matriculaUsuario;
        private $cpfUsuario;
        private $dataNascimentoUsuario;
        //Referência de memória
        private $caracteristicas;

        //Métodos

        //Método Construtor
        public function __contruct ($matriculaUsuario, $cpfUsuario, $dataNascimento) {
            $this->setMatriculaUsuario ($matriculaUsuario);
            $this->setCpfUsuario ($cpfUsuario);
            $this->setDataNascimento ($dataNascimento);
        }//Fim do método Construtor

        //Método setMatriculaUsuario ()
        public function setMatriculaUsuario ($matriculaUsuario) {
            $this->matriculaUsuario = $matriculaUsuario;
        }//Fim do Método setMatriculaUsuario ()

        //Método getMatriculaUsuario ()
        public function getMatriculaUsuario () {
            return $this->matriculaUsuario;
        }//Fim do Método getMatriculaUsuario ()

        //Método setCpfUsuario ()
        public function setCpfUsuario ($cpfUsuario) {
            $this->cpfUsuario = $cpfUsuario;
        }//Fim do Método setCpfUsuario ()

        //Método getCpfUsuario ()
        public function getCpfUsuario () {
            return $this->CpfUsuario;
        }//Fim do Método getCpfUsuario ()

        //Método setDataNascimentoUsuario ()
        public function setDataNascimentoUsuario ($dataNascimentoUsuario) {
            $this->dataNascimentoUsuario = $dataNascimentoUsuario;
        }//Fim do Método setDataNascimentoUsuario ()

        //Método getDataNascimentoUsuario ()
        public function getDataNascimentoUsuario () {
            return $this->dataNascimentoUsuario;
        }//Fim do Método getDataNascimentoUsuario ()

        //Método addCaracteristicas
        public function addCaracteristicas($id, $nome, $descricao, $quantidade) {
            $this->caracteristicas[] = new Caracteristicas ($id, $nome, $descricao, $quantidade);
        }//Fim do método addCaracteristicas()

        public function getCaracteristicas () {
            return $this->caracteristicas;
        }
    }//Fim da Classe Usuario
?>