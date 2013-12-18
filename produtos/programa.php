<?php
$codigo = 0;

$codigo = $_POST ["codigo"];

switch ($codigo) {
	case 1:
		echo "caneta 1.20";	
		break;
	case 2:
		echo "lapis 0.80";
		break;
	case 3:
		echo "caderno 4.50";
		break;
	default:
		echo "produto não cadastrado";

}

?>
