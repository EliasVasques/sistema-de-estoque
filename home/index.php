<?php require '../componentes/head.php' ?>

<body>
<?php require '../componentes/navbar.php' ?>

<!-- navbar link -->
<script>
  document.querySelector('.navbar-home').classList.add("clicado");
</script>

<h2>Sistema de Gerenciamento</h2>

<div class="cards">
    <a href="../cadastro/mercadoria.php">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="../img/cadastro.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Cadastro</h5>
            <p class="card-text"></p>
        </div>
        </div>
    </a>

    <a href="../compra-e-venda">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="../img/compra-e-venda.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Compra e Venda</h5>
            <p class="card-text"></p>
        </div>
        </div>
    </a>
    
    <a href="../busca-sistema/mercadoria.php">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="../img/buscar.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Buscar no sistema</h5>
            <p class="card-text"></p>
        </div>
        </div>
    </a>
    
</div>

<?php require '../componentes/footer.php' ?>