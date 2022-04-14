<?php
$host = 'localhost';
$database = 'f0592930_films';
$user = 'f0592930_root';
$password = 'root';
$link = mysqli_connect($host, $user, $password, $database)
or die("ошибка" . mysqli_error($link));
?>
