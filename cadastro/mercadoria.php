<?php require '../componentes/head.php' ?>

<body>
<?php require '../componentes/navbar.php' ?>

<h2>Busca</h2>

<?php require '../componentes/menu.php' ?>
<script>
  document.querySelector('#cliente .card').classList.add("naoEstaClicado");
  document.querySelector('#fornecedor .card').classList.add("naoEstaClicado");
</script>

<h2 id="titulo">Mercadorias</h2>

<form id="form-cadastro">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="marca">Tipo de Produto</label>
      <select id="marca" class="form-control">
        <option selected>-</option>
        <option>opção 1</option>
        <option>opção 2</option>
        <option>opção 3</option>
      </select>
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="marca">Marca</label>
      <select id="marca" class="form-control">
        <option selected>-</option>
        <option>Skol</option>
        <option>Calsberg Group</option>
        <option>Cuca BGI</option>
      </select>
    </div>
    </div>
  
  <div class="form-row">  
    <div class="form-group col-md-12">
      <label for="preco">Valor</label>
      <input type="text" class="form-control" id="preco">
    </div>
  </div>

  <div class="form-row">  
    <div class="form-group col-md-12">
      <label for="quantidade">Quantidade</label>
      <input type="text" class="form-control" id="quantidade">
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php require '../componentes/footer.php' ?>

