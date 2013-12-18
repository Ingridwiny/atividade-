<?php

echo "<b><i>Hora certa<i/><b/> "; 
echo '<meta http-equiv="refresh" content="1">';

$horaAtual = getdate();
echo $horaAtual["hours"] -4;
echo ":"; 
echo $horaAtual["minutes"];
echo ":"; 
echo $horaAtual["seconds"];

echo "<br/>";
 
echo "<b><i>Data certa <i/><b/> "; 
$dataAtual = getdate();
echo $dataAtual["wday"];
echo ":"; 
echo $dataAtual["mon"];
echo ":"; 
echo $dataAtual["mday"];
 

$dataAtual = getdate();

switch($dataAtual["wday"]){
	case 0:
	echo "domingo";
	break;
	
	case 1:
	echo "segunda";
	break;
	 
	case 2:
 	echo "terça";
	break;
	
	case 3:
	echo"quarta";
	break;

	case 4:
	echo "quinta";
	break;

	case 5:
	echo "sexta";
	break;

	case 6:
	echo "sábado";
	break;


}
echo "<br/>";
echo "<br/>"; 
echo $dataAtual["mday"];
echo "/";
echo $dataAtual["mon"];
echo "/";
echo $dataAtual["year"];
echo "<br/>";
 
?>
