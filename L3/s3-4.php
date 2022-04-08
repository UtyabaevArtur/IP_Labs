<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Утябаев А.А.</title>
</head>

<body>
    <FORM method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
        Логин
        <INPUT type="text" name="a" size="3">
        <P> <INPUT type="submit" name="obr" value="Проверить">
    </FORM>
    <?php
    if (isset($_POST["obr"])) {
        $s1 = $_POST["a"];
        $logitn = array("Иван", "Сергей", "Андрей", "Алексей");
        $answer;
        for ($i = 0; $i < count($logitn); $i++) {
            if ($s1 == $logitn[$i]) {
                $answer = "Здравствуйте, " . $logitn[$i];
                break;
            } else {
                $answer = "Вы не зарегистрированный пользователь!";
            }
        }
        echo $answer;
    }
    ?>
</body>
</html>