<?php require '../componentes/head.php' ?>

<body>
<?php
if (!empty($_POST)){
    include "../banco/config.php";
    $busca = (int)$_POST['busca'];

    

    $sql = "SELECT * FROM cadastro_mercadoria WHERE idProduto = $busca";
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();
    //print_r($dados);
    header('Location: index.php');

}?>
</body>