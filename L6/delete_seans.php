<?php
include("checks.php");
require_once 'connect1.php';
$mysqli = new mysqli($host, $user, $password, $database) or die ("Невозможно подключиться к серверу");
$id = $_GET['id_seans'];
if ($_SESSION['type'] == 2)
    $result = $mysqli->query("DELETE FROM seans WHERE id_seans='$id'");
else
    echo "Недостаточно прав";
header("Location: seanAdm.php");
exit;
?>
