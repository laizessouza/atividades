<?php

date_default_timezone_set("Brazil/East");

echo '<meta http-equiv= "refresh" content="1">';

$dataAtual = getdate();

switch ($dataAtual["wday"]) {

case 0;
	echo "Domingo";
	break;
case 1; 
	echo "Segunda-Feira";
	break;
case 2; 
	echo "Terça-Feira";
	break;
case 3;
	echo "Quarta-Feira";
	break;	
case 4; 
	echo "Quinta-Feira";
	break;
case 5;
	echo "Sexta-Feira";
	break;
case 6;
	echo "Sábado";
	break;
	
}

echo " - ";

echo $dataAtual["mday"]; 
echo "/";
echo $dataAtual["mon"];
echo "/";
echo $dataAtual["year"]; 

echo "<br/>";

echo $dataAtual["hours"]-1; 
echo ":";
echo $dataAtual["minutes"];
echo ":";
echo $dataAtual[	"seconds"];



?>
