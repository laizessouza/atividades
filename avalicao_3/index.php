<style>
    .m{
        color: blue;
    }
    .f{
        color: red;
    }
</style>

<?php
    require_once("menu.php");
    
    session_start();
    
    if (isset($_SESSION["cadastros"])){
        $cadastros = $_SESSION["cadastros"];
        
        echo "<dl>";
        foreach($cadastros as $produto){
            $cor = $produto["cor"];
            $novo = $produto["novo"];
            
            if($produto != null){
               echo "<dt class='$cor'>" . $produto["nome"] . "</dt>";
               echo "<dd>cor: "  . $cor . "</dd>";
               echo "<dd>prazo : " . $produto["prazo"] . "<dd>";
               echo "<dd>detalhe: " . $produto["detalhe"] . "<dd>";
               echo "<dd>produto novo: ";
               if($novo){
                    echo "Sim";
                }
               else{
                    echo "Não";
               }
               
               
            }
        }
        echo "</dl>";
    }
    else{
        echo "Não existem produtos cadastrados";
    }
    ?>
