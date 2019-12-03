<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>

    <link rel="stylesheet" type="text/css" href="Day-by_CSS/1-LoginScreen.css">
    <link href="http://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <title>Login Page</title>

</head>

<body>

    <!------------------------------------------- INICIO DA DIV LOGIN ------------------------------------------------->
    <div class="login">


        <!------------------------ SELECT (MYSQL) EM PHP PARA SELECIONAR FOTOS DO USUARIO ------------------------->

        <img src="pictureSys/jota.jpg" class="usuario" width="100" height="100" alt="">

        <!-- ------------------------------------------------------------------------------>


        <!-- -------------------------------- TITULO -------------------------------------->

        <h1>Login</h1>

        <!-- ------------------------------------------------------------------------------>



        <!------------------------------------------ INICIO DO FORM --------------------------------------------------->

        <form name="confere" action="2-checking.php" method="POST" accept-charset="UTF-8">
            <!-- SCRIPT EM PHP QUE CONFERE SE USUARIO EXISTE -->


            <!-- --------------------------------USUARIO E SENHA -------------------------------------------------->
            <p>Usuario</p>
            <input type="text" name="Usuario" placeholder="User Name">

            <p>Senha</p>
            <input type="password" name="Senha" placeholder="Password" required>
            <!-- --------------------------------------------------------------------------------->


            <!-- --------------------------------- BOTÃO PARA ACESSAR --------------------------------------------->
            <input type="submit" value="Acessar" data-toggle="modal" data-target="#sitemodal">
            <!-- ---------------------------------------------------------------------------------->


            <!-- ---------------------------- DIRECIONAMOS PARA CRIAR UMA CONTA ----------------------------------->

            <a href="2-cadastro.php">Ainda não possui uma conta</a> <br>

            <!-- -------------------------------------------------------------------------------------------------->


            <!------------------------ PAGINA DE RECUPERAÇÃO DE SENHA ----------------------------->

            <a href="">Esqueceu sua Senha?</a>

            <!-- -------------------------------------------------------------------------------------------------->


            <!-- -------------------------- NOTIFICA USUARIO OU SENHA INVALIDOS ----------------------------------->


            <!-- -------------------------------------------------------------------------------------------------->
        </form>
        <!-------------------------------------------- FIM DO FORM ---------------------------------------------------->

    </div>

    <?PHP
    if (isset($_SESSION['nao_cadastrado'])) :
        ?> <script>
            $(document).ready(function() {
                $('#ExemploModalCentralizado').modal('show');
            });
        </script>

        <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">Alerta</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Usuario ou senha incorreto
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Fechar">
                            Fechar <span aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    <?PHP
    endif;
    unset($_SESSION['nao_cadastrado']);
    ?>

    <!------------------------------------------- FIM  DA DIV LOGIN --------------------------------------------------->
</body>

</html>