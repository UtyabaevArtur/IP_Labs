<html>
<body>
<?php
include ("checks.php");
require_once 'connect1.php';
$mysqli = new mysqli($host, $user, $password, $database);
if ($mysqli->connect_errno) {
    echo "Невозможно подключиться к серверу";
} 

$id_film = $_GET['id_film'];

$name_film = $_GET['name_film'];
$cinema = $_GET['cinema'];
$director = $_GET['director'];
$year = $_GET['year'];
$fees = $_GET['fees'];

$zapros = "UPDATE films SET name_film='$name_film', cinema='$cinema',
director='$director', `year`='$year', fees='$fees'
WHERE id_film='$id_film'";

$result = $mysqli->query($zapros);

if ($result) {
    if ($_SESSION['type'] == 1)
        echo "Все сохранено.<a href=film.php> Вернуться к списку фильмов </a>";
    elseif ($_SESSION['type'] == 2)
        echo "Все сохранено.<a href=filmAdm.php> Вернуться к списку фильмов </a>";
} else {
    if ($_SESSION['type'] == 1)
        echo "Ошибка сохранения.<a href=film.php> Вернуться к списку фильмов </a>";
    elseif ($_SESSION['type'] == 2)
        echo "Ошибка сохранения.<a href=filmAdm.php> Вернуться к списку фильмов </a>";
}
?>
</body>
</html>