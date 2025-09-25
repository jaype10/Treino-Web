<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
  </head>
  <body>
    <?php

    $megaSena = array();
    $num = 0;

    while(count($megaSena) < 6){
    $num = rand(1, 60);
    if (!in_array($num, $megaSena)) {
      $megaSena[] = $num;
    }
    }

    print_r($megaSena);

    ?>



  </body>
</html>
