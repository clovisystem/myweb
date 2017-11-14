<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<HEAD>
 <TITLE> - myWeb - </TITLE>
 <link type="text/css" rel="stylesheet" href="Estilo.css"/>
 <!--<link type="text/css" rel="stylesheet" href="EstiloFonte.css"/>-->
 <link rel="shortcut icon" href="MY_WEB-LOGO/favicon.ico" type="image/x-icon"/>
<?
include "based.php";
?>
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'pt', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script language="javascript" src="Jquery_Cycle\cycle.all.js"></script>
  
<script language="javascript">
$(document).ready(function(){
$("#slides ul").cycle({
fx:'scrollHorz',
speed:1000
});
});
</script>
<style>
#faixa{background-image:url("././BACKGROUNDS/faixaMinor.png");background-repeat:no-repeat; width:1000px; height:120px; 
 text-align:center;  margin-left:0px; padding-top:30px; color:white; font-family:Tahoma, calibri, arial; text-transform:uppercase;}
</style>
</HEAD>
<BODY bgcolor="#CCCCCC" id="corpo" align="center">

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



year='<b><tt>2017</tt></b> '


document.write(day + '<font size=2>' + myweekday + '</font>' + month + year + ' - ' + '<font size=2>' + timeValue + '</font>')

</script>
</div>
<br/>

<body>


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
<!--					<a href="http://www.adobe.com/go/getflash">
						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
					</a>
				<!--[if !IE]>-->
<!--				</object>
				<!--<![endif]-->
<!--			</object>
		</div>
	</body>-->
<p align="left"><img src="MY_WEB-LOGO/MyWeb.png" width="200" height="60" /></p>
    <br>


<?php

 //@session_start();
    //$_SESSION['c_email'];
    //$_SESSION['c_senha'];
    
include "based.php";

$sessao=$_GET['sessao'];
$sessaoMaior=strtoupper($_GET['sessao']);
$login=$_GET['login'];



$cor=@mysql_query("SELECT coalesce(background,'#B5C0C3') as background FROM users WHERE tituloPerfil LIKE '%$sessaoMaior%';",$conexao); 
//$cor=@msql_query($cor)or die(@mysql_error());
$cor=@mysql_fetch_array($cor);
$cor=$cor["background"];



$sessao1=str_replace("_"," ",$sessao);
//"#B5C0C3"
echo'<body bgcolor="#CCCCCC" id="corpo">';
echo'<table width="90%" bgcolor="'.$cor.'" id="body" align="center"><tr><td colspan="3" align="left">';
echo '<input type="text" name="logon" value="'.str_replace("_"," ",$login).'" readonly="true"  STYLE="background-color:transparent; border:none; font-size:18px; font-family:calibri,arial; color:green; font-weight:bold;"/>, esta é a Página do perfil de <input type="text" name="logon" value="'.strtoupper($sessao1).'" readonly="true" size="16" STYLE="background-color:transparent; border:none; font-size:18px; font-family:calibri,arial; color:green; font-weight:bold;"/>';
echo'</input>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="Voltar" onclick="history.back();" />';
echo'</td></tr>';


$listar0=@mysql_query("SELECT tituloPerfil FROM users WHERE tituloPerfil LIKE '%$sessao%' ;",$conexao);
$listar1=@mysql_query("SELECT email FROM users WHERE tituloPerfil LIKE '%$sessao%';",$conexao);
$listar2=@mysql_query("SELECT textoPerfil FROM users WHERE tituloPerfil LIKE '%$sessao%';",$conexao);
$listar3=@mysql_query("SELECT atividades FROM users WHERE tituloPerfil LIKE '%$sessao%';",$conexao);
$listar4=@mysql_query("SELECT hobby FROM users WHERE tituloPerfil LIKE '%$sessao%';",$conexao);
$listar5=@mysql_query("SELECT objetivo FROM users WHERE tituloPerfil LIKE '%$sessao%';",$conexao);
$listar6=@mysql_query("SELECT estado FROM users WHERE tituloPerfil LIKE '%$sessao%';",$conexao);
$listar7=@mysql_query("SELECT cidade FROM users WHERE tituloPerfil LIKE '%$sessao%';",$conexao);
$listar8=@mysql_query("SELECT arquivo FROM image WHERE foto LIKE '%$sessao%';",$conexao);
$listar11=@mysql_query("SELECT dia FROM users WHERE tituloPerfil LIKE '%$sessao%';",$conexao);
$listar12=@mysql_query("SELECT mes FROM users WHERE tituloPerfil LIKE '%$sessao%';",$conexao);


$perfil1=@mysql_result($listar0,0,tituloPerfil);
$perfil=@mysql_result($listar0,0,tituloPerfil);




echo '<form>';
echo'<tr><td width="20%" colspan="2" align="left"><p id="Estado"><font size="7" color="green" face="impact"
style="text-transform:uppercase">' .$perfil1=str_replace("_"," ",$perfil1);
echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></p></td><tr><td></td></tr><td></td>
<td width="50%" colspan="1" align="left" valign="bottom" >
<font color="#06438E" size="3" face="verdana"><b>Sobre mim...</b></td></tr>';
echo'<td width="15%" height="50" colspan="1" align="left" valign="bottom"><div id="campo" style="background-image:url(BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px;">E-mail:&nbsp;&nbsp;<font size="2" color="green" face="arial" style="font-weight:600;"> ' .@mysql_result($listar1,0,email);
echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div></td><td width="40%" rowspan="5" colspan="1"
valign="top" bgcolor="#B0C6D2" id="celula1"><font color="#168ECF" size="2" face="verdana">'
.@mysql_result($listar2,0,textoPerfil).'</font></td></tr>';

echo'<tr><td width="15%" colspan="1" height="50" align="left" valign="bottom"><br/><div id="campo" style="background-image:url(BACKGROUNDS/CampoMyWebTextArea.png);
background-repeat:no-repeat;height:160px;padding-top:20px;padding-left:10px;">Minhas atividades:
&nbsp;&nbsp;<br/><textarea  readonly="true" name="Atividades" valign="bottom" cols="42" rows="6"
id="Atividades" style="text-align:justify; margin:4px 0px 0px 7px; background-color:transparent; font-weight:600;">'
.@mysql_result($listar3,0,atividades);
echo'</textarea></font></div></td></tr>';
echo'<tr><td width="15%" colspan="1" height="50" align="left" valign="bottom"><div id="campo" style="background-image:url(BACKGROUNDS/CampoMyWebTextArea.png);
background-repeat:no-repeat;height:160px;padding-top:20px;padding-left:10px;">Meus hobbies:&nbsp;&nbsp;
<br/><textarea  readonly="true" name="hobbies" valign="bottom"  cols="45"  rows="2"
id="hobbies" style="text-align:justify; margin:4px 0px 0px 7px; background-color:transparent; font-weight:600;" >' .@mysql_result($listar4,0,hobby);
echo'</textarea></font></td></tr>';
echo'<td width="15%" height="50" colspan="1" align="left" valign="bottom"><div id="campo" style="background-image:url(BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px; background-color:transparent;">Status:&nbsp;&nbsp;
<font size="2" color="green" face="arial" style="font-weight:600;"> ' .@mysql_result($listar5,0,objetivo);
echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div></td></tr>';
echo'<td width="15%" height="50" colspan="1" align="left" valign="bottom"><div id="campo" style="background-image:url(BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px; background-color:transparent;">Estado:&nbsp;&nbsp;
<font size="2" color="green" face="arial" style="text-transform:uppercase; font-weight:600;"> '
 .@mysql_result($listar6,0,estado);
echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div></td>



</tr>';
echo'<td width="15%" height="50" colspan="1" align="left" valign="bottom"><div id="campo" style="background-image:url(BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px; background-color:transparent;">Cidade:&nbsp;&nbsp;
<font size="2" color="green" face="arial" style="text-transform:capitalize; font-weight:600;"> '
 .@mysql_result($listar7,0,cidade);
echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div></td>
</tr>';
echo'<tr><td width="50%" colspan="1" height="50" align="left" valign="bottom"><div id="campo" style="background-image:url(BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px; background-color:transparent;">Anivers&aacute;rio:&nbsp;&nbsp;
<input type="text" readonly="true" size="30" id="aniversario" valign="bottom" name="aniversario" style="background-color:transparent; font-weight:600;"
value="' .@mysql_result($listar11,0,dia).'/'.@mysql_result($listar12,0,mes);
echo'"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div></td>





</tr>

';


echo'<tr><td width="10%" height="30"colspan="1" height="50" align="left" valign="bottom">
<br/><br/>
<b>MINHAS FOTOS</b><br/><br/></td>
<td width="10%"  colspan="1" height="50" align="left" valign="bottom"></td></tr>';

?>
<tr><td width="10%" colspan="1" height="100" valign="top" align="left"  >
<?php
$sql = "SELECT imagem FROM $sessao WHERE contatos ='$sessao'  ";
$limite = @mysql_query("$sql");

while($sql = @mysql_fetch_array ($limite) ) {
$arquivo = $sql['imagem'];
echo'<form name="form2" method="get" action="" >';
echo'<span style="float:left; position:relative; padding:4px 8px 8px 4px;margin-top:19px;" ><a href='.$arquivo.'>
<img src=' .$arquivo. ' width="120" height="90" border="2" bordercolor="#FF6600"/></a> ';
?>
</span>
</form>

<?php }

echo'&nbsp;&nbsp;&nbsp;&nbsp;';

$sql = "SELECT arquivo FROM image WHERE tituloPerfil ='$sessao'  ";
$limite = @mysql_query("$sql");

while($sql = @mysql_fetch_array ($limite) ) {
$arquivo = $sql['arquivo'];
echo'<form name="form2" method="get" action="" >';
echo'<span style="float:left; position:relative; padding:4px 8px 8px 4px;"><a href='.$arquivo.'>
<img src=' .$arquivo. ' width="120" height="90" border="2" bordercolor="#FF6600"/></a> 

</span>
</form>';
}
echo'</td></tr>';



echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>';
echo'</form>';
echo'</table>';


echo'<table width="90%" bgcolor="'.$cor.'" id="body" align="center"><tr>

<td colspan="3"> <br/>



<div id="formulario2">
<form name="elimina" method="post" action="elimina.php?login='.$login.'">
<input type="hidden" name="perfil" value="'.$perfil.'"/>
<input type="submit" name="remove" value="Eliminar contato"/>
</form>
</div>
</td></tr></table>';

echo'<hr size="10%" width="90%" color="#A2A6A9">';


echo'<table width="90%" bgcolor="'.$cor.'" id="body" align="center"><tr><td align="left"><h1>ENVIO DE MENSAGENS</h1>
Deixe sua Mensagem aqui !
<form name="coment" action="insercao.php" method="post"><br>

<textarea name="comentarios" cols="50" rows="6" scrolling="no" wrap="on"></textarea><br><br>


De <input type="text" name="sessao" size="30" value="';?>
<?php
echo $login;

echo'" readonly="true"/>
Para <input type="text" name="postar" size="30" value="';

echo @mysql_result($listar1,0,email);

echo'" readonly="true"/><br/><br/><p align="left"><input type="button"  value="Voltar" onclick="history.go(-1)">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="submit" name="envio" value="Enviar" />

</p>
</form>



</td></tr></table>';





?>
 <br>
    <p align="right"><img src="BACKGROUNDS/Clov!System_2012_logo.png" width="120" height="60"/></p>
    <br>

</BODY>
</HTML>
