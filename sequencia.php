<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequencia </title>
</head>

    <!--Atividade 129 -->
<body>

    <?php 

    if(isset(post["botal"])){
        include_once("Sequencia.class.php");
        $sequencia = new Sequencia ();
        $sequencia->setInicio($_POST["inicio"]);
        $sequencia->setFim($_POST["fim"]);
        if($_POST["mostrar"] == "todos")
        $sequencia->exiberTodosNumeros();
        elseif ($_POST["mostrar"] == "pares")
        $sequencia->exibirpares();
        elseif($_POST["mostrar"] == "impares")
        $sequencia->exibirImpares();

    }
    else{
    ?>
    
    }



    
</body>
</html>