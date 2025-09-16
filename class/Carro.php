<?php

    require_once __DIR__ . "/Veiculo.php";

    final class Carro extends Veiculo {

        private $portas;
        private $bonus = 0.75;

        public function __construct($fabricante = '', $ano = '', $placa = '', $preco = 0.00,  $portas = ''){
            $this->fabricante = $fabricante;
            $this->ano = $ano;
            $this->placa = $placa;
            $this->preco = $preco;
            $this->portas = $portas;
        }

        public function getPortas(){
            return $this-> portas;
        }

        public function setPortas($portas){
            $this->portas = $portas;
        }

        public function precoFinal($precoLiquido){
            return $precoLiquido * $this->bonus;
        }

    }


?>