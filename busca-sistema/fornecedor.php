<?php require '../componentes/head.php'; ?>

<?php 
  require '../componentes/navbar.php';
  require '../componentes/botao-voltar-home.php';
?>


<h2>Busca</h2>

<?php require '../componentes/menu.php' ?>
<script>
  document.querySelector('#mercadoria .card').classList.add("naoEstaClicado");
  document.querySelector('#cliente .card').classList.add("naoEstaClicado");
</script>

<h2 id="titulo">Fornecedores</h2>

<form class="buscar-fornecedor"  method="GET">
<div class="input-group rounded" id="buscar-mercadoria">
  <input type="search" name="busca" class="form-control rounded" 
  id="campo-pesquisa" placeholder="Digite o nome do fornecedor" aria-label="Search" aria-describedby="search-addon" />
  <button type="submit" class="input-group-text border-0" id="search-addon">
    <i class="fas fa-search"></i>
  </span>
</div>
</form>

<a href="fornecedor.php">
  <p class="limpar-busca">limpar busca</p>
</a>

  <tbody>
<?php

    include "../banco/config.php";
    $pesquisa = null;
    if (!empty($_GET)){
      $pesquisa = $_GET['busca'];
      if(is_numeric($pesquisa)) { // não dá erro com string
        $busca = "SELECT * FROM cadastro_fornecedor WHERE nome = '{$pesquisa}'";
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
      <th scope="col">ID</th>  
      <th scope="col">Nome Fantasia</th>  
      <th scope="col">Razão Social</th>
      <th scope="col">CNPJ</th>
      <th scope="col">Representante</th>
      <th scope="col">Telefone</th>
      <th scope="col">E-mail</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
    $buscaFornecedor = "SELECT * FROM cadastro_fornecedor WHERE nomeFantasia = '{$pesquisa}'";
    $buscaFornecedorQuery = $mysqli->query($buscaFornecedor);
    while ($dados = $buscaFornecedorQuery->fetch_array()){ ?>
      <tr>
        <td><?php echo $dados['idFornecedor']?></td>
        <td><?php echo $dados['nomeFantasia']?></td>
        <td><?php echo $dados['razaoSocial']?></td>
        <td><?php echo $dados['CNPJ']?></td>
        <td><?php echo $dados['representante']?></td>
        <td><?php echo $dados['telefone']?></td>
        <td><?php echo $dados['email']?></td>
        <td><button type="button" class="btn btn-primary justify-content-end">Editar</button></td>
      </tr>
    <?php } ?>
  </tbody>
  </table>
</div>

<?php require '../componentes/footer.php' ?>