<?php require '../componentes/head.php' ?>
<?php require '../componentes/navbar.php' ?>
<body>

<h2 class="titulo">Cadastro de Mercadorias</h2>

<form>
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
    
    <div class="form-group col-md-12">
      <label for="marca">Marca</label>
      <select id="marca" class="form-control">
        <option selected>-</option>
        <option>Skol</option>
        <option>Calsberg Group</option>
        <option>Cuca BGI</option>
      </select>
    </div>
    
    <div class="form-group col-md-12">
      <label for="preco">Valor</label>
      <input type="text" class="form-control" id="preco">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php require '../componentes/footer.php' ?>

