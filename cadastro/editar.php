<?php
    require_once("menu.php");

    session_start();
    
    if(!isset($_SESSION["cadastros"])){
       echo "Não existem pessoas para editar";
    }
    else{
        $id = $_REQUEST["id"];
        $nome = $_REQUEST["nome"];
        
        $cadastros =& $_SESSION["cadastros"];
        $cadastros[$id] = $nome;   
       
        echo "Edição efetuado com sucesso!";
    }


?>
