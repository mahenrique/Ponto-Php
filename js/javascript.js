$.noConflict();
function moveRelogio(){ 
   	momentoAtual = new Date() 
   	hora = momentoAtual.getHours() 
   	minuto = momentoAtual.getMinutes() 
   	segundo = momentoAtual.getSeconds() 

   	str_segundo = new String (segundo) 
   	if (str_segundo.length == 1) 
      	segundo = "0" + segundo 

   	str_minuto = new String (minuto) 
   	if (str_minuto.length == 1) 
      	minuto = "0" + minuto 

   	str_hora = new String (hora) 
   	if (str_hora.length == 1) 
      	hora = "0" + hora 

   	horaImprimivel = hora + " : " + minuto + " : " + segundo 

   	document.form_relogio.relogio.value = horaImprimivel 

   	setTimeout("moveRelogio()",1000) 

}
/*
$(function(){
$("#cpf").maxLength(6);
});
*/
function cpf_incorreto(el) {
      alert("O valor " + el.value + " não é um CPF, use o formato nnn.nnn.nnn-nn");
      return false;
   }



