<?php require '../componentes/head.php' ?>
<?php require '../componentes/navbar.php' ?>
<body>

<a href="../home">
  <img src="../img/voltar.png" class="voltar" alt="">
</a>

<h2>Busca</h2>

<div class="cards">
    <a href="#form-cadastro">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="../img/mercadoria.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Mercadorias</h5>
        </div>
        </div>
    </a>

    <a href="fornecedor.php#form-cadastro">
        <div class="card naoEstaClicado" style="width: 18rem;">
        <img class="card-img-top" src="../img/fornecedor.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Fornecedores</h5>
        </div>
        </div>
    </a>
    
    <a href="cliente.php#form-cadastro">
        <div class="card naoEstaClicado" style="width: 18rem;">
        <img class="card-img-top" src="../img/cliente.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Clientes</h5>
        </div>
        </div>
    </a>
</div>

<h2>Mercadorias</h2>

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

