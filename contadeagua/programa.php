<?php
$mes1 = 0; 
$mes2	 = 0;
$mes3 = 0;
$mediaConta = 0;
$mediaConsumo = 0;

$mes1 = $_POST ["mes1"]; 
$mes2 = $_POST ["mes2"];
$mes3 = $_POST ["mes3"];

$mediaConta = ($mes1+$mes2+$mes3)/3;
echo "Sua média da conta é R$ " . $mediaConta . "<br/>";

$mediaConsumo = $mediaConta / 2.50;
echo "sua media de consumo é " . $mediaConsumo. "m³ <br/>";

echo "A previsão da sua proxima conta com o aumento da tarifa é de R$ " . ($mediaConsumo * 3.50);

?>
