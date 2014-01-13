<?php
require_once("menu.php");

session_start();
if (!isset($_SESSION["cadastros"])){
    $_SESSION["cadastros"] = array();

    }
$nome = $_REQUEST["nome"];
$cor = $_REQUEST["cor"];
$prazo = $_REQUEST["prazo"];
$detalhe= $_REQUEST["detalhe"];

$novo = true;
if(isset($_REQUEST["novo"])){
    $novo = false;
}

$produto = array();
$produto["nome"] = $nome;
$produto["cor"] = $cor;
$produto["novo"] = $novo;
$produto["prazo"] = $prazo;
$produto["detalhe"] = $detalhe;

array_push($_SESSION["cadastros"], $produto);
echo " Cadastro efetuado com sucesso ! ";
?>
