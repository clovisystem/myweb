<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<HEAD>
 <TITLE> - myWeb - </TITLE>

 <link rel="shortcut icon" href="MY_WEB-LOGO/favicon.ico" type="image/x-icon"/>
 <link type="text/css" rel="stylesheet" href="Estilo.css"/>
<!-- <link type="text/css" rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
 <link type="text/css" rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css"/>
<script  Type="text/JavaScript" language="JavaScript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"/>
<script  Type="text/JavaScript" language="JavaScript" src="bootstrap-3.3.7-dist/js/bootstrap.js"/>-->

 <script language="javascript" src="pop-up.js"></script>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
<style>
#faixa{background-image:url("././BACKGROUNDS/faixaMinor.png");background-repeat:no-repeat; width:1000px; height:120px; 
 text-align:center;  margin-left:0px; padding-top:30px; color:white; font-family:Tahoma, calibri, arial; text-transform:uppercase;}
</style>

</HEAD>
<BODY onload="movePopUp();" style="background:#CCCCCC;" id="body" >

 <?php
include 'based.php';
$user=isset($_POST['c_email'])?$_POST['c_email']:null;
?>
<!--
<div class="alert alert-info">
<strong>Info!</strong> Indicates a neutral informative change or action.
</div>

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog">

<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Modal Header</h4>
</div>
<div class="modal-body">
<p>Some text in the modal.</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>-->

<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'pt', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<div id="cabecalho" align="right">

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

<?php
ini_set("default_charset","UTF-8");
?>
<p align="left"><img src="MY_WEB-LOGO/MyWeb.png" width="200" height="60" />          </p>

<fieldset id="painel" >
<legend>
<h1>LOGIN DE USU&Aacute;RIOS</h1>
</legend>

<BR>
<?php

//$usuario=isset($_POST['c_email']@websystem.me)?$_POST['c_email']@websystem.me:null;
echo'<form method="post" name="logar" action="direciona.php">';
$perfil=@mysql_query("SELECT tituloPerfil FROM users WHERE email='$_POST[c_email]';",$conexao);

?>
<script>
function mudaTransparencia(){
document.getElementById('entrar').style.opacity=1;
//document.getElementById('entrar').style.BackgroundColor=yellow;
}
function mudaTransparencia1(){
document.getElementById('entrar').style.opacity=0.5;

}
</script>
    <font face="tahoma"   style="float:left; position:relative; font-size:15px;">
    E-mail:<input type="text" name="c_email" id="c_email" placeholder="Meu e-mail" size="20"  onmouseover="mudaTransparencia();" onClick="javascript:this.value=''">@<select name="dominio">
<option value="gmail.com" selected>gmail.com</option>
<option value="hotmail.com" >hotmail.com</option>
<option value="outlook.com" >outlook.com</option>
<option value="yahoo.com" >yahoo.com</option>
<option value="yahoo.com.br" >yahoo.com.br</option>
<option value="ig.com.br">ig.com.br</option>
<option value="ig.com" >ig.com</option>
<option value="globo.com" >globo.com</option>
<option value="terra.com.br" >terra.com.br</option>
<option value="r7.com" >r7.com</option>
<option value="bol.com.br" >bol.com.br</option>
<option value="uol.com" >uol.com</option>
<option value="uol.com.br" >uol.com.br</option>
</select>
<!--@myweb.is-great.net--><BR/><BR/>

    Senha:<input type="password" id="c_senha" name="c_senha" value="secret"  onmouseover="mudaTransparencia();" size="20"  onClick="javascript:this.value='';"/ ><BR/>
	<br/>
    <p align="left">
     <label>
    <input type="submit"  id="entrar" name="entrar" value="Entrar!" STYLE="border:0; height:35px; width:110px; border-radius:8px; opacity: 0.5; filter: alpha(opacity=50); "
	onmouseover="mudaTransparencia();" onmouseout="mudaTransparencia1();" 
    />
     </label>
    </p>
	 </font>
<?php	echo' <input type="hidden" name="perfil" value="'.$perfil.'"/>';?>
    </form>
	
</legend>







    <form method="post" name="cadastro" action="">
    <p align="center">
     <label>
    <div id="botaoCadastrar">
	<a href="CadastrarUsuario.php">Cadastre-se</a>
	</div><!--STYLE="border:0; height:25;
    width:80; background:#999999;"-->
     </label>
    </p>
   
    </form>
    
    <form method="post" name="esquece" action="">
    <p align="center">
     <label>
	 <div id="esqueceuaSenha">
    <a href="esqueceSenha.php">Esqueceu <br/>a Senha?</a>
	</div>
     </label>
    </p>
    </font>
    </form>
	<!--<form method="post" name="sugestao" action="sugestao.php">	
    <p align="center">
     <label>
    <input type="submit" onmouseover=this.style.cursor="hand" name="sugestao" value="Sugestões" STYLE="border:0; height:25; width:80;
    background:#999999;"/>
     </label>
    </p>
	</form>-->
    <br>
    <p align="right"><img src="BACKGROUNDS/Clov!System_2012_logo.png" width="120" height="60"/></p>
    <br>
	
	
    
    


</BODY>
</HTML>
