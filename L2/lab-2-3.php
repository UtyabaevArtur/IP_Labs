<?php
echo '<title>Утябаев А.А.</title>';

echo "Массив: ";
    $cust = array(
        "cnum" => "2001",
        "cname" => "Hoffman",
        "city" => "London",
        "snum" => "1001"
    );

echo '<br>';

echo "<pre>";
print_r($cust);
echo "</pre>";

echo 'Добавление "rating": ';
$cust["rating"] = 100;
echo "<pre>";
print_r($cust);
echo "</pre>";

echo 'Сортировка по значениям:';
asort($cust);
echo "<pre>";
print_r($cust);
echo "</pre>";

echo 'Сортировка по ключам:';
ksort($cust);
echo "<pre>";
print_r($cust);
echo "</pre>";

echo'Сортировка с помощью sort():';
sort($cust);
echo "<pre>";
print_r($cust);
echo "</pre>";

?>