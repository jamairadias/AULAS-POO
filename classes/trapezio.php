<?php   

    class Trapezio {

        public $baseMaior;
        public $baseMenor;
        public $altura;

        public function calculaArea(){
            $area =(($this->baseMaior + $this->baseMenor) * $this->altura)/2;
            return $area;
        }
    }

?>