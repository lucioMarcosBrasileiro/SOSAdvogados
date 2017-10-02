/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function alterarEtapasFormulario(nomePainel){
    $('#tabFormCadastro a[href="#painel'+nomePainel+'"]').tab('show'); // Select tab by name
       
}
function exibePopover(dica){
   $('#'+dica).popover('show');
 }
 function escondePopover(dica){
   $('#'+dica).popover('hide');
 }

function validaInputFormulario()
{
   let nome = $('#inputNome').val();
   let cpf = $('#inputCpf').val();
   let telefone = $('#inputTelefone').val();
   let senha = $('#inputSenha').val();
   let confirmarSenha = $('#inputConfirmarSenha').val();
   let numeroAOB = $('#inputNumeroAOB').val();  
    
    if(nome === '')
    {
        alterarEtapasFormulario("DadosPessoais");
        $('#inputNome').focus();        
        $('#inputNome').tooltip('show');
        return;
    }
    if(cpf === '')
    {
        alterarEtapasFormulario("DadosPessoais");
        $('#inputCpf').focus();
        $('#inputCpf').tooltip('show');
        return;
    }
    if(telefone === '')
    {
        alterarEtapasFormulario("DadosPessoais");
        $('#inputTelefone').focus();
        $('#inputTelefone').tooltip('show');
        return;
    }
    if(senha === '')
    {
        alterarEtapasFormulario("Senha");
        $('#inputSenha').focus();
        return;
    }
     if(confirmarSenha === '')
    {
        alterarEtapasFormulario("Senha");
        $('#inputConfirmarSenha').focus();
        return;
    }
    if(numeroAOB === '')
    {
        alterarEtapasFormulario("DadosDefensorLegal");
        $('#inputNumeroAOB').focus();
        return;
    }
    
    console.log(nome, cpf, telefone, senha, confirmarSenha, numeroAOB);
}
