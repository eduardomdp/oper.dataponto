<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dataponto</title>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/signin.css" rel="stylesheet">
    </head>
    <body>

        <div class="container">

            <form class="form-signin">
                <h2 class="form-signin-heading">Logar no Dataponto</h2>
                <label for="cpf" class="sr-only">Matrícula</label>
                <input type="text" maxlength="6" id="cpf" class="form-control" placeholder="Matrícula" required autofocus>
                <label for="inputPassword" class="sr-only">Senha</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                <br/>
                <a href="#" data-title="Ajuda" data-toggle="modal" aria-labelledby="edit" data-target="#edit" >Primeiro acesso.</a>
                <br/>
                <a href="#" data-title="Ajuda" data-toggle="modal" aria-labelledby="edit" data-target="#edit2" >Esqueci minha senha</a>
                <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                <h2 class="modal-title custom_align" id="Heading">Ajuda com 1º acesso</h2>

                            </div>
                            <div class="modal-body">
                                <h4>Insira sua matrícula DP, e sua senha inicial: 'dataponto'.</h4>
                            </div>
                            <!-- /.modal-content --> 
                        </div>
                        <!-- /.modal-dialog --> 
                    </div>
                </div>



                <div class="modal fade" id="edit2" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                <h2 class="modal-title custom_align" id="Heading">Esqueceu sua senha?</h2>
                            </div>
                            <div class="modal-body">
                                <h4>Solicite uma nova ao seu supervisor, em breve melhoraremos o campo de alteração de senha.</h4>
                            </div>
                            <!-- /.modal-content --> 
                        </div>
                        <!-- /.modal-dialog --> 
                    </div>
                </div>
        </div> <!-- /container -->


    </form>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>


</body>
</html>
