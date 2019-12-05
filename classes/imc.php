<?php

  class IndiceMassaCorporal {

    public $peso;
    public $altura;

    public function massaCorporal(){
      $imc = ($this->peso / ($this->altura * $this->altura));
      return $imc;
    }

    public function situacaoPeso(){
      $situacao = $this->massaCorporal();

      if($situacao < 17){
        return "Nossaaaa. Você está muito abaixo do peso";
      } else if ($situacao >=17 && $situacao < 18.5){
        return "Você está abaixo do peso";
      } else if ($situacao >= 18.5 && $situacao < 25){
        return "Seu peso está ideal";
      } else if ($situacao >= 25 && $situacao < 30){
        return "Uaaaau. Você está acima do peso, emagreca para melhorar sua saúde";
      } else {
        return "Tome cuidado. Você está com obesidade";
      }
    }
  }

?>