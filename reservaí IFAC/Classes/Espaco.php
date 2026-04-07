<?php
    //Classe Espaco
    class Espaco {
        //Referências de memória
        private $inventario;
        private $condicao;
        //Métodos

        //Método addCaracteristicas ()
        public function addCaracteristicas ($maxPessoas, $nomeEspaco, $descricaoEspaco) {
            $this->inventario[] = new Caracteristicas ($maxPessoas, $nomeEspaco, $descricaoEspaco);
        }//Fim do método addCaracteristicas()

        //Método getCaracteristicas()
        public function getCaracteristicas () {
            return $this->inventario;
        }//Fim do método getCaracteristicas()
    }
?>