<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
  </head>
  <body>
    <?php

      function imposto($salario){
        if($salario <= 1903.98){
          $aliquota = 0;
        }elseif ($salario >=1903.99 && $salario <= 2826.65) {
          $aliquota = ($salario * 7.5) / 100;
        }elseif ($salario > 2826.65 && $salario <= 3751.05) {
          $aliquota = ($salario * 15) / 100;
        }elseif ($salario > 3751.05 && $salario <= 4664.68) {
          $aliquota = ($salario * 22.5) / 100;
        }else {
          $aliquota = ($salario * 27.5) / 100;
        }
        return $aliquota;
      }
    echo imposto(1500);
    echo '<br>';
    echo imposto(2300.65);
    echo '<br>';
    echo imposto(3000.50);
    echo '<br>';
    echo imposto(4000);
    echo '<br>';
    echo imposto(1200.40);
    ?>



  </body>
</html>
