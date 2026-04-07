<?php
    //Classe Caracteristicas
    class Caracteristicas {
        //Atributos
        private $maxPessoas;
        private $nomeEspaco;
        private $descricaoEspaco;

        //Método construtor
        public function __construct ($maxPessoas, $nomeEspaco, $descricaoEspaco) {
            $this->setMaxPessoas($maxPessoas);
            $this->setNomeEspaco($nomeEspaco);
            $this->setDescricaoEspaco($descricaoEspaco);
        }//Fim do método construtor

        //Método __destruct ()
        public function __destruct () {
        }//Fim do método __destruct ()

        //Método setMaxPessoas ()
        public function setMaxPessoas ($maxPessoas) {
            if (is_numeric($maxPessoas) and $maxPessoas > 0) {
                $this->maxPessoas = $maxPessoas;
            }
        }//Fim do método setMaxPessoas ()

        //Método getMaxPessoas ()
        public function getMaxPessoas () {
            return $this->maxPessoas;
        }//Fim do método getMaxPessoas ()

        //Método setNomeEspaco ()
        public function setNomeEspaco ($nomeEspaco) {
            if (is_string($nomeEspaco)) {
                $this->nomeEspaco = $nomeEspaco;
            }
        }//Fim do método setNomeEspaco ()

        //Método getNomeEspaco ()
        public function getNomeEspaco () {
            return $this->nomeEspaco;
        }//Fim do método getNomeEspaco ()

        //Método setDescricaoEspaco ()
        public function setDescricaoEspaco ($descricaoEspaco) {
            if (is_string($descricaoEspaco)) {
                $this->descricaoEspaco = $descricaoEspaco;
            }
        }//Fim do método setDescricaoEspaco ()

        //Método getDescricaoEspaco ()
        public function getDescricaoEspaco () {
            return $this->descricaoEspaco;
        }//Fim do método getDescricaoEspaco ()
    }
?>