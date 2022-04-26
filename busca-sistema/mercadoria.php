<?php require '../componentes/head.php'; ?>

<?php 
  require '../componentes/navbar.php';
  require '../componentes/botao-voltar-home.php';
?>


<h1> <i>Busca</i> </h1>

<?php require '../componentes/menu.php' ?>
<script>
  document.querySelector('#cliente .card').classList.add("naoEstaClicado");
  document.querySelector('#fornecedor .card').classList.add("naoEstaClicado");
</script>

<h2 id="titulo">Mercadorias</h2>

<form class="buscar-mercadoria"  method="GET">
<div class="input-group rounded" id="buscar-mercadoria">
  <input type="search" name="busca" class="form-control rounded" 
  id="campo-pesquisa" placeholder="Digite o código de barras" aria-label="Search" aria-describedby="search-addon" />
  <button type="submit" class="input-group-text border-0" id="search-addon">
    <i class="fas fa-search"></i>
  </span>
</div>
</form>

<a href="mercadoria.php">
  <p class="limpar-busca">limpar busca</p>
</a>

  <tbody>
<?php

    include "../banco/config.php";
    $pesquisa = null;
    if (!empty($_GET)){
      $pesquisa = $_GET['busca'];
      if(is_numeric($pesquisa)) { // não dá erro com string
        $busca = "SELECT * FROM cadastro_mercadoria WHERE codigoBarra = '{$pesquisa}'";
        $query = $mysqli->query($busca);
        $dados = $query->fetch_array();
        if(!empty($dados)) { // não dá erro se não envontrar
      ?>
      <?php }}} ?>
  </tbody>
</table>

<div id="itens">
  <h3>Resultado da busca</h2>
  <table class="table table-striped">
  <thead>
    <tr> 
      <th scope="col">Código de Barra </th>  
      <th scope="col">Tipo dp Produto</th>  
      <th scope="col">Marca</th>
      <th scope="col">Quantidade em Estoque</th>
      <th scope="col">Valor</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
    $buscaMercadoria = "SELECT * FROM cadastro_mercadoria WHERE codigoBarra = '{$pesquisa}'";
    $buscaMercadoriaQuery = $mysqli->query($buscaMercadoria);
    while ($dados = $buscaMercadoriaQuery->fetch_array()){ ?>
      <tr>
        <td><?php echo $dados['codigoBarra']?></td>
        <td><?php echo $dados['tipoProduto']?></td>
        <td><?php echo $dados['marca']?></td>
        <td><?php echo $dados['quantidadeEstoque']?></td>
        <td><?php echo $dados['valor']?></td>
      </tr>
    <?php } ?>
  </tbody>
  </table>
</div>

<?php require '../componentes/footer.php' ?>

<?php require '../componentes/footer.php' ?>