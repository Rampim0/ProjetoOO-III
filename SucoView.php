<?php

require_once 'Suco.php';

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
        <label>Sabor:</label>
        <input type="text" name="sabor" id="sabor"><br/>
        <input type="submit" name="btnCadastrar" id="btnCadastrar" value="Cadastrar"> &emsp;&emsp;&emsp;
        <input type="submit" name="btnMostrar" id="btnMostrar" value="Mostrar Dados"> &emsp;&emsp;&emsp;
        <input type="submit" name="btnPreco" id="btnPreco" value="Verificar Preço"> &emsp;&emsp;&emsp;
    </form>    

    <?php

   

    if(isset($_POST['btnCadastrar'])){
        $objSuco = new Suco();
        
        $objSuco->setNome($_POST['nome']);
        $objSuco->setPreco($_POST['preco']);
        $objSuco->setSabor($_POST['sabor']);


        echo $objSuco->mostraBebida()."<br/>";

        if ($objSuco->verificaPreco($_POST['preco'])){
            echo "Suco muito barato";
        }else{
            echo "Suco caro";
        }
    }

    ?>

</body>
</html>