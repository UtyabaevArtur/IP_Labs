<html>
<head><title>Киносеансы</title></head>

<div>
<h2>Оператор</h2>
</div><br><br>
<body align="center">

<lable align="center">
<div align="center">
<h2>Киносеансы:</h2>
</div><br>
<div align="center">
<table border="1">
    <tr>
        <th>ID</th>
        <th>Дата</th>
        <th>Фильм</th>
        <th>Кинозал</th>
        <th>Всего мест</th>
        <th>Занятых мест</th>
        <th>Редактировать</th>
    </tr>
    </tr>
    <?php
    include("checks.php");
    require_once 'connect1.php';
    $mysqli = new mysqli($host, $user, $password, $database);
    if ($mysqli->connect_errno) {
        echo "Невозможно подключиться к серверу";
    }
    $result = $mysqli->query("SELECT seans.id_seans, seans.date_seans, films.name_film as films, 
       zal.name_z as zal, seans.count_svob, seans.count_zan
FROM seans
LEFT JOIN films ON seans.id_film=films.id_film
LEFT JOIN zal ON seans.id_zal=zal.id_zal");

    $counter = 0;
    if ($result) {
        while ($row = $result->fetch_array()) {
            $id = $row['id_seans'];
            $date_seans = $row['date_seans'];
            $films = $row['films'];
            $zal = $row['zal'];
            $count_svob = $row['count_svob'];
            $count_zan = $row['count_zan'];

            $date_seans = date('d-m-Y H:i:s', strtotime($date_seans));
            
            echo "<tr>";
            echo "<td>$id</td><td>$date_seans</td><td>$films</td><td>$zal</td><td>$count_svob</td><td>$count_zan</td>";

            echo "<td><a href='edit_sean.php?id=" . $row['id_seans']
                . "'>Редактировать</a></td>"; 
            echo "</tr>";
        }
    }
    print "</table>";
    echo "<p><a href=new_sean.php> Добавить Сеанс </a>";
    if ($_SESSION['type'] == 1)
        echo "<p><a href=film.php> Вернуться назад </a>";
    elseif ($_SESSION['type'] == 2)
        echo "<p><a href=filmAdm.php> Вернуться назад </a>";
    include("checkSession.php");
    ?>

</body>
</html>
