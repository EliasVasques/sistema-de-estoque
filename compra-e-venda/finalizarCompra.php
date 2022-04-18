<body>
<?php 
require '../componentes/head.php';
include "../banco/config.php";

$sql = "DELETE FROM carrinho";
$query = $mysqli->query($sql);

if($query) { ?>
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