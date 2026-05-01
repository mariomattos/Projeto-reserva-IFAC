<?php
    //Classe Espaco
    class Espaco {
        //Atributos
        private $idEspaco;
        private $condicao;
        //Referência de memória
        private $reservas; //Agregação
        private $item; //Agregação
        private $caracteristicas; //Composição

        //Métodos

        //Método construtor
        public function __construct ($idEspaco, $condicao) {
            $this->setIdEspaco($idEspaco);
            $this->setCondicao($condicao);
            $this->caracteristicas = array();
            $this->reservas = array();
            $this->item = array();
        }//Fim do método construtor

        //Método setIdEspaco ()
        public function setIdEspaco ($idEspaco) {
            $this->idEspaco = $idEspaco;
        }//Fim do método setIdEspaco ()

        //Método getIdEspaco ()
        public function getIdEspaco () {
            return $this->idEspaco;
        }//Fim do método getIdEspaco ()

        //Método setCondicao ()
        public function setCondicao ($condicao) {
            $this->condicao = $condicao;
        }//Fim do método setCondicao ()

        //Método getCondicao ()
        public function getCondicao () {
            return $this->condicao;
        }//Fim do método getCondicao ()

        //Método addReserva ()
        public function addReserva(Reserva $r) {
            //Passando a referência do objeto r
            $this->reservas[] = $r;
        }//Fim do método addReserva()

        //Método getReservas ()
        public function getReservas () {
            return $this->reservas;
        }//Fim do método getReservas ()

        public function addItem (Item $i) {
            //Passando a referência do objeto r
            $this->itens[] = $i;
        }//Fim do método addReserva()

        //Método getItem ()
        public function getItem () {
            return $this->itens;
        }//Fim do método getItem ()

        //Método addCaracteristicas ()
        public function addCaracteristicas($nome, $descricao, $quantidade) {
            $this->caracteristicas[] = new Caracteristicas ($nome, $descricao, $quantidade);
        }//Fim do método addCaracteristicas()

        //Método getCaracteristicas ()
        public function getCaracteristicas () {
            return $this->caracteristicas;
        }//Fim do método getCaracteristicas ()
    }//Fim da classe Espaco
?>