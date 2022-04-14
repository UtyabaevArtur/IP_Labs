<html>
<body>
<?php
include ("checks.php");
require_once 'connect1.php';
$mysqli = new mysqli($host, $user, $password, $database);
if ($mysqli->connect_errno) {
    echo "Невозможно подключиться к серверу";
} 

$id = $_GET['id_seans'];
$date_seans = $_GET['date_seans'];
$id_film = $_GET['id_film'];
$id_zal = $_GET['id_zal'];
$count_svob = $_GET['count_svob'];
$count_zan = $_GET['count_zan'];

$result = $mysqli->query("UPDATE seans SET date_seans='$date_seans', id_film='$id_film', id_zal='$id_zal', count_svob='$count_svob', count_zan='$count_zan'  WHERE id_seans='$id'");

if ($result) {
    if ($_SESSION['type'] == 1)
        echo "Все сохранено.<p><a href=sean.php> Вернуться к списку сеансов </a>";
    elseif ($_SESSION['type'] == 2)
        echo "Все сохранено.<p><a href=seanAdm.php> Вернуться к списку сеансов </a>";
} else {
    if ($_SESSION['type'] == 1)
        echo "Ошибка сохранения. <p></p><a href=sean.php> Вернуться к списку сеансов </a>";
    elseif ($_SESSION['type'] == 2)
        echo "Ошибка сохранения. <p><a href=seanAdm.php> Вернуться к списку сеансов </a>";
}
?>
</body>
</html>