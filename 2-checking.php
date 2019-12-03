<?PHP

// ---------------------------------- INICIA A SESSÃO DE LOGIN --------------------------------------

session_start();

//---------------------------------------------------------------------------------------------------


// ---------------------------- ARQUIVO DE CONEXÃO COM O BANCO DE DADOS -----------------------------

include('3-connect.php');

//---------------------------------------------------------------------------------------------------


// ---------------------------- CONFERINDO USUARIO OU SENHA VAZIO -----------------------------------

if(empty($_POST['Usuario']) || empty($_POST['Senha'])) {
    header('Location: 1-LoginScreen.php');
    exit();
}

//----------------------------------------------------------------------------------------------------


// -----------ATRIBUIR USUARIO QUE VEM DO FORM A VARIAVEL UTILIZANDO A FUNCAO DO MYSQL----------------

$usuario = mysqli_real_escape_string($conexao, $_POST['Usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['Senha']);

//----------------------------------------------------------------------------------------------------


// ---------------------------- CONSULTANO SE USUARIO E SENHA SÃO VALIDOS ----------------------------

$query = "Select Usuario from Cadastrados where Usuario = '{$usuario}' and SENHA = md5('{$senha}')";

//----------------------------------------------------------------------------------------------------


// --------------- CONSULTA O BANDO PARA CHECAR O SELECT E ARMAZENAR O RESULTADO ----------------------

$result = mysqli_query($conexao, $query);

//-----------------------------------------------------------------------------------------------------


// --------------------------- ARMAZENA A QUANTIDADE DE LINHAS DA CONSUTA  ----------------------------

$row = mysqli_num_rows($result);

//-----------------------------------------------------------------------------------------------------


// ---------------- CHECA SE USUARIO E SENHAS FORAM ENCONTRADOS E GERA VALOR 1 OU 0 -------------------

if($row == 1) {
    $_SESSION['Usuario'] = $usuario;
    header('Location: homepage.php');
    exit();
} else{
    $_SESSION ['nao_cadastrado'] = true;
    header('Location: 1-LoginScreen.php');
    exit();
}

//----------------------------------------------------------------------------------------------------
