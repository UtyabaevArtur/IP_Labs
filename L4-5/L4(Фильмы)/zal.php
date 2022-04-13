<html>
<head><title> Сведения о кинозалах </title></head>
<body align="center">

<lable align="center">
<div align="center">
<h2>Сведения о кинозалах:</h2>
</div><br>
<div align="center">
<table border="1">
    <tr>
        <th>id Зала</th>
        <th>Название</th>
        <th>Категория</th>
        <th>Редактировать</th>
        <th>Уничтожить</th>
    </tr>
</tr>
<?php
require_once 'connect1.php';
$link = mysqli_connect($host, $user, $password, $database) or die ("Невозможно
подключиться к серверу" . mysqli_error($link));
$result = mysqli_query($link, "SELECT id_zal, name_z, category_z FROM zal");
mysqli_select_db($link, "users");

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['id_zal'] . "</td>";
    echo "<td>" . $row['name_z'] . "</td>";
    echo "<td>" . $row['category_z'] . "</td>";
    echo "<td><a href='edit_zal.php?id_zal=" . $row['id_zal']
        . "'>Редактировать</a></td>"; 
    echo "<td><a href='delete_zal.php?id_zal=" . $row['id_zal']
        . "'>Удалить</a></td>";
    echo "</tr>";
}
print "</table>";
?>
<p><a href="new_zal.php"> Добавить кинозал </a>
<p><a href="index.php"> Вернуться назад </a>
</div>
</body>
</html>