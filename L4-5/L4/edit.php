<html>
<head>
<title> Редактирование данных о пользователе </title>
</head>
<body>
<?php
$mysqli = new mysqli("localhost", "root");
mysqli_connect("localhost","root","") or die ("Невозможно подключиться к серверу");
mysqli_query($mysqli, 'SET NAMES utf-8');
mysqli_select_db($mysqli, "users") or die("Нет такой таблицы!");
$rows=mysqli_query($mysqli, "SELECT user_name, user_login, user_password,
user_e_mail, user_info FROM user WHERE id_user=".$_GET['id_user']);
    while ($st = mysqli_fetch_array($rows)) {
        $id=$_GET['id_user'];
        $name = $st['user_name'];
        $login = $st['user_login'];
        $password = $st['user_password'];
        $e_mail = $st['user_e_mail'];
        $info = $st['user_info'];
        }
print "<form action='save_edit.php' metod='get'>";
print "Имя: <input name='name' size='50' type='text' value='".$name."'>";
print "<br>Логин: <input name='login' size='20' type='text' value='".$login."'>";
print "<br>Пароль: <input name='password' size='20' type='text' value='".$password."'>";
print "<br>Е-mail: <input name='e_mail' size='30' type='text' value='".$e_mail."'>";
print "<br>Информация: <textarea name='info' rows='4' cols='40'>".$info."</textarea>";
print "<input type='hidden' name='id_user' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к списку пользователей </a>";
?>
</body>
</html>