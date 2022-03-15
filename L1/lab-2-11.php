<?php
echo '<title>Утябаев А.А.</title>';
echo 'Вариант 3' . '<br>';
$n=rand(1,1000);
echo 'Натуральное число = ' . $n . '<br>';
    {
        $Sum = array();
        for ($i = 2; $i < $n; $i++)
            {
                if (($n % $i) == 0)
                    {
                        $Sum[] = $i;
                    }
            }
        echo "sum = " . array_sum($Sum) . "\n";
    }
?>