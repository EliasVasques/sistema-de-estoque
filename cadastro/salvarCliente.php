<?php require '../componentes/head.php' ?>

<body>

<?php
if (!empty($_POST)){
    include "../banco/config.php";
    $nome = $_POST['nome'];
    $CPF = $_POST['CPF'];
    $endereco = $_POST['endereco'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $CEP = $_POST['CEP'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    $sql = "INSERT INTO cadastro_cliente (nome, CPF, endereco, UF, cidade, CEP, telefone, email)
    values ('$nome', '$CPF', '$endereco', '$estado', '$cidade', '$CEP', '$telefone', '$email')";
    $query = $mysqli->query($sql);
    
    if($query){ ?>
        <script>
            swal({
                title: "Cliente cadastrado com sucesso!",
                text: "",
                icon: "success",
            })
            .then(() => {
                if (confirm) {
                    window.location.href = "cliente.php";
                }
            });
        </script>
        
    <?php }else{ ?>
        <script>
            swal({
                title: "Erro ao cadastrar cliente.",
                text: "",
                icon: "error",
            })
            .then(() => {
                if (confirm) {
                    window.location.href = "cliente.php";
                }
            });
        </script>
<?php }} ?>
</body>