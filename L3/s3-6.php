<?php 
if (isset($_POST["firstButton"])) {
    echo join(array_unique(preg_split("//u", $_POST["prhase"])));
}

if (isset($_POST["secondButton"])) {
	$mass = str_split($_POST["prhase2"]);
	$firstSymbol = $_POST["firstSymbol"];
	$secondSymbol = $_POST["secondSymbol"];
	$sumFirst = 0;
	$sumSecond = 0;
	for ($i=0; $i < count($mass) ; $i++) { 
		if ($mass[$i] == $firstSymbol) {
			$sumFirst++;
		}
	}
	for ($i=0; $i < count($mass) ; $i++) { 
		if ($mass[$i] == $secondSymbol) {
			$sumSecond++;
		}
	}

	echo "Всего символов  ". $firstSymbol . " = " . $sumFirst . "<br> Всего символов  ". $secondSymbol . " = " . $sumSecond ;
}
?>