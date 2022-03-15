<?php

echo '<title>Утябаев А.А.</title>';

$a = rand(-20, 20);
$c = rand(-20, 20);
$d = rand(-20, 20);

echo 'Вариант 12' . '<br>';
echo 'Результат:' . '<br>';

$numerator = (4 * $c) - ($d / 2);
$denominator = ($a * $a - 1);

if ($denominator === 0) {
    echo 'Деление на ноль.';
} else {
    echo '((4 * ', $c, ') - (', $d, ' / 2) \ ';
    echo '(', $a, ' * ', $a, ' - 1))';
    echo ' = ', $numerator / $denominator;
}

echo '<br>';
echo '<br>';

echo 'Вариант 2' . '<br>';
echo 'Результат:' . '<br>';

$numerator = ((2 * $c) - ($d / 23));
$denominator = 1 - $a / 3;

if ($d === 0 or $denominator === 0) {
    echo 'Деление на ноль.';
} else {
    echo '( (2 * ', $c, ') - (', $d, ' / 52) )';
    echo '( 1 - ', $a, ' / 3 )';
    echo ' = ', $numerator / $denominator;
} 