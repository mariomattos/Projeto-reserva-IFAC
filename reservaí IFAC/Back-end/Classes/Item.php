<?php
    //Classe Item
    class Item {
        //Atributos
        private $idItem;
        private $caracteristicas; //Composição
        //Métodos

        //Método construtor
        public function __construct ($idItem) {
            $this->setIdItem($idItem);
            $this->caracteristicas = array();
        }//Fim do método construtor

        //Método setIdItem()
        public function setIdItem ($idItem) {
            $this->idItem = $idItem;
        }//Fim do método setIdItem()

        //Método getIdItem()
        public function getIdItem () {
            return $this->idItem;
        }

        //Método addCaracteristicas ()
        public function addCaracteristicas($nome, $descricao, $quantidade) {
            $this->caracteristicas[] = new Caracteristicas ($nome, $descricao, $quantidade);
        }//Fim do método addCaracteristicas()

        //Método getCaracteristicas ()
        public function getCaracteristicas () {
            return $this->caracteristicas;
        }//Fim do método getCaracteristicas ()
    }//Fim da Classe Item
?>