<?php
echo '<title>Утябаев А.А.</title>';
echo '<p>Вариант 11</p>';

function f($u, $t)
{
    if ($u > 2 )
        return pow(((pow($u, 2)) + $t), (1/3)) * (sin($t) * sin($t));
    elseif ($u <= 2)
        return log(abs((pow($u, 2)) / ($u + $t)));
}

$a = rand(1, 20);
$b = rand(1, 20);

$z = sin(f($b, $a)) + sqrt(abs(f($a, $b)));

echo "a = $a" . '<br>';
echo "b = $b" . '<br>';
echo "z = $z" . '<br>';


echo '<p>Вариант 16</p>';

function f2($u, $t)
{
    if ($u <= $t )
        return (((pow($u, 4)) + $t) / (cos($u + (pi/4))));
    elseif ($u > $t)
        return (log(abs($u + 4))/(sqrt(abs($t - 3))));
}

$a = rand(1, 20);
$b = rand(1, 20);

$z = log(abs(f2($a/$b, sin($a)))) + (f2($b, sqrt($a + $b)));

echo "a = $a" . '<br>';
echo "b = $b" . '<br>';
echo "z = $z" . '<br>';