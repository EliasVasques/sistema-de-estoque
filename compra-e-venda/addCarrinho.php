<?php require '../componentes/head.php' ?>

<body>
<?php
if (!empty($_GET)){
    include "../banco/config.php";
    $codigoBarra = $_GET['codigoBarra'];

    /* ADD CARRINHO */
    $sql = "SELECT * FROM cadastro_mercadoria WHERE codigoBarra = $codigoBarra";
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();
    
    $valor = $dados['valor'];
    $tipoProduto = $dados['tipoProduto'];
    $marca = $dados['marca'];
    $quantidade = $dados['quantidade'];
    $codigoFornecedor = $dados['codigoFornecedor'];

    $sql = "INSERT INTO carrinho (valor, tipoProduto, marca, quantidade, codigoFornecedor, codigoBarra)
    values ('$valor', '$tipoProduto', '$marca', '$quantidade', '$codigoFornecedor', '$codigoBarra')";
    $query = $mysqli->query($sql);

    /* REMOVER CADASTRO_MERCADORIA*/
    $sql = "DELETE FROM cadastro_mercadoria WHERE codigoBarra = $codigoBarra";
    $query = $mysqli->query($sql);

    header('Location: '.'index.php');


} ?>
</body>