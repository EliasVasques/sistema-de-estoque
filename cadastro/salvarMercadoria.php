<?php require '../componentes/head.php' ?>

<body>

<?php
if (!empty($_POST)){
    include "../banco/config.php";
    $valor = $_POST['valor'];
    $tipoProduto = $_POST['tipoProduto'];
    $marca = $_POST['marca'];
    $quantidade = $_POST['quantidadeEstoque'];
    $codigoFornecedor = $_POST['codigoFornecedor'];
    $codigoBarra = $_POST['codigoBarra'];

    $sql = "INSERT INTO cadastro_mercadoria (valor, tipoProduto, marca, quantidadeEstoque, codigoFornecedor, codigoBarra)
    values ('$valor', '$tipoProduto', '$marca', '$quantidade', '$codigoFornecedor', '$codigoBarra')";
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