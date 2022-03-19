<?php
echo '<title>Утябаев А.А.</title>';
require "lab-2-6-f.php";

$arr;
$n = rand(2, 10);
$m = rand(2, 10);

echo '<p>Вариант 11</p>';

table($arr,$n,$m);
echo"Таблица:";
echo '<br>';
table2($arr);
echo"Таблица с изменёнными значениями:";
echo '<br>';
t11($arr);
table2($arr);

echo '<br>';

echo '<p>Вариант 16</p>';

table($arr,$n,$n);
echo'Таблица:<br>';
table2($arr);
echo"Сумма элементов расположенных на главной диагонали:<br>".t16main($arr)."<br>Сумма элементов расположенных на побочной диагонали:<br>".t16reverse($arr)."<br><br>";

?>