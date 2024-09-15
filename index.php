<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




<?php

$d;
$a = rand(min: -10, max: 100);
$b = rand(min: -10, max: 100);
$c = rand(min: -10, max: 100);
if ($a != 0) {
    $d = $b ** 2 - 4 * $a * $c;

}

if ($d < 0) {
    echo "Роз'язків немає";
} elseif ($d > 0) {
    echo $x = -$b + sqrt($d) / 2;
    echo $x = -$b - sqrt($d) / 2;
} else {
    echo $x = round((-$b + sqrt($d)) / (2 * $a), 2);
}
?>
</body>
</html>


