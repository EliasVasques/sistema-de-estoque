<?php require '../componentes/head.php' ?>

<body>
<?php require '../componentes/navbar.php' ?>

<h2>Busca</h2>

<?php require '../componentes/menu.php' ?>

<script>
  document.querySelector('#mercadoria .card').classList.add("naoEstaClicado");
  document.querySelector('#fornecedor .card').classList.add("naoEstaClicado");
</script>

<h2 id="titulo">Clientes</h2>

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
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Elias</td>
      <td>22222222222</td>
      <td>elias@gmail</td>
    </tr>
    <tr>
      <td>Elias</td>
      <td>22222222222</td>
      <td>elias@gmail</td>
    </tr>
    <tr>
      <td>Elias</td>
      <td>22222222222</td>
      <td>elias@gmail</td>
    </tr>
    <tr>
      <td>Elias</td>
      <td>22222222222</td>
      <td>elias@gmail</td>
    </tr>
    <tr>
      <td>Elias</td>
      <td>22222222222</td>
      <td>elias@gmail</td>
    </tr>
    <tr>
      <td>Elias</td>
      <td>22222222222</td>
      <td>elias@gmail</td>
    </tr>
  </tbody>
</table>

<?php require '../componentes/footer.php' ?>