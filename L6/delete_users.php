<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
include ("checks.php");
require_once 'connect1.php';
if($_SESSION['type']==2) {
    if (isset($_POST['id_u'])) {

        $link = mysqli_connect($host, $user, $password, $database)
        or die("Ошибка " . mysqli_error($link));
        $id_u = mysqli_real_escape_string($link, $_POST['id_u']);

        $query = "DELETE FROM users WHERE id_u = '$id_u'";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

        mysqli_close($link);
        echo 'Cохранено. <a href="usersAdm.php"> Вернуться к списку пользователей </a>';

    }
    if (isset($_GET['id_u'])) {
        $id_u = htmlentities($_GET['id_u']);
        echo "
        <form method='POST'>
        <input type='hidden' name='id_u' value='$id_u' />
        <input type='submit' value='ОК'>
        </form>";
    }
}
else
{
    echo "Недостаточно прав";
    echo "<p><a href=film.php> На Главную </a>";
}
?>
</body>
</html>