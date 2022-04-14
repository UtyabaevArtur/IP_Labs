<html>
<head><title> Сведения о Фильмах </title></head>
<div align="left">
<a href="http://f0592930.xsph.ru/">Вернуться назад</a></div>
<body>

<lable align="center">
<div align="center">
<h2>Сведения о фильмах:</h2>
</div><br>
<div align="center">
<table border="1">
    <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Жанр</th>
        <th>Режиссер</th>
        <th>Год</th>
        <th>Кассовые сборы</th>
        <th>Редактировать</th>
        <th>Уничтожить</th>
    </tr>
    </tr>
    <?php
    require_once 'connect1.php';
    $link = mysqli_connect($host, $user, $password, $database) or die ("Невозможно
подключиться к серверу" . mysqli_error($link));
    $result = mysqli_query($link, "SELECT id_film, name_film, cinema, director, `year`, fees FROM films");
    mysqli_select_db($link, "users");

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['id_film'] . "</td>";
        echo "<td>" . $row['name_film'] . "</td>";
        echo "<td>" . $row['cinema'] . "</td>";
        echo "<td>" . $row['director'] . "</td>";
        echo "<td>" . $row['year'] . "</td>";
        echo "<td>" . $row['fees'] . "</td>";
        
        echo "<td><a href='edit_films.php?id_film=" . $row['id_film']
            . "'>Редактировать</a></td>";
        echo "<td><a href='delete_films.php?id_film=" . $row['id_film']
            . "'>Удалить</a></td>";
        echo "</tr>";
    }
    print "</table>";
    ?>
    </div><br>
    <div>
    <p><a href="new_films.php"> Добавить фильм</a>
    <p><a href="seans.php">Киносеанс</a>
    <p><a href="zal.php">Кинозал</a>
    <p><a href="gen_pdf.php">Скачать pdf-файл</a>
    <p><a href="gen_xls.php">Скачать xls-файл</a>
    </div>
    </lable>
</body>
</html>