<html>
<head><title> Добавление нового фильма </title></head>
<body>
<H2>Добавление нового фильма:</H2>
<?php include("checks.php"); ?>
<form action="save_new_film.php" method="get">
    Название: <input name="name_film" size="50" type="text">
    <br>Жанр: <input name="cinema" size="50" type="text">
    <br>Режиссер: <input name="director" size="50" type="text">
    <br>Год: <input name="year" size="5" type="int">
    <br>Сборы: <input name="fees" size="11" type="int">
    <p><input name="add" type="submit" value="Добавить">
        <input name="b2" type="reset" value="Очистить"></p>
</form>
<?php
if ($_SESSION['type'] == 1)
    echo "<p><a href=film.php> Вернуться к списку Фильмов </a>";
elseif ($_SESSION['type'] == 2)
    echo "<p><a href=filmAdm.php> Вернуться к списку Фильмов </a>";
?>
</body>
</html>
