<?php
    require_once("menu.php");
    
    session_start();
    if (!isset($_SESSION["cadastros"])){
        echo "Não existem produtos para editar";
    }
    else{
        $id = $_REQUEST["id"];
        $nome = $_REQUEST["nome"];
        $cor = $_REQUEST["cor"];
        $detalhe = $_REQUEST["detalhe"];
        $prazo = $_REQUEST["prazo"];
        
        $novo = false;
        if(isset($_REQUEST["novo"])){
         $novo = true;
        }

        $produto = array();
        $produto["nome"] = $nome;
        $produto["cor"] = $cor;
        $produto["novo"] = $novo;
        $produto["detalhe"] = $detalhe;
        $produto["prazo"]= $prazo;
        
        $cadastros =& $_SESSION["cadastros"];
        $cadastros[$id] = $produto;
        
        echo "Edição efetuada com sucesso !";
        
    }
    ?>
