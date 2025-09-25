<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
  </head>
  <body>
    <?php
      $doar_sangue = false;
      $idade = 15;
      $peso = 60.7;
    ?>
    <p>Atende aos requisitos:
      <?php
      if ($idade >= 16 && $idade <= 69 && $peso >= 50.0) {
        echo 'Atende aos requisitos';
      }else {
        echo 'Não atende aos requisitos';
      }
      ?>
    </p>


  </body>
</html>
