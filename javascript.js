/*validar formulario*/

function validar(){
 if(document.form.nome.value==""){
  alert("Preencha o campo login");
  document.form.nome.focus();
  return false;
 }
  if(document.form.email.values=="" || document.form.email.value.indexOf("@")== -1 || document.form.email.value.indexOf(".")== -1){
    alert("Preencha o campo email corretamente");
     document.form.email.focus();
     return false;
  }
  if(document.form.senha.value.length<6){
    alert("A senha deve conter no minimo 6 caracteres");
    document.form.senha.focus();
    return false;
  }
}

function validade(){
 if(document.form.prod.value==""){
   alert("Preencha o campo produto");
   document.form.prod.focus();
   return false;
 }
 if(document.form.qtde.value==""){
   alert("Preencha o campo quantidade");
   document.form.qtde.focus();
   return false;
 }
   if(document.form.pagamento.values==""){
     alert("Escolha a forma de pagamento");
     document.form.pagamento.focus();
     return false;
   }
   if(document.form.cartao.value.length<16){
     alert("Preencha o campo cartao corretamente");
     document.form.cartao.focus();
     return false;
   }
   if(document.form.cpf.value.length<11 || document.form.cpf.value.indexOf("-")==-1){
     alert("Digite o cpf com a quantidade de numeros corretos");
     document.form.cpf.focus();
     return false;
   }
   if(document.form.rua.value==""){
     alert("Digite o endereço da rua");
     document.form.rua.focus();
     return false;
   }
}

function validation(){
  if(document.formss.nome.value==""){
    alert("Digite o campo nome");
    document.formss.nome.focus();
    return false
  }
  if(document.formss.email.value=="" || document.formss.email.value.indexOf("@")== -1 || document.formss.email.value.indexOf(".")== -1){
    alert("Preencha o campo senha corretamente");
    document.formss.email.focus();
    return false;
  }
  if(document.formss.msg.value==""){
  alert("Preencha o campo menssagem");
  document.formss.msg.focus();
  return false;
  }
}