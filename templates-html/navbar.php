<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistema Estoque</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?rota=compra">Compra</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?rota=entradas-e-saidas">Entradas e Saídas</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastrar
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Cliente</a></li>
            <li><a class="dropdown-item" href="index.php?rota=cadastrar-produto">Produto</a></li>
            <li><a class="dropdown-item" href="#">Fornecedor</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?rota=login-tela">Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
