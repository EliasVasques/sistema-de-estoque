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

<form id="form-cadastro" method="POST" action="salvarCliente.php">
    <div class="form-group col-md-12">
      <label for="nome">Nome</label>
      <input type="text" name="nome" class="form-control" id="nome">
    </div>


    <div class="form-group col-md-12">
      <label for="cpf">CPF</label>
      <input type="text" name="CPF" class="form-control" id="cpf">
    </div>

    <div class="form-group">
      <label for="endereco">Endereço</label>
      <input type="text" name="endereco" class="form-control" id="endereco">
    </div>

    <div class="form-group col-md-12">
    <label for="estado">Estado</label>
    <select id="estado" name="estado" class="form-control">
        <option selected>-</option>
        <option>BA</option>
        <option>...</option>
    </select>
    </div>

    <div class="form-group col-md-12">
      <label for="cidade">Cidade</label>
      <input type="text" name="cidade" class="form-control" id="cidade">
    </div>


    <div class="form-group col-md-12">
      <label for="cep">CEP</label>
      <input type="text" name="CEP" class="form-control" id="cep">
    </div>
    
    <div class="form-group col-md-12">
      <label for="telefone">Telefone</label>
      <input type="text" name="telefone" class="form-control" id="telefone">
    </div>

    <div class="form-group col-md-12">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail4">
    </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php require '../componentes/footer.php' ?>