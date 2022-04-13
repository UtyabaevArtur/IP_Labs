<html>
<head><title>Киносеансы</title></head>
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
        <th>Уничтожить</th>
    </tr>
    </tr>
    <?php
    require_once 'connect1.php';
    $mysqli = new mysqli($host, $user, $password, $database);
    if ($mysqli->connect_errno) {
        echo "Невозможно подключиться к серверу";
    }

    $result = $mysqli->query("SELECT id_seans, date_seans, films.name_film as films, 
       zal.name_z as zal, count_svob, count_zan 
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

            echo "<td><a href='edit_seans.php?id_seans=" . $row['id_seans']
                . "'>Редактировать</a></td>";
            echo "<td><a href='delete_seans.php?id_seans=" . $row['id_seans']
                . "'>Удалить</a></td>";
            echo "</tr>";
        }
    }
    print "</table>";
    ?>
    <p><a href="new_seans.php"> Добавить сеанс </a>
    <p><a href="index.php"> Вернуться назад </a>
    </div>
</body>
</html>
