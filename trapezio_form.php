<?php

  require_once("classes/trapezio.php");

  if($_POST){
    $baseMaior = $_POST["baseMaior"];
    $baseMenor = $_POST["baseMenor"];
    $altura = $_POST["altura"];

    $trapezio = new Trapezio();

    $trapezio->baseMaior = $baseMaior;
    $trapezio->baseMenor = $baseMenor;
    $trapezio->altura = $altura;
    
    $resultado = $trapezio->calculaArea();
  }


?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Digital House</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <form class="" action="" method="post">
      <div class="form-row">
        <div class="form-group col-md-12">
          <div class="col-md-4">
            <label for="baseMaior">Base Maior</label>
            <input type="text" class="form-control" name="baseMaior" id="baseMaior">
          </div>
        </div>
        <div class="form-group col-md-12">
          <div class="col-md-4">
            <label for="baseMenor">Base Menor</label>
            <input type="text" class="form-control" name="baseMenor" id="baseMenor">
          </div>
        </div>
        <div class="form-group col-md-12">
          <div class="col-md-4">
            <label for="altura">Altura</label>
            <input type="text" class="form-control" name="altura" id="altura">
          </div>
        </div>
        <div class="form-group col-md-12">
          <div class="col-md-2">
            <button type="submit" class="form-control btn btn-primary">Enviar</button>
          </div>
        </div>
      </div>
    </form>
    <?php if($resultado): ?>
      <div class="col-md-12">
        <div class="col-md-2 alert alert-success">
          <p><?= "A área do trapezio é: " . $resultado ?></p>
        </div>
      </div>
    <?php endif; ?>
  </body>
</html>