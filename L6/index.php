<!DOCTYPE html>
<html lang="en">
    <head><title> Авторизация</title></head>
<v> <a href="http://f0592930.xsph.ru/">Вернуться назад</a></v><br><br>

<body align="center">

<adm>
        Администратор:<br>
        Логин - admin<br>
        Пароль - admin<br><br>
        Оператор:<br>
        Логин - admin1<br>
        Пароль - admin1<br>
</adm>

<div >
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <h2 align="center">Авторизация</h2>
    
    <p align="left">
    Введите логин: <input type="text" size=21 name="user"> <br><br>
    Введите пароль: <input type="password" name="pass"> <br></p>
   <p align="center"><input type="submit" name="come" value="Войти">
    <input type="reset" name="reset" value="Очистить"></p>
</form>
<?php
require_once 'connect1.php';
if (isset($_POST["come"])) {
    $link = mysqli_connect($host, $user, $password, $database) or die ("Невозможно
подключиться к серверу" . mysqli_error($link));
    $user = $link->query("SELECT id_u, username, password, type FROM users");
    $username = $_POST["user"];
    $password = $_POST["pass"];
    $errFlag = false;
    
    while ($data = mysqli_fetch_array($user)) {
        $usernameBD = $data['username'];
        $passwordBD = $data['password'];
        $typeBD = $data['type'];
        $idUserBD = $data['id_u'];

        if ($username === $usernameBD && md5($password) === $passwordBD) {
            $errFlag = true;
            session_start();
            $_SESSION['type'] = $typeBD;
            $_SESSION['id_u'] = $idUserBD;
            break;
        } else
            $errFlag = false;
    }

    if ($errFlag && $_SESSION['type'] == 1)
        header("Refresh:0; url=film.php");
    elseif ($errFlag && $_SESSION['type'] == 2)
        header("Refresh:0; url=filmAdm.php");
    else
        echo "Логин или пароль введен не верно";

}
?>
<br>
</body>
</html>