<?php require '../componentes/head.php' ?>

<body>
<?php require '../componentes/navbar.php' ?>

<h2>Busca</h2>

<?php require '../componentes/menu.php' ?>
<script>
  document.querySelector('#cliente .card').classList.add("naoEstaClicado");
  document.querySelector('#fornecedor .card').classList.add("naoEstaClicado");
</script>

<h2 id="titulo">Mercadorias</h2>

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