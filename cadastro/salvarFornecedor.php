<?php require '../componentes/head.php' ?>

<body>

<?php
if (!empty($_POST)){
    include "../banco/config.php";
    $nomeFantasia = $_POST['nomeFantasia'];
    $razaoSocial = $_POST['razaoSocial'];
    $CNPJ = $_POST['CNPJ'];
    $endereco = $_POST['endereco'];
    $UF = $_POST['UF'];
    $cidade = $_POST['cidade'];
    $CEP = $_POST['CEP'];
    $representante = $_POST['representante'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    $sql = "INSERT INTO cadastro_fornecedor (nomeFantasia, razaoSocial, CNPJ, endereco, UF, cidade, CEP, representante, telefone, email)
    values ('$nomeFantasia', '$razaoSocial', '$CNPJ', '$endereco', '$UF', '$cidade', '$CEP', '$representante', '$telefone', '$email')";
    $query = $mysqli->query($sql);
    
    if($query){ ?>
        <script>
            swal({
                title: "Fornecedor cadastrada com sucesso!",
                text: "",
                icon: "success",
            })
            .then(() => {
                if (confirm) {
                    window.location.href = "fornecedor.php";
                }
            });
        </script>
        
    <?php }else{ ?>
        <script>
            swal({
                title: "Erro ao cadastrar fornecedor.",
                text: "",
                icon: "error",
            })
            .then(() => {
                if (confirm) {
                    window.location.href = "fornecedor.php";
                }
            });
        </script>
<?php }} ?>
</body>