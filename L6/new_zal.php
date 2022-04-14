<html>
<head><title> Добавление нового кинозала </title></head>
<body>
<H2>Добавление нового кинозала:</H2>
<?php include("checks.php"); ?>
<form action="save_new_zal.php" method="get">
    Название: <input name="name_z" size="50" type="text">
    <br>Категория: <input name="category_z" size="50" type="text">
    <p><input name="add" type="submit" value="Добавить">
        <input name="b2" type="reset" value="Очистить"></p>
</form>
<?php
if ($_SESSION['type'] == 1)
    echo "<p><a href=zal.php> Вернуться к списку кинозалов </a>";
elseif ($_SESSION['type'] == 2)
    echo "<p><a href=zalAdm.php> Вернуться к списку кинозалов </a>";
?>
</body>
</html>
