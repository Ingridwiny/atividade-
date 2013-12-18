<?php
$passagem = 0;
$passagem = $_POST["passagem"];
	if ($passagem <= 4){
		echo "o valor que ira pagar " . number_format($passagem, 2, ",", ",");
	 	echo $passagem * 1.40;
}
	
	if ($passagem >= 5){
		echo "o valor que ira pagar é R$ ";
		echo ($passagem -4) * 2.80 + 5.60;
}
?>
