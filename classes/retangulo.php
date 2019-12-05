<?php   

    class Retangulo {

        public $base;
        public $altura;

        public function calculaArea(){
            $area = ($this->base * $this->altura);
            return $area;
        }
    }

?>