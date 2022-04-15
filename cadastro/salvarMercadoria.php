<?php require '../componentes/head.php' ?>

<body>
<?php
if (!empty($_POST)){
    include "../banco/config.php";
    $valor = $_POST['valor'];
    $tipoProduto = $_POST['tipoProduto'];
    $marca = $_POST['marca'];
    $quantidade = $_POST['quantidade'];
    $codigoFornecedor = $_POST['codigoFornecedor'];

    $sql = "INSERT INTO cadastro_mercadoria (valor, tipoProduto, marca, quantidade, codigoFornecedor)
    values ('$valor', '$tipoProduto', '$marca', '$quantidade', '$codigoFornecedor')";
    $query = $mysqli->query($sql);
    
    if($query){ ?>
        <script>
            swal({
                title: "Mercadoria cadastrada com sucesso!",
                text: "",
                icon: "success",
            })
            .then(() => {
                if (confirm) {
                    window.location.href = "mercadoria.php";
                }
            });
        </script>
        
    <?php }else{ ?>
        <script>
            swal({
                title: "Erro ao cadastrar mercadoria.",
                text: "",
                icon: "error",
            })
            .then(() => {
                if (confirm) {
                    window.location.href = "mercadoria.php";
                }
            });
        </script>
<?php }} ?>
</body>