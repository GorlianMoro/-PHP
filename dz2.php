<?php
$x = rand(0,100);
echo "Число ".$x."<br>";

$a = 1;
$b = 1;
$c = 0;
    do {
      if ($a > $x) {
        echo " задуманное число НЕ входит в числовой ряд";
      }  if ($a == $x) {
          echo "задуманное число входит в числовой ряд";
        }
        else {
      $c = $a;
      $c = $a + $b;
      $b = $c;
    }
  } while (true);
?>

<DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Основы PHP</title>
  </head>
  <body>
  </body>
</html>
