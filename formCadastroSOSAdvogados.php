<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <title>Cadastro SOSAdvogados</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
          <div class="row">
               <!-- Nav tabs -->
                <ul id="tabFormCadastro" class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#painelDadosPessoais" aria-controls="dadosPessoais" role="tab" data-toggle="tab">Dados Pessoais</a></li>
                  <li role="presentation"><a href="#painelSenha" aria-controls="painelSenha" role="tab" data-toggle="tab">Senha</a></li>
                  <li role="presentation"><a href="#painelDadosDefensorLegal" aria-controls="painelDadosDefensorLegal" role="tab" data-toggle="tab">Dados Defensor Legal</a></li>
                
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="painelDadosPessoais">
                        <h2>Dados Pessoais</h2>
                        <form>
                            <div class="form-group col-md-6">
                                <label>Nome:</label>
                                <input type="text" class="form-control" id="nome">
                            </div>    
                            <div class="form-group col-md-6">
                                <label>Cpf:</label>
                                <input type="text" class="form-control" id="cpf">                                              
                           </div>
                            <div class="form-group col-md-6">
                                <label>Telefone:</label>
                                <input type="text" class="form-control" id="Telefone">                           
                            </div>                             
                        </form>                         
                        <button onclick='alterarEtapasFormulario("Senha")' class="btn btn-info">Seguinte</button>
                    </div>
                    
                    
                    <div role="tabpanel" class="tab-pane" id="painelSenha">
                        <h2>Senha</h2>
                         <form>
                            <div class="form-group col-md-6">
                                <label>Senha:</label>
                                <input type="text" class="form-control" id="inputSenha">
                            </div>    
                            <div class="form-group col-md-6">
                                <label>Confirmar Senha:</label>
                                <input type="text" class="form-control" id="confirmarSenha">                                              
                           </div>                                                       
                        </form>                        
                        <button onclick='alterarEtapasFormulario("DadosDefensorLegal")' class="btn btn-info">Seguinte</button>
                    </div>
                    
                    
                    <div role="tabpanel" class="tab-pane" id="painelDadosDefensorLegal">
                        <h2>Dados Defensor Legal</h2>
                         <form>
                            <div class="form-group col-md-6">
                                <label>Número da OAB:</label>
                                <input type="text" class="form-control" id="numeroAOB">
                            </div>                                                       
                        </form>                        
                        <button class="btn btn-success">Salvar</button>
                    </div>                  
                </div>

          </div>        
      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="javaScript/validacaoFormulario.js"></script>
  </body>
</html>