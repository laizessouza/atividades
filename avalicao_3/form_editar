<html>
    <head>
        <title>Cadastro de produtos </title>
    </head>
    <body>
        <?php
            require_once("menu.php");
        ?>
        <form action="editar.php" method="post">
           <label>Digite o código de produtos para editar: </label>
</br><input type="text" name="id" />
            </br>
            <label>Digite o novo nome do produto: </label>
            </br>
            <?php require_once("campos_produtos.php"); ?>
        <input type="submit" value="Editar" />
       </form>
    
    </body>
</html>

<?php
    require_once("menu.php");
    
    session_start();
    if (isset($_SESSION["cadastros"])){
        $cadastros = $_SESSION["cadastros"];
        
        foreach($cadastros as $id => $produto){
            if ($produto != null){
                echo "[$id] => " . $produto["nome"] . "</br>";
            }
        }
    }
    
    else{
        $id = $_REQUEST["id"];
         
         $cadastros =& $_SESSION["cadastros"];
         $cadastros[$id] = null;
         
         echo "Não existem produtos cadastradas";
    }
