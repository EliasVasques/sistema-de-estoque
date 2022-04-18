<?php require '../componentes/head.php'; ?>

<?php 
  require '../componentes/navbar.php';
  require '../componentes/botao-voltar-home.php';
?>

<h2>Busca</h2>

<?php require '../componentes/menu.php' ?>
<script>
  document.querySelector('#cliente .card').classList.add("naoEstaClicado");
  document.querySelector('#fornecedor .card').classList.add("naoEstaClicado");
</script>

<h2 id="titulo">Mercadorias</h2>

<form id="form-cadastro" method="POST" action="salvarMercadoria.php">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="tipoProduto">Tipo de Produto</label>
      <select id="tipoProduto" name="tipoProduto" class="form-control">
        <option selected>-</option>
        <option value="Cerveja">Cerveja</option>
        <option value="Vodka">Vodka</option>
        <option value="Cachaça">Cachaça</option>
      </select>
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="marca">Marca</label>
      <select id="marca" name="marca" class="form-control">
        <option selected>-</option>
        <option>Skol</option>
        <option>Calsberg Group</option>
        <option>Cuca BGI</option>
      </select>
    </div>
    </div>
  
  <div class="form-row">  
    <div class="form-group col-md-12">
      <label for="valor">Valor</label>
      <input type="text" class="form-control" name ="valor" id="valor">
    </div>
  </div>

  <div class="form-row">  
    <div class="form-group col-md-12">
      <label for="quantidade">Quantidade</label>
      <input type="text" name="quantidade" class="form-control" id="quantidade">
    </div>
  </div>

  <div class="form-row">  
    <div class="form-group col-md-12">
      <label for="codigoFornecedor">Código do fornecedor</label>
      <input type="text" name="codigoFornecedor"  id="codigoFornecedor" class="form-control">
    </div>
  </div>

  <div class="form-row">  
    <div class="form-group col-md-12">
      <label for="codigoBarra">Código de barra</label>
      <input type="text" name="codigoBarra"  id="codigoBarra" class="form-control">
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php require '../componentes/footer.php' ?>

