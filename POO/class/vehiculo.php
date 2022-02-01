<?php

    class vehiculo{
        public $marca;   
        public $color;
        public $placa;
        public $modelo;
        private $chasis;
        private $motor;
        private $propietario; 
    

        public function __construct($mr, $cl, $md, $chs, $mtr){

            $this->marca = $mr;
            $this->color = $cl;
            $this->modelo = $md;
            $this->chasis = $chs;
            $this->motor = $mtr;
        }


        public function valorVenta($costo, $porcentaje){

            $ganancia = $costo * $porcentaje/100;
            $vta = $costo + $ganancia;

            return $vta;
        }

        public function setPropietario($pr){

            $this->propietario = $pr;
        }

        public function getPropietario(){

            return $this->propietario;
        }
    }