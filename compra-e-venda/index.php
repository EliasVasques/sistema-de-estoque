<?php require '../componentes/head.php'; ?>

<?php 
  require '../componentes/navbar.php';
  require '../componentes/botao-voltar-home.php';
?>

<?php 
  //$removerBanco = [];
?>

<h2>Compra</h2>

<form method="POST" >
    <input type="search" class="form-control rounded" 
    id="campo-pesquisa" name="busca" placeholder="Digite o código do produto" aria-label="Search" aria-describedby="search-addon" />

    <button class="input-group-text border-0" id="search-addon">
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