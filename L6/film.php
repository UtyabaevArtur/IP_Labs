<html>
<head><title> Сведения о фильмах </title></head>

<v> <a href="http://f0592930.xsph.ru/">Вернуться назад</a></v><br><br>

<div>
<h2>Оператор</h2>
</div><br><br>
<body align="center">
<lable align="center">
<div align="center">
<h2>Сведения о фильмах:</h2>
</div>

<br>
<div align="center">
<table border="1">
    <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Жанр</th>
        <th>Режиссер</th>
        <th>Год</th>
        <th>Сборы</th>
        <th>Редактировать</th>
    </tr>
    </tr>
    <?php
    include("checks.php");
    require_once 'connect1.php';
    $link = mysqli_connect($host, $user, $password, $database) or die ("Невозможно
подключиться к серверу" . mysqli_error($link));
    $result = mysqli_query($link, "SELECT id_film, name_film, cinema, director, `year`, fees FROM films");
    mysqli_select_db($link, "films");

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['id_film'] . "</td>";
        echo "<td>" . $row['name_film'] . "</td>";
        echo "<td>" . $row['cinema'] . "</td>";
        echo "<td>" . $row['director'] . "</td>";
        echo "<td>" . $row['year'] . "</td>";
        echo "<td>" . $row['fees'] . "</td>";

        echo "<td><a href='edit_film.php?id_film=" . $row['id_film']
            . "'>Редактировать</a></td>"; 
        echo "</tr>";
    }
    print "</table>";
    $num_rows = mysqli_num_rows($result); 
    print("<P>Всего фильмов: $num_rows </p>");
    if ($_SESSION['type'] == 1) {
        echo "<p><a href=new_film.php> Добавить фильм</a>";
        echo "<p><a href=sean.php>Киносеанс</a>";
        echo "<p><a href=zal.php>Кинозал</a>";
        echo "<p><a href=edit_users.php?id_u=" . $_SESSION['id_u'] . "> Изменить данные оператора</a>";
    } elseif ($_SESSION['type'] == 2) {
        echo "<p><a href=new_film.php> Добавить фильм</a>";
        echo "<p><a href=seanAdm.php>Киносеанс</a>";
        echo "<p><a href=zalAdm.php>Кинозал</a>";
        echo "<p><a href=usersAdm.php>Изменить данные пользователей</a>";
    }
    echo "<p><a href=gen_pdf.php>Скачать pdf-файл</a>";
    echo "<p><a href=gen_xls.php>Скачать xls-файл</a>";
    include("checkSession.php");
    ?>
</body>
</html>