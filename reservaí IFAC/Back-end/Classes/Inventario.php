<?php
    //Classe Inventario
    class Inventario {
        //Atributos
        private $item; //Composição

        //Método construtor
        public function __construct() {
            $this->item = array();
        }

        //Método addItem ()
        public function addItem ($idItem) {
            $this->item[] = new Item($idItem);
        }//Fim do método addItem ()

        public function getItem () {
            return $this->item;
        }
    }//Fim da Classe Inventario
?>