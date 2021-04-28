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
        $f=2;
        while ($f <= 100) {
          echo "$f</p>";
          $f=$f+2;
        }
        ?>
    </h2>
<hr>
    <h1> EJERCICIO 4 </h1>
      <h2 style="color:RED">
        <?php
        $f=1;
        while ($f <= 100) {
          echo "$f</p>";
          $f=$f+2;
        }
        ?>
    </h2>
<hr>
    <h1> EJERCICIO 5 </h1>
      <h2 style="color:violet">
        <?php
        $r=0;
        for ($i=1; $i<=20; $i++) {
        $r=$i+$r;
        echo "$r<br>";
        }
        ?>
    </h2>
<hr>
    <h1> EJERCICIO 6 </h1>
      <h2 style="color:violet">
        <?php
        $r=0;
        for ($i=2; $i<=20; $i=$i+2) {
        $r=$i+$r;
        echo "$r<br>";
        }
        ?>
      </h2>

  </body>
</html>
