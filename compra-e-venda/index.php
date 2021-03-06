<?php require '../componentes/head.php'; ?>

<?php 
  require '../componentes/navbar.php';
  require '../componentes/botao-voltar-home.php';
?>

<?php 
  //$removerBanco = [];
?>

<h1> <i>Compra</i> </h2>

<h3>Pesquise, temos de tudo!</h3>
<form class="buscar-produto"  method="GET">
  <div>
    <input type="search" name="busca" class="form-control" />
  </div>
  <button type="submit" class="btn btn-dark">
    <i class="fas fa-search"></i>
  </button>
</form>
<a href="index.php">
  <p class="limpar-busca">limpar busca</p>
</a>

<table class="table table-striped busca">
  <thead>
    <tr>
      <th scope="col">Código</th>  
      <th scope="col">Produto</th>
      <th scope="col">Preço</th>
      <th scope="col">Quantidade</th>
      <th></th>
    </tr>
  </thead>

  <tbody>
  <?php

    include "../banco/config.php";

    if (!empty($_GET)){
      $pesquisa = $_GET['busca'];
      if(is_numeric($pesquisa)) { // não dá erro com string
        $busca = "SELECT * FROM cadastro_mercadoria WHERE codigoBarra = $pesquisa";
        $query = $mysqli->query($busca);
        $dados = $query->fetch_array();
        if(!empty($dados)) { // não dá erro se não envontrar
      ?>
        <form action="addCarrinho.php" method="GET">
            <tr>
              <input type="hidden" name="codigoBarra" value="<?php echo $dados['codigoBarra']?>">
              <td>
                <?php echo $dados['codigoBarra'] ?>
              </td>  
              <td><?php echo $dados['marca']?></td>
              <td>R$<?php echo $dados['valor']?></td>
              <td>
                <input type="number" id="quantidadeCliente" name="quantidadeCliente" min="1" max="<?php echo $dados['quantidadeEstoque'] ?>">
              </td>
              <td>
                <button>comprar</button>
              </td>
            </tr>
      <?php }}} ?>
      </form>
  </tbody>
</table>

<hr class="barra">

<div id="itens">
  <h3>Seu carrinho</h2>
  <table class="table table-striped">
  <thead>
    <tr> 
      <th scope="col">Código</th>
      <th scope="col">Produto</th>
      <th scope="col">Preço</th>
      <th scope="col">Quantidade</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
    $todosTemCarrinho = "SELECT * FROM cadastro_mercadoria WHERE quantidadeCarrinho <> 0";
    $todosTemCarrinhoQuery = $mysqli->query($todosTemCarrinho);
    while ($dados = $todosTemCarrinhoQuery->fetch_array()){ ?>
      <tr>
        <td><?php echo $dados['codigoBarra']?></td>
        <td><?php echo $dados['marca']?></td>
        <td>R$<?php echo $dados['valor']?></td>
        <td><?php echo $dados['quantidadeCarrinho']?></td>
        <td>
          <a href="removerCarrinho.php?codigoBarra=<?php echo $dados['codigoBarra'] ?>">remover</a> 
        </td>
      </tr>
    <?php } ?>
  </tbody>
  </table>
</div>

<hr class="barra">

<div class="total">
  <div>Total</div>
  <?php
    $sql = "SELECT SUM(quantidadeCarrinho * valor) FROM cadastro_mercadoria";
    $query = $mysqli->query($sql);
  ?>
  <div class="valor">
    <?php echo $query->fetch_array()[0]; ?>
  </div>
</div>

<a href="finalizarCompra.php">
  <div id="finalizarCompra">
    Finalizar Compra
  </div> 
</a>

<script src="compra.js"></script>

<?php require '../componentes/footer.php' ?>