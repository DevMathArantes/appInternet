<?php

    abstract class Veiculo {

        protected $fabricante;
        protected $ano;
        protected $placa;
        protected $preco;

        public function getFabricante(){
            return $this->fabricante;
        }
        public function getPlaca(){
            return $this->placa;
        }
        public function getAno(){
            return $this->ano;
        }
        public function getPreco(){
            return $this->preco;
        }

        public function setFabricante($fabricante){
            $this->fabricante = $fabricante;
        }
        public function setplaca($placa){
            $this->placa = $placa;
        }
        public function setAno($ano){
            $this->ano = $ano;
        }
        public function setPreco($preco){
            $this->preco = $preco;
        }

    }

?>