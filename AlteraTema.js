// Fun��o que verifica se o navegador tem suporte AJAX 
function AjaxF()
{
 var ajax;

 try
 {
  ajax = new XMLHttpRequest();
 } 
 catch(e) 
 {
  try
  {
   ajax = new ActiveXObject("Msxml2.XMLHTTP");
  }
  catch(e) 
  {
   try 
   {
    ajax = new ActiveXObject("Microsoft.XMLHTTP");
   }
   catch(e) 
   {
    alert("Seu browser n�o da suporte � AJAX!");
    return false;
   }
  }
 }
 return ajax;
}

// Fun��o que faz as requisi��o Ajax ao arquivo PHP
function AlteraTema()
{
 var ajax = AjaxF();	

 ajax.onreadystatechange = function(){
  if(ajax.readyState == 4)
  {
   document.getElementById('pagina').innerHTML = ajax.responseText;
  }
 }

 // Vari�vel com os dados que ser�o enviados ao PHP
 var dados = "background="+document.getElementById('mudarBackground').value;

 ajax.open("GET", "Resultado.php?"+dados, false);
 ajax.setRequestHeader("Content-Type", "text/html");
 ajax.send();
 

}