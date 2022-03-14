<?php require '../componentes/head.php' ?>
<?php require '../componentes/navbar.php' ?>
<body>

<h2>Busca</h2>

<div class="cards">
    <a href="mercadoria.php">
        <div class="card desativo" style="width: 18rem;">
        <img class="card-img-top" src="../img/mercadoria.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Mercadorias</h5>
        </div>
        </div>
    </a>

    <a href="#buscar-mercadoria">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="../img/fornecedor.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Fornecedores</h5>
        </div>
        </div>
    </a>
    
    <a href="cliente.php">
        <div class="card desativo" style="width: 18rem;">
        <img class="card-img-top" src="../img/cliente.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Clientes</h5>
        </div>
        </div>
    </a>
</div>

<h2>Fornecedores</h2>

<div class="input-group rounded" id="buscar-mercadoria">
  <input type="search" class="form-control rounded" 
  id="campo-pesquisa" placeholder="Nome do fornecedor" aria-label="Search" aria-describedby="search-addon" />
  <span class="input-group-text border-0" id="search-addon">
    <i class="fas fa-search"></i>
  </span>
</div>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Código</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Empresa</td>
      <td>555555555555</td>
    </tr>
    <tr>
      <td>Empresa</td>
      <td>555555555555</td>
    </tr>
    <tr>
      <td>Empresa</td>
      <td>555555555555</td>
    </tr>
    <tr>
      <td>Empresa</td>
      <td>555555555555</td>
    </tr>
  </tbody>
</table>

<?php require '../componentes/footer.php' ?>