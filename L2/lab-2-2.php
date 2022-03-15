<?php
echo '<title>Утябаев А.А.</title>';

$N = rand(3, 20);
$mass = array($N);

echo 'Массив из '. $N . ' элементов, заполненный случайными числами: ';
for ($i=0; $i<=$N-1; $i++){
    $mass[$i] = rand(10, 99);
    echo ($mass[$i].' ');
}

echo '<br>';

echo 'Массив в отсортированном виде: ';
for ($i=0; $i<=$N-1; $i++){
    echo ($mass[$i].' ');
}

echo '<br>';

$mass = array_reverse($mass);
echo 'Элементы массива в обратном порядке: ';
for ($i=0; $i<=$N-1; $i++){
    echo ($mass[$i].' ');
}

echo '<br>';

array_pop($mass);
echo('Массив после удаления последнего элемента: ');
for ($i=0; $i<=$N-1; $i++){
    echo ($mass[$i].' ');
}

echo '<br>';

for ($i=0; $i<=$N-1; $i++){
    $summ += $mass[$i];
}
echo 'Сумма элементов массива: '. $summ . '<br>';

$count = count($mass);
echo 'Количество элементов в массиве: '. $count;

echo '<br>';

$sred = $summ / $count;
$sred = round($sred, 2);
echo 'Среднее арифметическое для элементов массива: '. $sred;

echo '<br>';

$nalich = in_array(50, $mass);
if ($nalich == true) {
    echo 'Число 50 есть в массиве';
} else {
    echo 'Числа 50 нет в массиве';
}

echo '<br>';

$mass = array_unique($mass);
echo 'Массив из уникальных значений: ';
for ($i=0; $i<=$N-1; $i++){
    echo ($mass[$i].' ');
}

?>