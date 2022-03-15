<?php require '../componentes/head.php' ?>
<?php require '../componentes/navbar.php' ?>
<body>

<a href="../home">
  <img src="../img/voltar.png" class="voltar" alt="">
</a>

<h2>Busca</h2>

<div class="cards">
    <a href="#buscar-mercadoria">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="../img/mercadoria.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Mercadorias</h5>
        </div>
        </div>
    </a>

    <a href="fornecedor.php#buscar-mercadoria">
        <div class="card naoEstaClicado" style="width: 18rem;">
        <img class="card-img-top" src="../img/fornecedor.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Fornecedores</h5>
        </div>
        </div>
    </a>
    
    <a href="cliente.php#buscar-mercadoria">
        <div class="card naoEstaClicado" style="width: 18rem;">
        <img class="card-img-top" src="../img/cliente.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Clientes</h5>
        </div>
        </div>
    </a>
</div>

<h2>Mercadorias</h2>

<div class="input-group rounded" id="buscar-mercadoria">
  <input type="search" class="form-control rounded" 
  id="campo-pesquisa" placeholder="Digite o código do produto" aria-label="Search" aria-describedby="search-addon" />
  <span class="input-group-text border-0" id="search-addon">
    <i class="fas fa-search"></i>
  </span>
</div>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Produto</th>
      <th scope="col">Preço</th>
      <th scope="col">Código</th>
      <th scope="col">Quantidade</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Soda</td>
      <td>R$2.88</td>
      <td>1112638321</td>
      <td>500</td>
    </tr>
    <tr>
      <td>Soda</td>
      <td>R$2.88</td>
      <td>1112638321</td>
      <td>500</td>
    </tr>
    <tr>
      <td>Soda</td>
      <td>R$2.88</td>
      <td>1112638321</td>
      <td>500</td>
    </tr>
    <tr>
      <td>Soda</td>
      <td>R$2.88</td>
      <td>1112638321</td>
      <td>500</td>
    </tr>
    <tr>
      <td>Soda</td>
      <td>R$2.88</td>
      <td>1112638321</td>
      <td>500</td>
    </tr>
    <tr>
      <td>Soda</td>
      <td>R$2.88</td>
      <td>1112638321</td>
      <td>500</td>
    </tr>
    <tr>
      <td>Soda</td>
      <td>R$2.88</td>
      <td>1112638321</td>
      <td>500</td>
    </tr>
    <tr>
      <td>Soda</td>
      <td>R$2.88</td>
      <td>1112638321</td>
      <td>500</td>
    </tr>
    <tr>
      <td>Soda</td>
      <td>R$2.88</td>
      <td>1112638321</td>
      <td>500</td>
    </tr>
    <tr>
      <td>Soda</td>
      <td>R$2.88</td>
      <td>1112638321</td>
      <td>500</td>
    </tr>
  </tbody>
</table>

<?php require '../componentes/footer.php' ?>