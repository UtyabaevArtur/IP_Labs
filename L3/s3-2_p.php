<?
$a = $_POST["a"];
$b = $_POST["b"];

switch ($_POST["z"]) {
    case 1:
        if ($a == null or $b == null) echo("Пустое значение!");
        else echo("$a + $b = " . ($a + $b));
        break;
    case 2:
        if ($a == null or $b == null) echo("Пустое значение!");
        else echo("$a * $b = " . ($a * $b));
        break;
    case 3:
        if ($a == null or $b == null) echo("Пустое значение!");
        else echo("$a - $b = " . ($a - $b));
        break;
    case 4:
        if ($a == null or $b == null) echo("Пустое значение!");
        elseif ($b == 0) echo("Деление невозможно");
        else echo("$a / $b = " . ($a / $b));
        break;
}
?>