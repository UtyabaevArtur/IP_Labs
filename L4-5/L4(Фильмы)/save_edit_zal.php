<html>
<body>
<?php
require_once 'connect1.php';
$mysqli = new mysqli($host, $user, $password, $database);
if ($mysqli->connect_errno) {
    echo "Невозможно подключиться к серверу";
} 


$id_zal = $_GET['id_zal'];
$name_z = $_GET['name_z'];
$category_z = $_GET['category_z'];

$zapros = "UPDATE zal SET name_z='$name_z', category_z='$category_z' 
WHERE id_zal='$id_zal'";

$result = $mysqli->query($zapros);

if ($result) {
    echo 'Все сохранено. <a href="zal.php"> Вернуться к списку кинозалов </a>';
} else {
    echo 'Ошибка сохранения. <a href="zal.php">Вернуться к списку кинозалов</a> ';
}
?>
</body>
</html>