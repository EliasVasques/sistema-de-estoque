<?php require '../componentes/head.php'; ?>

<?php 
  require '../componentes/navbar.php';
  require '../componentes/botao-voltar-home.php';
?>


<h1> <i>Cadastro</i> </h1>

<?php require '../componentes/menu.php' ?>
<script>
  document.querySelector('#cliente .card').classList.add("naoEstaClicado");
  document.querySelector('#mercadoria .card').classList.add("naoEstaClicado");
</script>

<h2 id="titulo">Fornecedores</h2>

<form id="form-cadastro" method="POST" action="salvarFornecedor.php">
    <div class="form-group col-md-12">
      <label for="nome">Nome Fantasia</label>
      <input type="text" name="nomeFantasia" class="form-control" id="nome">
    </div>
 


    <div class="form-group col-md-12">
      <label for="razao-social">Razão Social</label>
      <input type="text" name="razaoSocial" class="form-control" id="razao-social">
    </div>


    <div class="form-group col-md-12">
      <label for="cnpj">CNPJ</label>
      <input type="text" name="CNPJ" class="form-control" id="cnpj">
    </div>


    <div class="form-group">
      <label for="endereco">Endereço</label>
      <input type="text" name="endereco" class="form-control" id="endereco">
    </div>

    <div class="form-row">
    <div class="form-group col-md-12">
      <label for="estado">Estado</label>
        <select id="estado" name="UF" class="form-control">
          <option selected>-</option>
          <option>BA</option>
          <option>...</option>
        </select>
      </div>
    </div>

    <div class="form-group col-md-12">
      <label for="cidade">Cidade</label>
      <input type="text" name="cidade" class="form-control" id="cidade">
    </div>


    <div class="form-group col-md-12">
      <label for="cep">CEP</label>
      <input type="text" name="CEP" class="form-control" id="cep">
    </div>

    <div class="form-group">
      <label for="complemento">Representante</label>
      <input type="text" name="representante" class="form-control" id="complemento">
    </div>
    
    <div class="form-group col-md-12">
      <label for="telefone">Telefone</label>
      <input type="text" name="telefone" class="form-control" id="telefone">
    </div>

    <div class="form-group col-md-12">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" id="email">
    </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php require '../componentes/footer.php' ?>