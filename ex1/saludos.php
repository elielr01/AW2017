<!DOCTYPE html>
<html>
  <head>
    <title>PHP</title>
  </head>
  <body>
    <?php
      $num = $_GET['num'];
      echo '<h1>Me has pedido que te salude ' . $num . ' veces.</h1>';

      if ((int)$num == 42) {
        echo '<p>En realidad, esa es la respuesta a la pregunta final sobre la vida, el universo y todo lo demás.</p>';
      } else {
        for ($i = 0; $i < (int)$num ; $i++) {
          echo '<p>' . $i . ' - ¡Hola Mundo!</p>';
        }
      }
    ?>
  </body>
</html>
