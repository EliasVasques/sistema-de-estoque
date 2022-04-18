<?php require '../componentes/head.php'; ?>

<?php 
  require '../componentes/navbar.php';
  require '../componentes/botao-voltar-home.php';
?>


<h1> <i>Cadastro</i> </h1>

<!-- menu -->
<?php require '../componentes/menu.php' ?>
<script>
  document.querySelector('#mercadoria .card').classList.add("naoEstaClicado");
  document.querySelector('#fornecedor .card').classList.add("naoEstaClicado");
</script>

<h2 id="titulo">Clientes</h2>

<form id="form-cadastro">
    <div class="form-group col-md-12">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nome">
    </div>


    <div class="form-group col-md-12">
      <label for="cpf">CPF</label>
      <input type="text" class="form-control" id="cpf">
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
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php require '../componentes/footer.php' ?>