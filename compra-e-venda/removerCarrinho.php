<?php require '../componentes/head.php' ?>

<body>
<?php
if (!empty($_GET)){
    include "../banco/config.php";
    $codigoBarra = $_GET['codigoBarra'];

    $queryUpdate = "UPDATE cadastro_mercadoria
    SET quantidadeEstoque = quantidadeEstoque + quantidadeCarrinho, 
        quantidadeCarrinho = 0
    WHERE codigoBarra = $codigoBarra";
    $queryExecutada = $mysqli->query($queryUpdate);

    header('Location: '.'index.php');

} ?>
</body>