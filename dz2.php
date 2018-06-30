<?php
$x = rand(0,100);
echo "Число ".$x."<br>";

$a = 1;
$b = 1;

for ($i=$x; $i < $a; $i++) {
  echo " задуманное число НЕ входит в числовой ряд";
 if ($i == $a) {
    echo "задуманное число входит в числовой ряд";
  }
  else {
    $i = $a;
    $i = $a + $b;
    $b = $i;
    break;
  }
}
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Основы PHP</title>
  </head>
  <body>
  </body>
</html>
