<?php
    //Classe Condicao
    class Condicao {
        //Atributos
        private $estadoConservacao;
        private $observacaoGeral;
        private $dataUltimaVistoria;

        //Métodos

        //Método construtor
        public function __construct ($estadoConservacao, $observacaoGeral, $dataUltimaVistoria) {
            $this->setEstadoConservacao($estadoConservacao);
            $this->setObservacaoGeral($observacaoGeral);
            $this->setDataUltimaVistoria($dataUltimaVistoria);
        }//Fim do método construtor

        //Método __destruct ()
        public function __destruct () {
        }//Fim do método __destruct ()

        //Método setEstadoConservacao ()
        public function setEstadoConservacao ($estadoConservacao) {
            $this->estadoConservacao = $estadoConservacao;
        }//Fim do método setEstadoConservacao ()

        //Método getEstadoConservacao ()
        public function getEstadoConservacao () {
            return $this->estadoConservacao;
        }//Fim do método getEstadoConservacao ()

        //Método setObservacaoGeral ()
        public function setObservacaoGeral ($observacaoGeral) {
            $this->observacaoGeral = $observacaoGeral;
        }//Fim do método setObservacaoGeral ()

        //Método getObservacaoGeral ()
        public function getObservacaoGeral () {
            return $this->observacaoGeral;
        }//Fim do método getObservacaoGeral ()

        //Método setDataUltimaVistoria ()
        public function setDataUltimaVistoria ($dataUltimaVistoria) {
            $this->dataUltimaVistoria = $dataUltimaVistoria;
        }//Fim do método setDataUltimaVistoria ()

        //Método getDataUltimaVistoria ()
        public function getDataUltimaVistoria () {
            return $this->dataUltimaVistoria;
        }//Fim do método getDataUltimaVistoria ()
    }//Fim da Classe Condicao
?>