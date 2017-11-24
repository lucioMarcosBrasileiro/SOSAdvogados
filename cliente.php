<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <title>Cliente</title>
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
                    <li role="presentation" class="active"><a href="#gerenciamento" aria-controls="gerenciamento" role="tab" data-toggle="tab">Gerenciamento</a></li>
                    <li role="presentation"><a href="#abrirChamado" aria-controls="abrirChamado" role="tab" data-toggle="tab">Abrir Chamado</a></li>
                    <li role="presentation"><a href="#relatorios" aria-controls="relatorios" role="tab" data-toggle="tab">Relatorios</a></li>

                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="gerenciamento">
                        <h4>Cliente</h4>
                        <h4>Cpf</h4>
                        <p>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                Historico de Chamado 
                                <strong id="dica1" onmouseout="escondePopover('dica1')" onmouseover="exibePopover('dica1')" data-container="body" data-toggle="popover" data-placement="top" data-content="
                                        Visão geral do proprietário da conta para cada chamado, com seus diferentes infratores leagais. Bem como, o nome do defensor e medidas adotadas, referente a 
                                        cada chamado.">
                                    (Dicas)
                                </strong>
                            </div>
                        </div>
                        </p>
                                            
                      
                    </div>  
                    <div role="tabpanel" class="tab-pane" id="abrirChamado">
                        <h2>Informações do Chamado</h2>
                        <form>
                            <div class="form-group col-md-6">
                                <label>Numero do Chamado:</label>
                                <input type="text" class="form-control" id="inputNumeroDoChamado">
                            </div>    
                            <div class="form-group col-md-6">
                                <label>Data do Chamado:</label>
                                <input type="text" class="form-control" id="inputDataDoChamado">                                              
                            </div>  
                            <div class="form-group col-md-6">
                                <label>Data do Delito</label>
                                <input type="text" class="form-control" id="inputDataDoDelito">                                              
                            </div> 
                            <div class="form-group col-md-6">
                                <label>Delito cometido foi por:</label>
                                <input type="text" class="form-control" id="inputDelitoCometido">                                              
                            </div> 
                            <div class="form-group col-md-6">
                                <label>Motivo:</label>
                                <input type="text" class="form-control" id="inputMotivo">                                              
                            </div> 
                            <div class="form-group col-md-6">
                                <label>Endereço da Delegacia:</label>
                                <input type="text" class="form-control" id="inputEndereçoDaDelegacia">                                              
                            </div> 
                            <h2>Informações do Infrator Legal</h2>
                            <div class="form-group col-md-6">
                                <label>Cpf do Infrator:</label>
                                <input type="text" class="form-control" id="inputCpfDoInfrator">                                              
                            </div> 
                            
                            <div class="form-group col-md-6">
                                <label>Nome do Infrator:</label>
                                <input type="text" class="form-control" id="inputNomeDoInfrator">                                              
                            </div> 
                        </form>                        
                        <button onclick='alterarEtapasFormulario("abrirChamado")' class="btn btn-info">Cadastrar</button>
                    </div>
                    
                    <div role="tabpanel" class="tab-pane" id="relatorios">
                        <h2>Relatorios</h2>
                        
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