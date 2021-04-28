<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TRABAJO PRACTICO Nº3</title>
  </head>
  <body>
    <h1> EJERCICIO 1 </h1>
      <h2 style="color:BROWN">
      <?php
      $n=1;
      while ($n <= 100) {
        echo "$n</p>";
        $n++;
      }
      ?>
    </h2>
<hr>
    <h1> EJERCICIO 2 </h1>
      <h2 style="color:BLUE">
        <?php
        $n=100;
        while ($n <= 100 and $n > 0) {
          echo "$n</p>";
          $n--;
        }
        ?>
    </h2>
<hr>
    <h1> EJERCICIO 3 </h1>
      <h2 style="color:GREEN">
      <?php
      echo "n = $n<br>";
      if (10<$n OR $n<2) {
        echo " $n es un numero mayor a 1 y menor a 10<br>";
      } else {
        echo " $n NO es un numero mayor a 1 y menor a 10<br>";
      }
      ?>
    </h2>
<hr>
    <h1> EJERCICIO 4 </h1>
      <h2 style="color:GREEN">
      <?php
      $numero1=5;
      $numero2=2;
      $suma=$numero1+$numero2;
      $resta=$numero1-$numero2;
      $multiplicacion=$numero1*$numero2;
      $division=$numero1/$numero2;
      $resto=$numero1%$numero2;

      echo "numero1 = $numero1<br>";
      echo "numero2 = $numero2<br>";
      if ($numero1>$numero2) {
        echo "$suma<br>";
        echo "$resta<br>";
      } elseif ($numero1<$numero2) {
        echo "$multiplicacion<br>"  ;
        echo "$division<br>";
        echo "$resto<br>";
      } else {
        echo " Los números ingresados son iguales <br>";
      }
      ?>
      </h2>

<hr>
  </body>
</html>
