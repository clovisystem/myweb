<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<HEAD>
 <TITLE> - myWeb - </TITLE>

 <link rel="shortcut icon" href="MY_WEB-LOGO/favicon.ico" type="image/x-icon"/>
 <link type="text/css" rel="stylesheet" href="Estilo.css"/>

 <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="google-site-verification" content="Ap6M_wtc-8emjVHtvXtyea6HztiDHndeONJXrOEtXyA" />
<META NAME="AUTHOR"="Clovis Jr">
<META NAME="DESCRIPTION" CONTENT="myWeb">
<meta name="url" content="http://www.myweb.is-great.net">
<meta name="language" content="Portugues">
<meta name="keywords" content=" myweb ,myWeb , rede social, MYWEB, clovisjr, clovisystem, clov!system, junior, iped,  pragramação de sites ">
<meta name="reply-to" content="clovisystem_net@yahoo.com.br">
<meta name="copyright" content="Clov!System">
<meta name="category" content="Internet">
<meta name="Robots" content="Index,Follow">
<link rev=made href="mailto:clovisystem_net@hotmail.com">
<script language="javascript">
function submetendo()
{
//document.form.submit();
setTimeout("document.form0.submit();",3000); 
}

</script>
<style>
#faixa{background-image:url("././BACKGROUNDS/faixaMinor.png");background-repeat:no-repeat; width:1000px; height:120px; 
 text-align:center;  margin-left:0px; padding-top:30px; color:white; font-family:Tahoma, calibri, arial; text-transform:uppercase;}
</style>
</HEAD>
<BODY  bgcolor="#CCCCCC" id="body"  onload='submetendo()' >
 <?php
include 'based.php';
$user=isset($_POST['c_email'])?$_POST['c_email']:null;
?>



<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'pt', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<div align="right">

<script  Type="text/JavaScript" language="JavaScript" >
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var timeValue = "" + ((hours >12) ? hours -12 :hours)
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += (hours >= 12) ? " pm":" am"
timerRunning = true;

mydate = new Date();
myday = mydate.getDay();
mymonth = mydate.getMonth();
myweekday= mydate.getDate();
weekday= myweekday;
myyear= mydate.getYear();
year =  myyear



if(myday == 0)
day = " <b><tt>Domingo,</tt></b> "

else if(myday == 1)
day = " <b><tt>Segunda,</tt></b> "

else if(myday == 2)
day = " <b><tt>Terça,</tt></b> "

else if(myday == 3)
day = " <b><tt>Quarta,</tt></b> "

else if(myday == 4)
day = " <b><tt>Quinta,</tt></b> "

else if(myday == 5)
day = " <b><tt>Sexta,</tt></b> "

else if(myday == 6)
day = " <b><tt>Sábado,</tt></b> "

if(mymonth == 0)
month = " <b><tt>de Janeiro de</tt></b> "

else if(mymonth ==1)
month = "<b><tt> de Fevereiro de</tt></b> "

else if(mymonth ==2)
month = "<b><tt> de Março de</tt></b> "

else if(mymonth ==3)
month = "<b><tt> de Abril de</tt></b> "

else if(mymonth ==4)
month = "<b><tt> de Maio de</tt></b> "

else if(mymonth ==5)
month = "<b><tt> de Junho de</tt></b> "

else if(mymonth ==6)
month = "<b><tt> de Julho de</tt></b> "

else if(mymonth ==7)
month = "<b><tt> de Agosto de</tt></b> "

else if(mymonth ==8)
month = "<b><tt> de Setembro de </tt></b>"

else if(mymonth ==9)
month = "<b><tt> de Outubro de </tt></b>"

else if(mymonth ==10)
month = "<b><tt> de Novembro de </tt></b>"

else if(mymonth ==11)
month = "<b><tt> de Dezembro de </tt></b>"



year="<b><tt>2017</tt></b> "


document.write(day + "<font size=2>" + myweekday + "</font>" + month + year + " - " + "<font size=2>" + timeValue + "</font>")



</script>
</div>
<br/>






<div id="faixa">
<a href="https://www.google.com.br/" target="_blank">Google</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://www.infojobs.com.br/" target="_blank">Infojobs</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://g1.globo.com/" target="_blank">G1</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://www.r7.com/" target="_blank">R7</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://www.youtube.com/" target="_blank">YouTube</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
<!--		<div id="flashContent" align="center">
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="1000" height="50" id="guias" align="center">
				<param name="movie" value="guias.swf" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#cccccc" />
				<param name="play" value="true" />
				<param name="loop" value="true" />
				<param name="wmode" value="window" />
				<param name="scale" value="showall" />
				<param name="menu" value="true" />
				<param name="devicefont" value="false" />
				<param name="salign" value="" />
				<param name="allowScriptAccess" value="sameDomain" />
				<!--[if !IE]>-->
<!--				<object type="application/x-shockwave-flash" data="guias.swf" width="1000" height="50">
					<param name="movie" value="guias.swf" />
					<param name="quality" value="high" />
					<param name="bgcolor" value="#cccccc" />
					<param name="play" value="true" />
					<param name="loop" value="true" />
					<param name="wmode" value="window" />
					<param name="scale" value="showall" />
					<param name="menu" value="true" />
					<param name="devicefont" value="false" />
					<param name="salign" value="" />
					<param name="allowScriptAccess" value="sameDomain" />
				<!--<![endif]-->
	<!--				<a href="http://www.adobe.com/go/getflash">
						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
					</a>
				<!--[if !IE]>-->
	<!--			</object>
				<!--<![endif]-->
	<!--		</object>
		</div>
	</body>-->


<p align="left"><img src="MY_WEB-LOGO/MyWeb.png" width="200" height="60" />          </p>

<h1>ENTRANDO...</h1>
<br/><br/>
<div style="float:left; position:absolute;"></div>
<?php
include"based.php";
$password=$_POST["c_senha"];
$password=preg_replace('/[^[:alnum:]_]/', '',$password);  //evita SQL INJECTION  com numeros
$login=$_POST['c_email'];
$login=preg_replace('/[^[:alpha:]_]/', '',$login);  //evita SQL INJECTION    com letras
$dominio=$_POST['dominio'];
$email=$login."@".$dominio;
$perfil=@mysql_query("SELECT * FROM users WHERE email ='$email';",$conexao);
$perfil=preg_replace('/[^[:alpha:]_]/', '',$perfil);   //evita SQL INJECTION   com letras
$perfil1=@mysql_num_rows($perfil);
if($perfil1==0){echo"<script>alert('Informe seu e-mail corretamente.'); history.go(-1);</script>";}
//$email1=@mysql_query("SELECT * FROM users WHERE email ='$email';",$conexao);
//$email1=@mysql_fetch_array($email1);
//$email1=$email1["email"];
$perfil=@mysql_fetch_array($perfil);
$perfil=$perfil["tituloPerfil"];
//$email1=@mysql_num_rows($email1);








//elseif($pagina=="sobre"){
// include("sobre.php");
//}
//else {
// se nao estiver escrito nada disso, ele vai para a página inicial
//header("Location: /?pagina=inicio");
//}




echo"<form  name='form0' id='form0' method='post'  action='usuarios/".$perfil."/index.php'>";
echo"Aguarde...";
echo'<input type="hidden" name="c_senha"  value="'.$password.'"/>';
echo'<input type="hidden" name="c_email"  value="'.$login.'"/>';
echo'<input type="hidden" name="dominio"  value="'.$dominio.'"/>';
//echo"<script>location.href='usuarios/".$perfil."/index.php?c_email=".$login."&dominio=".$dominio."&e=".$password."';</script>";
echo'<input type="submit" style="visibility:hidden;" name="submit0" id="submit0"  value="Entrar"/>';

echo"</form>";
?>
</body>
</html>
