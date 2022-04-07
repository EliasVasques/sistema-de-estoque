<?php require '../componentes/head.php'; ?>

<?php 
  require '../componentes/navbar.php';
  require '../componentes/botao-voltar-home.php';
?>

<h2>Compra</h2>

<div class="input-group rounded" id="buscar-mercadoria">
  <input type="search" class="form-control rounded" 
  id="campo-pesquisa" placeholder="Digite o código do produto" aria-label="Search" aria-describedby="search-addon" />
  <span class="input-group-text border-0" id="search-addon">
    <i class="fas fa-search"></i>
  </span>
</div>

<table class="table table-striped busca">
  <thead>
    <tr>
      <th scope="col">Produto</th>
      <th scope="col">Preço</th>
      <th scope="col">Código</th>
    </tr>
  </thead>
  <tbody>
    <tr onclick="addCompra('Soda', 2.88, '1112638321')">
      <td>Soda</td>
      <td>R$2.88</td>
      <td>1112638321</td>
    </tr>
    <tr onclick="addCompra('Refri', 2.88, '1112638321')">
      <td>Refri</td>
      <td>R$2.88</td>
      <td>1112638321</td>
    </tr>
    <tr onclick="addCompra('Suquinho', 2.88, '1112638321')">
      <td>Suquinho</td>
      <td>R$2.88</td>
      <td>1112638321</td>
    </tr>
    <tr onclick="addCompra('Chá', 2.88, '1112638321')"> 
      <td>Chá</td>
      <td>R$2.88</td>
      <td>1112638321</td>
    </tr>
    <tr onclick="addCompra('Cerveja Amanteigada', 2.88, '1112638321')">
      <td>Cerveja Amanteigada</td>
      <td>R$2.88</td>
      <td>1112638321</td>
    </tr>
  </tbody>
</table>

<hr class="barra">

<div id="itens">
  <h3>Itens</h2>
  <table class="table table-striped">
  <tbody>
  </tbody>
  </table>
</div>

<hr class="barra">

<div class="total">
  <div>Total</div>
  <div class="valor">0</div>
</div>

<div id="finalizarCompra" onclick="mensagemRemovidoBancoComSucesso()">Finalizar Compra</div> 
<!-- fazer que ao clicar remove do banco os ítens(usa php), passando removerBanco array como parametro, o array contem o id dos itens -->

<script src="compra.js"></script>

<?php require '../componentes/footer.php' ?>