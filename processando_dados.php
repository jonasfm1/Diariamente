<?php

session_start();

include_once ('3-connect.php');

$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);

$sobrenome = filter_input(INPUT_POST,'sobrenome',FILTER_SANITIZE_STRING);

$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);

$nascimento = filter_input(INPUT_POST, 'nascimento', FILTER_SANITIZE_STRING);

$email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);

$senha = filter_input(INPUT_POST,'senha', FILTER_SANITIZE_STRING);

$confirme = Filter_input(INPUT_POST,'confirme', FILTER_SANITIZE_STRING);

$usuario = Filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);

$consulta = "INSERT INTO Cadastrados (NOME, SOBRENOME, SEXO, NASCIMENTO, E_MAIL, SENHA, CONFIRMA_SENHA,Usuario) VALUES ('$nome','$sobrenome','$sexo','$nascimento','$email','$senha','$confirme','$usuario')";

$inseri_cnsulta= mysqli_query($conexao, $consulta);

if(mysqli_insert_id($conexao)){
    $_SESSION['msg'] = "Usuario Cadastrado Com Sucesso";
    header("Location: 1-LoginScreen.php");
} else{
    header("Location: 1-LoginScreen.php");
}