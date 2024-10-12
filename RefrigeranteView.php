<?php
require_once 'Refrigerante.php';
session_start();


if (!isset($_SESSION['objRefrigerante'])) {
    $_SESSION['objRefrigerante'] = new Refrigerante();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda de Bebidas</title>
</head>

<body>
    <form action="" method="post">

        <label>Nome:</label>
        <input type="text" name="nome" id="nome"><br />
        <label>Preço:</label>
        <input type="number" name="preco" id="preco" step="0.01"><br />
        <label>Retornável:</label>
        <select name="retornavel" id="retornavel">
            <option value="">**Selecione**</option>
            <option value="1">Sim</option>
            <option value="0">Não</option>
        </select><br />

        <input type="submit" name="btnCadastrar" id="btnCadastrar" value="Cadastrar"> &emsp;&emsp;&emsp;
        <input type="submit" name="btnMostrar" id="btnMostrar" value="Mostrar Dados"> &emsp;&emsp;&emsp;
        <input type="submit" name="btnPreco" id="btnPreco" value="Verificar Preço"> &emsp;&emsp;&emsp;
        <input type="submit" name="btnLimpar" id="btnLimpar" value="Limpar"> &emsp;&emsp;&emsp;
    </form>

    <?php

        if (isset($_POST['btnCadastrar'])) {
            $_SESSION['objRefrigerante']->setNome($_POST['nome']);
            $_SESSION['objRefrigerante']->setPreco($_POST['preco']);
            $_SESSION['objRefrigerante']->setRetornavel($_POST['retornavel']);

            echo 'Refrigerante cadastrado com sucesso!';
        }

        if (isset($_POST['btnMostrar'])) {
            echo $_SESSION['objRefrigerante']->mostraBebida() . "<br/>";
        }

       

        if (isset($_POST['btnPreco'])) {
            if ($_SESSION['objRefrigerante']->verificaPreco($_SESSION['objRefrigerante']->getPreco())) {
                echo "Refrigerante muito barato";
            } else {
                echo "Refrigerante caro";
            }
        }

        if (isset($_POST['btnLimpar'])) {
            unset($_SESSION['objRefrigerante']);
            session_destroy();
        }

    ?>

</body>

</html>