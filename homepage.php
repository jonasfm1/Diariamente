<!-- -----------------------CHECA SE FOI FEITO LOGIN PARA DAR ACESSO A HOMPAGE----------------------------------->

<?PHP
include('5-Validar.php');
?>

<!-- ------------------------------------------------------------------------------------------------------------>

<!------------------------------------------ CONFIGURACOES DO HTML ---------------------------------------------->
<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="Day-by_CSS/homepage.css" >
    <link href="http://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <title>Home Page</title>
</head>
<!-- ------------------------------------------------------------------------------------------------------------>
<body>
    <div class="horizonte" >

        <!------------------------- SELECT EM MYSQL PRA BUSCAR IMAGEM DO USUARIO ------------------------------->

         <div class="ftperfil"> <img alt="foto_usuario" src="pictureSys/jota.jpg" /> </div>

        <!-- ------------------------------------------------------------------------------------------------ --->


        <!-- ------------------------------------------------------------------------------------------------ --->

        <!--------//---------- SELECT EM MYSQL PRA BUSCAR IMAGEM DE FUNDO DO USUARIO NO BANCO ---------//-------->

        <!-- ------------------------------------------------------------------------------------------------ --->


        <!--------------------------------- BOTAO CONFIGURACOES PERFIL ------------------------------------------>

        <a class="menu" type="button" href="Logoff.php">Sair</a>

        <!-- ------------------------------------------------------------------------------------------------ --->

    </div>

    <!-- --------------------------------------- INSERIR AMIGOS --------------------------------------------- --->
    <div class="vertical" >
        <p><img src="Amigos/Clarisse Lancels.jpg" /> Clarisse Lancels </p>
        <p><img src="Amigos/Helena Ferminos.jpg" /> Helena Ferminos </p>
        <p><img src="Amigos/Heloiza Duarte.jpg" /> Heloiza Duarte </p>
        <p><img src="Amigos/Karina yamaguro.jpg" /> Manu Cantolinis </p>
        <p><img src="Amigos/Alexandre Russo.jpg" /> Alexandre Russo </p>
        <p><img src="Amigos/Mathes Cassoli.jpg" /> Mathes Cassoli </p>
        <p><img src="Amigos/Cesar Junior.jpg" /> Cesar Junior </p>
    </div>
    <!-- ----------------------------------------------------------------------------------------------------- --->

    <div class="My_day">

        <div class="box">
            <textarea rows="10" cols="40" maxlength="500"> </textarea>
        </div>

    </div>


</body>
</html>