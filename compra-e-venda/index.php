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
      $busca = $_GET['busca'];
      $sql = "SELECT * FROM cadastro_mercadoria WHERE codigoBarra = $busca";
      $query = $mysqli->query($sql);

      while ($dados = $query->fetch_array()){ ?>
      <form action="addCarrinho.php" method="GET">
          <tr>
            <td>
              <?php echo $dados['codigoBarra']?>
              <input type="hidden" name="codigoBarra" value="<?php echo $dados['codigoBarra']?>">
              
            </td>  
            <td><?php echo $dados['marca']?></td>
            <td>R$<?php echo $dados['valor']?></td>
            <td>
            
            <input type="number" id="quantidade" name="quantidade" min="1" max="<?php echo $dados['quantidade'] ?>">
          
            </td>
            <td>
              <button>comprar</button>
              <a href="addCarrinho.php?codigoBarra=<?php echo $dados['codigoBarra'] ?>"></a> 
            </td>
          </tr>
        
      <?php }} ?>
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
    $sql = "SELECT * FROM carrinho";
    $query = $mysqli->query($sql);
    while ($dados = $query->fetch_array()){ ?>
      <tr>
        <td><?php echo $dados['codigoBarra']?></td>
        <td><?php echo $dados['marca']?></td>
        <td>R$<?php echo $dados['valor']?></td>
        <td><?php echo $dados['quantidade']?></td>
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
    $sql = "SELECT SUM(valor) FROM carrinho";
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