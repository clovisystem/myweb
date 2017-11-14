echo"<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<head>
<title> - myWeb - </title>

 <link type='text/css' rel='stylesheet' href='Estilo.css'/>
 <link rel='shortcut icon' href="MY_WEB-LOGO/favicon.ico" type='image/x-icon'/>
</head>

<body bgcolor='#CCCCCC' id='corpo'>

<div align='right'>
<script  Type='text/JavaScript' language='JavaScript' >


var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var timeValue = '' + ((hours >12) ? hours -12 :hours)
timeValue += ((minutes < 10) ? ':0' : ':') + minutes
timeValue += (hours >= 12) ? ' pm':' am'
timerRunning = true;

mydate = new Date();
myday = mydate.getDay();
mymonth = mydate.getMonth();
myweekday= mydate.getDate();
weekday= myweekday;
myyear= mydate.getYear();
year =  myyear



if(myday == 0)
day = ' <b><tt>Domingo,</tt></b> '

else if(myday == 1)
day = ' <b><tt>Segunda,</tt></b> '

else if(myday == 2)
day = ' <b><tt>Terça,</tt></b> '

else if(myday == 3)
day = ' <b><tt>Quarta,</tt></b> '

else if(myday == 4)
day = ' <b><tt>Quinta,</tt></b> '

else if(myday == 5)
day = ' <b><tt>Sexta,</tt></b> '

else if(myday == 6)
day = ' <b><tt>Sábado,</tt></b> '

if(mymonth == 0)
month = ' <b><tt>de Janeiro de</tt></b> '

else if(mymonth ==1)
month = '<b><tt> de Fevereiro de</tt></b> '

else if(mymonth ==2)
month = '<b><tt> de Março de</tt></b> '

else if(mymonth ==3)
month = '<b><tt> de Abril de</tt></b> '

else if(mymonth ==4)
month = '<b><tt> de Maio de</tt></b> '

else if(mymonth ==5)
month = '<b><tt> de Junho de</tt></b> '

else if(mymonth ==6)
month = '<b><tt> de Julho de</tt></b> '

else if(mymonth ==7)
month = '<b><tt> de Agosto de</tt></b> '

else if(mymonth ==8)
month = '<b><tt> de Setembro de </tt></b>'

else if(mymonth ==9)
month = '<b><tt> de Outubro de </tt></b>'

else if(mymonth ==10)
month = '<b><tt> de Novembro de </tt></b>'

else if(mymonth ==11)
month = '<b><tt> de Dezembro de </tt></b>'



year='<b><tt>2017</tt></b> '


document.write(day + '<font size=2>' + myweekday + '</font>' + month + year + ' - ' + '<font size=2>' + timeValue + '</font>')



</script>
</div>
<br/>

<body bgcolor='#CCCCCC' id='corpo'>

<p align="left"><img src="MY_WEB-LOGO/MyWeb.png" width="200" height="60" /></p>
<br/>
<?php
include"based.php";

$login = isset($_POST['login'])?$_POST['login']:null;

  

   //$login = $_POST['c_email'];
   //Verifica se existe usuario
   $sql_busca = "SELECT * FROM users WHERE email = '$login'";
   $exe_busca = @mysql_query($sql_busca) or die (mysql_error());
   $fet_busca = @mysql_fetch_assoc($exe_busca);
   $num_busca = @mysql_num_rows($exe_busca);
   //verifica se existe uma linha com o login digitado
   if ($num_busca > 0){
      $email = $fet_busca['email'];
	  $senha = $fet_busca['senha'];
	  
	  echo"<div id='lembraSenha'>Sua senha &eacute;: ".$senha;
	  echo"&nbsp;&nbsp;&nbsp;&nbsp;<button type='button' name='voltar' value='Voltar' onclick='history.go(-2)'>Voltar</button></div>";
	  
	  
	  //$topico = "Esquece senha";
	  //$mensagem = "<html>";
	  //$mensagem .= "<body>";
	  //$mensagem .= "<br>Você efetuou um pedido de recuperação de senha no webPost.</br>";
	  //$mensagem .=	"<br>Login: $login";
	  //$mensagem .=	"<br>Senha: $senha<br>";
	  //$mensagem .= "<br>Site oficial do webPost";
	  //$mensagem .=	"<br><a href='Logar.php'>webPost</a></br>";
	  //$mensagem .=	"</body>";
	  //$mensagem .=	"</html>";
	  //$headers = "MIME-Version: 1.0\r\n";
      //$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	  //$headers .= "From: webPost <$email>\r\n";
	  
	  ////enviar para o email o login e a senha
	  //mail($email, $topico, $mensagem, $headers);
      //$ac[] = "Sua senha foi enviado para seu e-mail.";
   }
  else if((empty($login))){
  echo"<script> alert('Preencha o campo.');location.href='esqueceSenha.php';</script>";
  
  }
   else{
   echo"Usuário n&atilde;o se encontra no nosso banco de dados";
	}

?>
</body>
</html>
