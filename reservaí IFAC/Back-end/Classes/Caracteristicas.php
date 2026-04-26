<?php
    //Classe Caracteristicas
    class Caracteristicas {
        //Atributos
        private $nome;
        private $descricao;
        private $quantidade;

        //Métodos

        //Método Construtor
        public function __construct ($nome, $descricao, $quantidade) {
            $this->setNome ($nome);
            $this->setDescricao ($descricao);
            $this->setQuantidade ($quantidade);
        }//Fim do Método Construtor

        //Método __destruct ()
        public function __destruct () {
        }//Fim do método __destruct ()

        //Método setNome ()
        public function setNome ($nome) {
            $this->nome = $nome;
        }//Fim do Método setNome ()

        //Método getNome ()
        public function getNome () {
            return $this->nome;
        }//Fim do Método getNome ()

        //Método setDescricao ()
        public function setDescricao ($descricao) {
            $this->descricao = $descricao;
        }//Fim do Método setDescricao ()

        //Método getDescricao ()
        public function getDescricao () {
            return $this->descricao;
        }//Fim do Método getDescricao ()

        //Método setQuantidade ()
        public function setQuantidade ($quantidade) {
            $this->quantidade = $quantidade;
        }//Fim do Método setQuantidade ()
        
        //Método getQuantidade ()
        public function getQuantidade () {
            return $this->quantidade;
        }//Fim do Método getQuantidade ()
    }//Fim da Classe Caracteristicas
?>