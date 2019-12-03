<?PHP
define('HOST', 'localhost');
define('USUARIO', 'Ferutcci.Corp');
define('SENHA', 'Lamborghini!1');
define('DB', 'Usuarios');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Acesso Nao Permitido');
