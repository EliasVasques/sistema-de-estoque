<?php require '../componentes/head.php' ?>
<?php require '../componentes/navbar.php' ?>
<body>

<h2>Busca</h2>

<div class="cards">
    <a href="mercadoria.php">
        <div class="card desativo" style="width: 18rem;">
        <img class="card-img-top" src="../img/mercadoria.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Mercadorias</h5>
        </div>
        </div>
    </a>

    <a href="#form-cadastro">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="../img/fornecedor.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Fornecedores</h5>
        </div>
        </div>
    </a>
    
    <a href="cliente.php">
        <div class="card desativo" style="width: 18rem;">
        <img class="card-img-top" src="../img/cliente.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Clientes</h5>
        </div>
        </div>
    </a>
</div>

<h2>Fornecedor</h2>

<form id="form-cadastro">
    <div class="form-group col-md-12">
      <label for="nome">Nome Fantasia</label>
      <input type="text" class="form-control" id="nome">
    </div>
 


    <div class="form-group col-md-12">
      <label for="razao-social">Razão Social</label>
      <input type="text" class="form-control" id="razao-social">
    </div>


    <div class="form-group col-md-12">
      <label for="cnpj">CNPJ</label>
      <input type="text" class="form-control" id="cnpj">
    </div>


    <div class="form-group">
      <label for="endereco">Endereço</label>
      <input type="text" class="form-control" id="endereco">
    </div>


    <div class="form-group">
      <label for="complemento">Complemento</label>
      <input type="text" class="form-control" id="complemento">
    </div>

    <div class="form-group col-md-12">
    <label for="estado">Estado</label>
    <select id="estado" class="form-control">
        <option selected>-</option>
        <option>BA</option>
        <option>...</option>
    </select>
    </div>
    <div class="form-group col-md-12">
      <label for="cidade">Cidade</label>
      <input type="text" class="form-control" id="cidade">
    </div>


    <div class="form-group col-md-12">
      <label for="cep">CEP</label>
      <input type="text" class="form-control" id="cep">
    </div>
    
    <div class="form-group col-md-12">
      <label for="telefone">Telefone</label>
      <input type="text" class="form-control" id="telefone">
    </div>

    <div class="form-group col-md-12">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email">
    </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php require '../componentes/footer.php' ?>