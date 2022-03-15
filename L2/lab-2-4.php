<?php
echo '<title>Утябаев А.А.</title>';
echo '<p>Вариант 11</p>';

$A = array();
$N = rand(3, 30);

for ($i = 0; $i < $N; $i++) {
    $A[] = rand(-50,50);
}
echo 'Исходный массив: ';
echo '<br>';

foreach($A as $value) {
echo "$value ";
}

$sum = 0;
for ($i=0; $i<$N; $i++) {
    if (abs($A[$i]) < ($i * $i)) {
    $sum+=$A[$i];
    } 
}

echo '<br>';
echo 'Сумма элементов: ' . $sum;
echo '<br>';
?>