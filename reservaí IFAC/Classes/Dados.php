<?php
    //Classe Dados
    class Dados {
        //Atributos
        private $nomeUsuario;
        private $matriculaUsuario;
        private $cpfUsuario;
        private $dataNascimentoUsuario;

        //Métodos

        //Método construtor
        public function __construct ($nomeUsuario, $matriculaUsuario, $cpfUsuario, $dataNascimentoUsuario) {
            $this->setNomeUsuario($nomeUsuario);
            $this->setMatriculaUsuario($matriculaUsuario);
            $this->setCpfUsuario($cpfUsuario);
            $this->setDataNascimentoUsuario($dataNascimentoUsuario);
        }//Fim do método construtor

        //Método __destruct()
        public function __destruct() {
        }//Fim do método __destruct()

        //Método setNomeUsuario()
        public function setNomeUsuario ($nomeUsuario) {
            if (is_string($nomeUsuario)) {
                $this->nomeUsuario = $nomeUsuario;
            }
        }//Fim do método setNomeUsuario()

        //Método getNomeUsuario()
        public function getNomeUsuario () {
            return $this->nomeUsuario;
        }//Fim do método getNomeUsuario()

        //Método setMatriculaUsuario()
        public function setMatriculaUsuario ($matriculaUsuario) {
            if (is_string($matriculaUsuario)) {
                $this->matriculaUsuario = $matriculaUsuario;
            }
        }//Fim do método setMatriculaUsuario()

        //Método getMatriculaUsuario()
        public function getMatriculaUsuario () {
            return $this->matriculaUsuario;
        }//Fim do método getMatriculaUsuario()

        //Método setCpfUsuario()
        public function setCpfUsuario ($cpfUsuario) {
            if (is_string($cpfUsuario)) {
                $this->cpfUsuario = $cpfUsuario;
            }
        }//Fim do método setCpfUsuario()

        //Método getCpfUsuario()
        public function getCpfUsuario () {
            return $this->cpfUsuario;
        }//Fim do método getCpfUsuario()

        //Método setDataNascimentoUsuario()
        public function setDataNascimentoUsuario ($dataNascimentoUsuario) {
            if (is_string($dataNascimentoUsuario)) {
                $this->dataNascimentoUsuario = $dataNascimentoUsuario;
            }
        }//Fim do método setDataNascimentoUsuario()

        //Método getDataNascimentoUsuario()
        public function getDataNascimentoUsuario () {
            return $this->dataNascimentoUsuario;
        }//Fim do método getDataNascimentoUsuario()

    }//Fim da Classe Dados