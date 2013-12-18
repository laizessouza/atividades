<?php

$contagem = 0;
$chocoE = 0;
$chocoB = 0;
$promoE = 0;
$promoB = 0;

$chocoE = $_POST["chocoE"];
$chocoB = $_POST["chocoB"];

$contagem = 3;
while ($contagem <= $chocoE) {
	$promoB = $promoB + 1;
	$contagem = $contagem + 3;
	
}

$contagem = 2;
while ($contagem <= $chocoB) {
	$promoE = $promoE + 1;
	$contagem = $contagem + 2;

}

$contagem = 5; 	
while ($contagem <= $chocoB + $chocoE) { 
	$promoB = $promoB + 1;
	$contagem = $contagem + 5; 


}

echo "você ganhou essa quantidade de chocolate branco: " . ($promoE + $chocoE);
echo "</br>";
echo "você ganhou essa quantidade de chocolate escuro: " . ($chocoB + $promoB);

?>
