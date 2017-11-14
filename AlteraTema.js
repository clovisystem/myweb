// Função que verifica se o navegador tem suporte AJAX 
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
    alert("Seu browser não da suporte à AJAX!");
    return false;
   }
  }
 }
 return ajax;
}

// Função que faz as requisição Ajax ao arquivo PHP
function AlteraTema()
{
 var ajax = AjaxF();	

 ajax.onreadystatechange = function(){
  if(ajax.readyState == 4)
  {
   document.getElementById('pagina').innerHTML = ajax.responseText;
  }
 }

 // Variável com os dados que serão enviados ao PHP
 var dados = "background="+document.getElementById('mudarBackground').value;

 ajax.open("GET", "Resultado.php?"+dados, false);
 ajax.setRequestHeader("Content-Type", "text/html");
 ajax.send();
 

}