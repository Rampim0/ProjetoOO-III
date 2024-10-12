<?php

require_once 'Vinho.php';

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
        <input type="text" name="nome" id="nome"><br/>
        <label>Preço:</label>
        <input type="number" name="preco" id="preco" step="0.01"><br/>
        <label>Safra:</label>
        <input type="number" name="safra" id="safra"><br/>
        <label>Tipo:</label>
        <input type="text" name="tipo" id="tipo"><br/>
        <input type="submit" name="btnCadastrar" id="btnCadastrar" value="Cadastrar"> &emsp;&emsp;&emsp;
        <input type="submit" name="btnMostrar" id="btnMostrar" value="Mostrar Dados"> &emsp;&emsp;&emsp;
        <input type="submit" name="btnPreco" id="btnPreco" value="Verificar Preço"> &emsp;&emsp;&emsp;
    </form>    

    <?php

   

    if(isset($_POST['btnCadastrar'])){
        $objVinho = new Vinho();
        
        $objVinho->setNome($_POST['nome']);
        $objVinho->setPreco($_POST['preco']);
        $objVinho->setSafra($_POST['safra']);
        $objVinho->setTipo($_POST['tipo']);


        echo $objVinho->mostraBebida()."<br/>";

        if ($objVinho->verificaPreco($_POST['preco'])){
            echo "Vinho muito barato";
        }else{
            echo "Vinho caro";
        }
    }

    ?>

</body>
</html>