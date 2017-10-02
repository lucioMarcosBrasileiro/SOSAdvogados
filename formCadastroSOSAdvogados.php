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
                        <p>
   <div class="panel panel-default">
     <div class="panel-body">
       Informações pessoais 
       <strong id="dica1" onmouseout="escondePopover('dica1')" onmouseover="exibePopover('dica1')" data-container="body" data-toggle="popover" data-placement="top" data-content="Neste formulário você deve preencher seu nome, cpf e telefone com números válidos.">
         (Dicas)
       </strong>
     </div>
   </div>
 </p>
                        <form>
                            <div class="form-group col-md-6">
                                <label>Nome:</label>                                
                                <input type="text" class="form-control" id="inputNome" data-toggle="tooltip" data-placement="top" title="Preencha um nome válido">
                            </div>    
                            <div class="form-group col-md-6">
                                <label>Cpf:</label>
                                <input type="text" class="form-control" id="inputCpf" data-toggle="tooltip" data-placement="top" title="Preencha um cpf válido">                                              
                           </div>
                            <div class="form-group col-md-6">
                                <label>Telefone:</label>
                                <input type="text" class="form-control" id="inputTelefone" data-toggle="tooltip" data-placement="top" title="Preencha um número de telefone válido">                           
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
                                <input type="text" class="form-control" id="inputConfirmarSenha">                                              
                           </div>                                                       
                        </form>                        
                        <button onclick='alterarEtapasFormulario("DadosDefensorLegal")' class="btn btn-info">Seguinte</button>
                    </div>
                    
                    
                    <div role="tabpanel" class="tab-pane" id="painelDadosDefensorLegal">
                        <h2>Dados Defensor Legal</h2>
                         <form>
                            <div class="form-group col-md-6">
                                <label>Número da OAB:</label>
                                <input type="text" class="form-control" id="inputNumeroAOB">
                            </div>                                                       
                        </form>                        
                        <button onclick="validaInputFormulario()" class="btn btn-success">Salvar</button>
                    </div>                  
                </div>

          </div>        
      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="javaScript/validacaoFormulario.js"></script>  
  </body>
</html>