<html>
    <head>
        <title>Cadastro de produtos </title>
    </head>
    <body>
        <?php
            require_once("menu.php");
        ?>
        <form action="cadastrar.php" method="post">
            <label>Nome: </label>
            <br/>
            <?php require_once("campos_produtos.php"); ?>
            <input type="submit" value="Enviar" />
        </form>
    
    </body>
</html>
