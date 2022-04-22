<?php require '../componentes/head.php'; ?>

<?php 
  require '../componentes/navbar.php';
  require '../componentes/botao-voltar-home.php';
?>

<h1> <i>Busca</i> </h1>


<?php require '../componentes/menu.php' ?>

<script>
  document.querySelector('#mercadoria .card').classList.add("naoEstaClicado");
  document.querySelector('#fornecedor .card').classList.add("naoEstaClicado");
</script>

<h2 id="titulo">Clientes</h2>

<form class="buscar-cliente"  method="GET">
  <div>
    <input type="search" name="busca" class="form-control" />
  </div>
  <button type="submit" class="btn btn-dark">
    <i class="fas fa-search"></i>
  </button>
</form>
<a href="cliente.php">
  <p class="limpar-busca">limpar busca</p>
</a>


<table class="table table-striped busca">
  <thead>
    <tr>
      <th scope="col">ID</th>  
      <th scope="col">Nome</th>  
      <th scope="col">CPF</th>
      <th scope="col">Telefone</th>
      <th scope="col">E-mail</th>
      <th></th>
    </tr>
  </thead>

  <tbody>
  <?php

    include "../banco/config.php";

    if (!empty($_GET)){
      $pesquisa = $_GET['busca'];
      if(is_numeric($pesquisa)) { // não dá erro com string
        $busca = "SELECT * FROM cadastro_cliente WHERE nome = $pesquisa";
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

<?php require '../componentes/footer.php' ?>