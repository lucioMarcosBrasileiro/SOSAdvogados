<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../SOSAdvogados/CSS/estilo.css">
    </head>
    <body>
        <div id="form-container"><!--parte de fundo da pagina/-->
            <div class="panel" id="form-box"><!--container do formulario login-->
                <form action="cliente.php" method="post">
                    <h1 class="text-center">Login</h1>
                    <div class="form-group"><!--vai conter o label e o input-->
                        <label class="sr-only" for="login">Cpf</label>
                        <div class="input-group">
                            <div class="input-group-addon"><!--divisoria de figura e input-->
                                <span class="glyphicon glyphicon-user"></span><!--figura-->
                            </div>
                            <input type="text" name="inputCpf" class="form-control" placeholder="Cpf" data-toggle="tooltip" data-placement="top" title="Preencha um nome válido"><!--input-->
                        </div>
                    </div>  

                    <div class="form-group"><!--vai conter o label e o input-->
                        <label class="sr-only" for="login">Senha</label>
                        <div class="input-group">
                            <div class="input-group-addon"><!--divisoria de figura e input-->
                                <span class="glyphicon glyphicon-lock"></span><!--figura-->
                            </div>
                            <input type="password" name="inputSenha" class="form-control" placeholder="Senha"><!--input-->
                        </div>
                    </div>  

                    <div class="form-group">
                        <input type="submit" value="Entrar" class="btn btn-success form-control" onclick="validaInputFormulario() >
                        </div> 
                    <div class="form-group">
                               <a href="formCadastroSOSAdvogados.php">Criar nova conta!</a><br>
                        </form>  
                        <a href="" data-target="#modal-basico" data-toggle="modal">Esqueci senha</button></a>
                        <div class="modal" id="modal-basico">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title">Esqueci Senha</h2>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="txtCpf">Informe o cpf:</label>
                                            <input type="text" id="txtCpf" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-success" data-dismiss="modal">Ok</button>
                                        <button class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>                        
                            </div>  
                        </div> 





                    </div>           
            </div>
            <?php
            // put your code here
            ?>
            <script src="javaScript/validacaoFormulario.js"></script>  
    </body>
</html>
