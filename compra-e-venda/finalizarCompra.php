<body>
<?php 
require '../componentes/head.php';
include "../banco/config.php";

$zerarCarrinhoQuery = "UPDATE cadastro_mercadoria
SET quantidadeCarrinho = 0
WHERE quantidadeCarrinho <> 0";
$zerarCarrinhoQueryExecutada = $mysqli->query($zerarCarrinhoQuery);

$excluirSemItensQuery = "DELETE FROM cadastro_mercadoria WHERE quantidadeEstoque = '0' AND quantidadeCarrinho = '0'";
$excluirSemItensQueryExecutada = $mysqli->query($excluirSemItensQuery);


if($zerarCarrinhoQuery) { ?>
    <script>
            swal({
            title: "Compra efetuada com sucesso!",
            text: `Devidas atualização foram feitas no banco.`,
            icon: "success",
        })
        .then(() => {
            if (confirm) {
                window.location.href = "../home/index.php";
            }
        });
    </script>
<?php } else { ?>
    <script>
        swal({
            title: "Alguma coisa deu errado :(",
            text: `Tente novamente mais tarde!`,
            icon: "error",
        })
        .then(() => {
            if (confirm) {
                window.location.href = "../home/index.php";
            }
        });
    </script>   
<?php } ?>
</body>