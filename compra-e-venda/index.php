<?php require '../componentes/head.php'; ?>

<?php 
  require '../componentes/navbar.php';
  require '../componentes/botao-voltar-home.php';
?>

<?php 
  //$removerBanco = [];
?>

<!--
<table class="table table-striped">
  <thead>
    <tr> 
      <th scope="col">Produto</th>
      <th scope="col">Preço</th>
      <th scope="col">Código</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Coca</td>
      <td>R$2.99</td>
      <td>999999999999</td>
      <th scope="row">
          <img class="remover" src="../img/delete.jpg" alt="">
      </th>
    </tr>
    <tr>
      <td>Coca</td>
      <td>R$2.99</td>
      <td>999999999999</td>
      <th scope="row">
          <img class="remover" src="../img/delete.jpg" alt="">
      </th>
    </tr>
    <tr>
      <td>Coca</td>
      <td>R$2.99</td>
      <td>999999999999</td>
      <th scope="row">
          <img class="remover" src="../img/delete.jpg" alt="">
      </th>
    </tr>
  </tbody>
</table>
-->

<h2>Compra</h2>

<form class="buscar-produto"  method="POST">
  <div>
    <input type="search" class="form-control" />
  </div>
  <button type="button" class="btn btn-dark">
    <i class="fas fa-search"></i>
  </button>
</form>

<table class="table table-striped busca">
  <thead>
    <tr>
      <th scope="col">Produto</th>
      <th scope="col">Preço</th>
      <th scope="col">Código</th>
    </tr>
  </thead>

  <tbody>
  <?php

    include "../banco/config.php";

    if (!empty($_POST)){
      $busca = $_POST['busca'];
      $sql = "SELECT * FROM cadastro_mercadoria WHERE idProduto = $busca";
    } else {
      $sql = "SELECT * FROM cadastro_mercadoria";
    }
    $query = $mysqli->query($sql);
    while ($dados = $query->fetch_array()){ ?>
      <tr onclick="addCompra('<?php echo $dados['marca'] ?>', <?php echo $dados['valor'] ?>, '<?php echo $dados['idProduto'] ?>')">
        <td><?php echo $dados['marca']?></td>
        <td>R$<?php echo $dados['valor']?></td>
        <td><?php echo $dados['idProduto']?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>

<hr class="barra">

<div id="itens">
  <h3>Seu carrinho</h2>
  <table class="table table-striped">
  <thead>
    <tr> 
      <th scope="col">Produto</th>
      <th scope="col">Preço</th>
      <th scope="col">Código</th>
      <th scope="col"></th>
    </tr>
  </thead>
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