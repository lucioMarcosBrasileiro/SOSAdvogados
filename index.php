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
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../SOSAdvogados/CSS/estilo.css">
    </head>
    <body>
        <div id="form-container"><!--parte de fundo da pagina/-->
            <div class="panel" id="form-box"><!--container do formulario login-->
                <form action="login.php" method="post">
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
                        <input type="submit" value="Entrar" class="btn btn-success form-control" onclick="validaInputFormulario()>
                        </div> 
                    <div class="form-group">
                        <a href="formCadastroSOSAdvogados.php">Criar nova conta!</a><br>
                        <button class="btn btn-primary" data-target="#modal-basico" data-toggle="modal">Esqueci senha!</button>                                         
                    </div> 
                    <div class="modal" id="modal-basico">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title">titulo do modal</h3>
                                </div>
                        </div>                        
                    </div>
                           
                                        
                     
                    
                </form>            
            </div>           
        </div>
        <?php
        // put your code here
        ?>
         <script src="javaScript/validacaoFormulario.js"></script>  
    </body>
</html>
