<?php
// Подключение к базе данных:
$mysqli = new mysqli("localhost", "root");
mysql_connect("localhost","root","") or die ("Невозможно подключиться к серверу");
mysql_query('SET NAMES cp1251'); // Тип кодировки
mysql_select_db("users") or die("Нет такой таблицы!");
// Строка запроса на добавление записи в таблицу:
$sql_add = "INSERT INTO user SET user_name='" . $_GET['name']
."', user_login='".$_GET['login']."', user_password='"
.$_GET['password']."', user_e_mail='".$_GET['e_mail'].
"', user_info='".$_GET['info']. "'";
mysqli_query($mysqli, $sql_add); // Выполнение запроса
if (mysqli_affected_rows($mysqli)>0) // если нет ошибок при выполнении запроса
{ print "<p>Вы зарегистрированы в базе данных.";
print "<p><a href=\"index.php\"> Вернуться к списку пользователей </a>"; }
else { print "Ошибка сохранения. <a href=\"index.php\"> Вернуться к списку книг </a>"; }
?>