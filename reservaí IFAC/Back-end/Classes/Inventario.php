<?php
    //Classe Inventario
    class Inventario {
        //Referência de Memória
        private $espaco;
        private $item;

        //Métodos
        public function addItem ($idItem, $nomeItem, $quantidadeItem, $descricaoItem) {
            $this->item[] = new Item ($idItem, $nomeItem, $quantidadeItem, $descricaoItem);
        }//Fim do método addItem()

        public function getItem () {
            return $this->item;
        }//Fim do método getItem ()1
    }//Fim da Classe Inventario
?>