<?php
    //Classe Item
    class Item {
        //Referência de Memória
        private $idItem;
        private $nomeItem;
        private $quantidadeItem;
        private $descricaoItem;

        //Métodos

        //Método Construtor
        public function __construct ($idItem, $nomeItem, $quantidadeItem, $descricaoItem) {
            $this->setIdItem ($idItem);
            $this->setNomeItem ($nomeItem);
            $this->setQuantidadeItem ($quantidadeItem);
            $this->setDescricaoItem ($descricaoItem);
        }//Fim do Método Construtor

        //Método __destruct ()
        public function __destruct () {
        }//Fim do método __destruct ()

        //Método setIdItem ()
        public function setIdItem ($idItem) {
            if (is_string($idItem)) {
                $this->idItem = $idItem;
            }
        }//Fim do Método setIdItem ()

        //Método getIdItem ()
        public function getIdItem () {
            return $this->idItem;
        }//Fim do Método getIdItem ()

        //Método setNomeItem ()
        public function setNomeItem ($nomeItem) {
            $this->nomeItem = $nomeItem;
        }//Fim do Método setNomeItem ()

        //Método getNomeItem ()
        public function getNomeItem () {
            return $this->nomeItem;
        }//Fim do Método getIdItem ()

        //Método setQuantidadeItem ()
        public function setQuantidadeItem ($quantidadeItem) {
            $this->quantidadeItem = $quantidadeItem;
        }//Fim do Método setQuantidadeItem ()

        //Método getQuantidadeItem ()
        public function getQuantidadeItem () {
            return $this->quantidadeItem;
        }//Fim do Método getQuantidadeItem ()

        //Método setDescricaoItem ()
        public function setDescricaoItem ($descricaoItem) {
            $this->descricaoItem = $descricaoItem;
        }//Fim do Método setDescricaoItem

        //Método getDescricaoItem ()
        public function getDescricaoItem () {
            return $this->descricaoItem;
        }//Fim do Método getDescricaoItem ()
    }
?>