<?php require '../componentes/head.php' ?>
<body>


<?php 

if (!empty($_GET)){
    include "../banco/config.php";
   
    $quantidadeCliente = $_GET['quantidadeCliente'];
    $codigoBarra = $_GET['codigoBarra'];

    $selecionaMercadoria = "SELECT * FROM cadastro_mercadoria WHERE codigoBarra = $codigoBarra";
    $selecionaMercadoriaQuery = $mysqli->query($selecionaMercadoria);
    $dadosMercadoria = $selecionaMercadoriaQuery->fetch_array();


    $valor = $dadosMercadoria['valor'];
    $tipoProduto = $dadosMercadoria['tipoProduto'];
    $marca = $dadosMercadoria['marca'];
    $quantidadeEstoque = $dadosMercadoria['quantidadeEstoque'];
    $quantidadeCarrinho = $dadosMercadoria['quantidadeCarrinho'];
    $codigoFornecedor = $dadosMercadoria['codigoFornecedor'];

    $novoQuantidadeEstoque = $quantidadeEstoque - $quantidadeCliente;
    $novoQuantidadeCarrinho= $quantidadeCliente + $quantidadeCarrinho;
    $queryUpdate = "UPDATE cadastro_mercadoria
    SET quantidadeEstoque = $novoQuantidadeEstoque, 
        quantidadeCarrinho = $novoQuantidadeCarrinho
    WHERE codigoBarra = $codigoBarra";
    $updateQueryExecutada = $mysqli->query($queryUpdate);

    header('Location: '.'index.php');


} ?>
</body>