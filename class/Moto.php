<?php

    require_once __DIR__ . "/Veiculo.php";

    final class Moto extends Veiculo {

        private $cavalos;
        private $bonus = 0.9;

        public function __construct($fabricante = '', $ano = '', $placa = '', $preco = 0.00, $cavalos = ''){
            $this->fabricante = $fabricante;
            $this->ano = $ano;
            $this->placa = $placa;
            $this->preco = $preco;
            $this->cavalos = $cavalos;
        }

        public function getCavalos(){
            return $this-> cavalos;
        }

        public function setCavalos($cavalos){
            $this->cavalos = $cavalos;
        }

        public function precoFinal($precoLiquido){
            return $precoLiquido * $this->bonus;
        }

    }


?>