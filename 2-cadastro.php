<?PHP

session_start();

?>


<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/localization/messages_pt_BR.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#formCadastro").validate({
                rules:{
                    nome: {
                        required:  true,
                        minlength: 3,
                        maxlength: 20
                    },
                    sobrenome: {
                        required:  true,
                        minlength: 3,
                        maxlength: 20
                    },
                    sxo: {
                        required:  true,
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    senha: {
                        required: true,
                        minlength: 6,
                        maxlength:20
                    },
                    confirme: {
                        required: true,
                        minlength: 6,
                        maxlength: 20
                    }
                },
                submitHandler: function (formCadastro) {
                    alert("CADASTRO REALIZADO COM SUCESSO")
                }
            })
        })
    </script>

</head>

<body>
    <?PHP
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
        <div class="container">
            <h1>cadastro de usuario </h1>
        <!--CHECAR BANCO DE DADOS E VER SE O USUARIO JÁ EXISTE SE NAO CRIE-O -->

            <form name="formCadastro" id="formCadastro" method="POST" action="processando_dados.php">

                <div class="form-row">
                    <!-- --------------------------------------------------------------- NOME ------------------------------------------------------------->
                    <div class="col">
                        <label>Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome">
                    </div>
                    <!-- ---------------------------------------------------------------------------------------------------------------->


                    <!-- ------------------------------------------------------------ SOBRENOME ----------------------------------------------------------->
                    <div class="col">
                        <label>Sobrenome</label>
                        <input type="text" name="sobrenome" id="sobrenome" class="form-control" placeholder="Sobrenome">
                    </div>
                </div>


                <div class="form-row">
                    <!-- ---------------------------------------------------------------------------------------------------------------->

                    <!-- ----------------------------------------------------------- SEXO ------------------------------------------------------------->

                    <div class="custom-radio col-md-6">
                        <label>Sexo</label> <br />
                        <input type="radio" name="sexo" id="M" value="Masculino">
                        <label for="Masculino">Masculino</label> <!-- ENTRAR COM ICONE DE GENERO MASCULINO -->
                        <p></p>

                        <input type="radio" name="sexo" id="F" value="Feminino">
                        <label for="Feminino">Feminino</label> <!-- ENTRAR COM ICONE DE GENERO FEMININO -->
                    </div>
                    <!-- ---------------------------------------------------------------------------------------------------------------->


                    <!-- --------------------------------------------------- DATA DE NASCIMENTO ------------------------------------------------------->

                    <div class="col">
                        <label>Nascimento</label>
                            <input type="date" name="nascimento" id="nascimento" class="form-control" placeholder="Data de nascimento" required >
                    </div>
                </div>
                <!-- ---------------------------------------------------------------------------------------------------------------->


                <!-- ---------------------------------------------------------- EMAIL ------------------------------------------------------------------>
                <div class="form-row">
                    <div class="col-md-6">
                        <label>Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Seu e-mail">
                    </div>
                </div>

                <!-- ---------------------------------------------------------------------------------------------------------------->


                <!-- ---------------------------------------------------------------SENHA -------------------------------------------------------------->
                <div class="form-row">
                    <div class="col">
                        <label>Senha</label>
                        <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" required >
                    </div>

                    <!-- ------------------------------------------------------------------------------------------------------------>


                    <!-- ----------------------------------------------------- CONFIRMAR SENHA -------------------------------------------------------->

                    <div class="col">
                        <label>Confirme</label>
                        <input type="password" name="confirme" id="Confirme" class="form-control" placeholder="Confirme a senha" required >
                    </div>
                </div> <br />
                <!-- ---------------------------------------------------------------------------------------------------------------->


                <div class="form-row">
                    <div class="col-auto">
                        <label class="sr-only" for="usuario">Usuário</label>
                        <div class="input-group mb-3" >
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input type="text" class="form-control"id="usuario" name="usuario" placeholder="Usuário">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="termos" required >
                        <label class="form-check-label" for="termos">
                            Concordo com os termos de uso
                        </label>
                    </div>
                </div>

                <input type="submit" name="enviar" id="enviar" class="btn btn-primary" />

            </form>
        </div>
</body>

</html>


