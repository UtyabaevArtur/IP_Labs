<html>
<head>
    <title> Редактирование данных кинозалов </title>
</head>
<body>
<?php
require_once 'connect1.php';
$mysqli = new mysqli($host, $user, $password, $database);
if ($mysqli->connect_errno) {
    echo "Невозможно подключиться к серверу";
}
$id_zal = $_GET['id_zal'];

$result = $mysqli->query("SELECT name_z, category_z FROM zal WHERE id_zal='$id_zal'");
if ($result) {
    while ($gm = $result->fetch_array()) {
        $name_z = $gm['name_z'];
        $category_z = $gm['category_z'];
    }
}

print "<form action='save_edit_zal.php' method='get'>";
print "Название зала: <input name='name_z' size='50' type='text'
value='$name_z'>";
print "<br>Категория: <input name='category_z' size='50' type='text'
value='$category_z'>";
print "<input type='hidden' name='id_zal' size='11' type='int'
value='$id_zal'>";
print "<input type='submit' name='save' value='Сохранить'>";
print "</form>";
print "<p><a href='zal.php'> Вернуться к списку Кинозалов </a>";
?>
</body>
</html>