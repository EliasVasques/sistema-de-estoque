<?php require '../componentes/head.php'; ?>

<body>
<?php 
  require '../componentes/navbar.php';
  require '../componentes/botao-voltar-home.php';
?>

<!-- navbar link -->
<script>
  document.querySelector('.navbar-administracao').classList.add("clicado");
</script>


<h1> <i>Entradas e saídas</i> </h1>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Mês</th>
      <th scope="col">Entrada</th>
      <th scope="col">Saída</th>
      <th scope="col">Lucro</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Janeiro</td>
      <td>R$2000</td>
      <td>R$588</td>
      <td>R$1412</td>
    </tr>
    <tr>
      <td>Janeiro</td>
      <td>R$2000</td>
      <td>R$588</td>
      <td>R$1412</td>
    </tr>
    <tr>
      <td>Janeiro</td>
      <td>R$2000</td>
      <td>R$588</td>
      <td>R$1412</td>
    </tr>
    <tr>
      <td>Janeiro</td>
      <td>R$2000</td>
      <td>R$588</td>
      <td>R$1412</td>
    </tr>
    <tr>
      <td>Janeiro</td>
      <td>R$2000</td>
      <td>R$588</td>
      <td>R$1412</td>
    </tr>
  </tbody>
</table>

<h2>Vendas</h2>

<div id="grafico">
  <canvas id="myChart"></canvas>
</div>

<script src="grafico-saida-produtos.js"></script>

<?php require '../componentes/footer.php' ?>
  
