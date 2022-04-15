<?
include("checks.php");
require_once 'connect1.php'; ?>
<html>
<head><title> Сведения о прользователях </title></head>

<body align="center">

<lable align="center">
<div align="center">
    <h2>Зарегистрированные пользователи:</h2>
</div><br><br>
<div align="center">
    <table border="1">
        <tr>
            <th> Имя</th>
            <th> Редактировать</th>
            <th> Уничтожить</th>
        </tr>

        <?php
        if ($_SESSION['type'] == 2) {
            $link = mysqli_connect($host, $user, $password, $database)
            or die("Ошибка " . mysqli_error($link));

            $result = mysqli_query($link, "SELECT id_u, username, `password` FROM users");
            mysqli_select_db($link, "users");

            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td><a href='edit_users.php?id_u=" . $row['id_u'] . "'> Редактировать </a> </td>";
                echo "<td><a href='delete_users.php?id_u=" . $row['id_u'] . "'> Удалить </a></td>";
                echo "</tr>";
            }
            print "</table>";
            $num_rows = mysqli_num_rows($result);
            print("<P> Всего пользователей: $num_rows </p>");
            echo "<p><a href=new_users.php> Добавить пользователя </a>";
            echo "<p><a href=filmAdm.php> На главную </a>";
        } else {
            echo "Недостаточно прав";
            echo "<p><a href=film.php> На главную </a>";
        }
        include("checkSession.php");
        ?>
</div>
</lable>
</body>
</html>