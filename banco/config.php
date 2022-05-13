<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'organize';

//Instanciamos a classe para acessar o banco
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);

//Verifica se houve erro
if(mysqli_connect_errno()) trigger_error(mysqli_connect_errno())

?>