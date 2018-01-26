<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<HEAD>
 <TITLE> - myWeb - </TITLE>
 <link type="text/css" rel="stylesheet" href="Estilo.css"/>
 <link rel="shortcut icon" href="MY_WEB-LOGO/favicon.ico" type="image/x-icon"/>
 <style>
.select
{
scrollbar-arrow-color: "#FFF";
scrollbar-base-color: "#FFF";
scrollbar-3dlight-color:"#FFF";
scrollbar-highlight-color:"#FFF";
scrollbar-face-color:"#FFF";
scrollbar-shadow-color:"#FFF";
scrollbar-darkshadow-color:"#FFF";
scrollbar-track-color:"#FFF";
overflow:hidden;
margin-bottom:8px;
}


</style>
</HEAD>

<BODY style="background-image:url('BACKGROUNDS/layoutprinc.gif'); background-size:cover;background-repeat:no-repeat; background-attachment:fixed; height:100vh;">

<div align="">

<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'pt', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

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
day = " <b><tt>Ter&ccedil;a,</tt></b> "

else if(myday == 3)
day = " <b><tt>Quarta,</tt></b> "

else if(myday == 4)
day = " <b><tt>Quinta,</tt></b> "

else if(myday == 5)
day = " <b><tt>Sexta,</tt></b> "

else if(myday == 6)
day = " <b><tt>S&aacute;bado,</tt></b> "

if(mymonth == 0)
month = " <b><tt>de Janeiro de</tt></b> "

else if(mymonth ==1)
month = "<b><tt> de Fevereiro de</tt></b> "

else if(mymonth ==2)
month = "<b><tt> de Mar&ccedil;o de</tt></b> "

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



year='<b><tt>2018</tt></b> '


document.write(day + '<font size=2>' + myweekday + '</font>' + month + year + ' - ' + '<font size=2>' + timeValue + '</font>')



</script>
</div>
<br/>
<style>
#Email{text-transform:lowercase;}
 #Estado{text-transform:uppercase;}
 #body{font-family:tahoma; padding:21px; margin-bottom:60px;}
body a:link{text-decoration:none;}
 #celula{padding:10px;}
 #celula1{padding:16px; margin-left:0px;}
 #Proper{text-transform:capitalize;}
  #proper{text-transform:capitalize;}
 #corpo{padding:30px; font-family:tahoma;}
 #Titulo{font-size:40px; background:transparent; color:green; font-weight:900; border:none; font-family:arial; text-transform:uppercase;}
 #E-mail{font-size:14px; background-color:#B5C0C3; color:green; font-weight:100; border:none; font-family:calibri; text-transform:lowercase;}
 #Atividades{font-size:14px; background-color:#B5C0C3; color:green; font-weight:100; border:none; font-family:calibri; text-transform:capitalize;}
 #Texto{font-size:14px; background-color:#B0C6D2; color:#168ECF; font-weight:100; border:none; font-family:verdana; text-transform:capitalize;}
 #hobbies{font-size:14px; background-color:#B5C0C3; color:green; font-weight:100; border:none; font-family:calibri; text-transform:capitalize;}
 #objetivo{font-size:14px; background-color:#B5C0C3; color:green; font-weight:100; border:none; font-family:calibri; text-transform:capitalize;}
 #status{font-size:14px; background-color:#B5C0C3; color:green; font-weight:100; border:none; font-family:calibri; text-transform:capitalize;}
 #cidade{font-size:14px; background-color:#B5C0C3; color:green; font-weight:100; border:none; font-family:calibri; text-transform:capitalize;}
 #estado1{font-size:14px; background-color:#B5C0C3; color:green; font-weight:100; border:none; font-family:calibri; text-transform:uppercase;}
 #aniversario{font-size:14px; background-color:#B5C0C3; color:green; font-weight:100; border:none; font-family:calibri; text-transform:capitalize;}
 #email{text-transform:lowercase;}
  #Body{font-family:tahoma; padding:21px;}
  .botao{background-image:url("././botaoGradienteAzul/botaoGradienteAzulGrande.png"); background-repeat:no-repeat; margin-top:10px; width:160px; height:160px; 
  text-align:center; float:left; position:relative;
  }
  .texto{ padding-top:8px; font-size:11px; }
  .textoLocaliza{ padding-top:8px; font-size:11px; margin-top:25px;}
  .imagemContato{ padding-top:35px;}
  #segmento{width:800px; float:left; position:absolute;}
  
  #formulario1{position:relative; float:left; width:160px;}
   #formulario2{position:relative; float:left; width:160px;}
 .contatos{float:left; position:relative; width:520px;  margin-top:34px; margin-left:-2px;
 padding-bottom:20px; padding-top:-10px; padding-left:16px; background-color:#B0C6D2;}
 #lembraSenha{background-color:#B5C0C3; padding: 45px 45px 45px 45px;}
 #botaoCadastrar{background-image:url("././BOTOES/botaoCinzaGradiente/botaoCinzaGradiente.png"); background-repeat:no-repeat; width:120px; height:60px; 
 text-align:center;  margin-left:600px; padding-top:14px;}
 #botaoCadastrar a:visited{text-decoration:none; color:black;}
 #botaoCadastrar a:link{text-decoration:none; color:black;}
 #botaoCadastrar a:hover{text-decoration:none; color:yellow; cursor:hand}
 #esqueceuaSenha{background-image:url("././BOTOES/botaoCinzaGradiente/botaoCinzaGradiente.png"); background-repeat:no-repeat; width:120px; height:60px; 
 text-align:center; margin-left:600px; padding-top:20px;} 
 #esqueceuaSenha a:visited{text-decoration:none; color:black;}
 #esqueceuaSenha a:link{text-decoration:none; color:black;}
 #esqueceuaSenha a:hover{text-decoration:none; color:yellow; cursor:hand}

 
 #faixa{background-image:url("././BACKGROUNDS/faixaMinor.png");background-repeat:no-repeat;  width:100%; height:120px; 
  text-align:center;   padding-top:30px; color:white; font-family:Tahoma, calibri, arial; text-transform:uppercase;}
 

 #faixaEsq{background-image:url("BACKGROUNDS/faixaEsq.png");background-repeat:no-repeat;  width:5%; height:120px; 
 text-align:center;   padding-top:30px; color:white; font-family:Tahoma, calibri, arial; text-transform:uppercase;}

 #faixaMeio{background-image:url("BACKGROUNDS/faixaMeio.png");background-repeat:no-repeat;  width:90%; height:120px; 
  text-align:center;   padding-top:30px; color:white; font-family:Tahoma, calibri, arial; text-transform:uppercase;}

#faixaDir{background-image:url("BACKGROUNDS/faixaDir.png");background-repeat:no-repeat;  width:5%; height:120px; 
    text-align:center;   padding-top:30px; color:white; font-family:Tahoma, calibri, arial; text-transform:uppercase;}
 
 #faixa a:visited{text-decoration:none; color:white;}
 #faixa a:link{text-decoration:none; color:white;}
 #faixa a:hover{text-decoration:none; color:yellow;}
 
 #notificacao{background:#e6056a; width:20px; height:20px; float:left; position:relative; margin-left:3px; margin-right:0px; overflow:hidden; }
 #link{margin-left:180px; width:160px; height:40px; float:left; position:relative; }
 #link1{margin-left:100px; width:160px; height:40px; float:left; position:relative; }
 #link2{margin-left:100px; width:160px; height:40px; float:left; position:relative; margin-top:-18px;}
 #contador{background-image:url("././BACKGROUNDS/contador.png");background-repeat:no-repeat; width:260px; height:30px; }
 #contadorMaior{background-image:url("././BACKGROUNDS/contadorMaior1.png");background-repeat:no-repeat; width:260px; height:40px; }
 /*#contatos1{float:left; position:relative; width:220px;}*/
 #slides{overflow:hidden; width:600px; height:300px;}
fieldset{border-radius:10px;}
</style>

<style>
 a:visited{text-decoration:none; color:black;}
 a:link{text-decoration:none; color:black;}
 a:hover{text-decoration:none; color:yellow; cursor:hand}

</style>


<div style="background-color:#CCCCCC; width:93%; height:88px; border-radius:12px; padding-top:4px; margin-left:7px;"  >
<!--<div class="container container-fluid col-xs-12 ">-->
<!--<div class="container container-fluid col-xs-1 "  id="faixaEsq" style="margin-left:-10px; position:absolute; float:left; background-image:url('BACKGROUNDS/faixaEsq.png');background-repeat:no-repeat;  width:2%; height:120px; 
 text-align:center;  background-size:100%  padding-top:30px; color:white; font-family:Tahoma, calibri, arial; text-transform:uppercase; "></div>
-->
<div class="container container-fluid col-xs-12 "   style="margin-left:6px;  position:absolute; float:left;  width:96%; height:120px; 
  text-align:center;   padding-top:30px; padding-left:-10px; color:white; font-family:Tahoma, calibri, arial; text-transform:uppercase;">
<a href="https://www.google.com.br/" target="_blank" >Google</a>
<a href="http://www.infojobs.com.br/" target="_blank" style="margin-left:20px;">Infojobs</a>
<a href="http://g1.globo.com/" target="_blank" style="margin-left:20px;">G1</a>
<a href="http://www.r7.com/" target="_blank" style="margin-left:20px;">R7</a>
<a href="https://www.youtube.com/" target="_blank" style="margin-left:20px;">YouTube</a>
</div>
<!--<div class="container container-fluid col-xs-1 "  id="faixaDir"  style="margin-left:95.2%;  position:absolute; float:left; background-image:url('BACKGROUNDS/faixaDir.png');background-repeat:no-repeat;  width:2%; height:120px; 
    text-align:center;  background-size:100%  padding-top:30px; color:white; font-family:Tahoma, calibri, arial; text-transform:uppercase; "></div>
-->
<!--</div>-->
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
	<!--			<object type="application/x-shockwave-flash" data="guias.swf" width="1000" height="50">
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
	<div style="background-color:white; border-radius:12px; width:93%; height:60px; margin-left:10px;"><p align="left"><img src="MY_WEB-LOGO/MyWeb.png" width="200" height="60" /></p></div>
	
    <br>


<?php
include"based.php";

if(empty($_GET["nome"])){
echo"<font face='tahoma' size='3' color='red'><b><br>Erro !!!</b></font><br>";
echo"<input type='submit' value='Voltar' onclick='history.go(-1);'/>";}
else{

     $senha=@mysql_query("SELECT senha FROM _users WHERE senha LIKE'%$_POST[logar]%';",$conexao);
     @session_start();

     $_SESSION['c_senha']=$senha;
	 $voce=$_GET['login'];
	 $voce=str_replace("_"," ",$voce);
	 $localizado1=$_GET['nome'];
     $localizado=$_GET['nome'];
	 $localizado=strtolower($_GET['nome']);
	 
//$sessao=$_GET['sessao'];
//$sessaoMaior=strtoupper($_GET['sessao']);
//$login=$_GET['login'];

$cor=@mysql_query("SELECT coalesce(background,'#B5C0C3') as background FROM _users WHERE tituloPerfil LIKE '%$localizado1%';",$conexao); 
//$cor=@msql_query($cor)or die(@mysql_error());
$cor=@mysql_fetch_array($cor);
$cor=$cor["background"];

echo'<body bgcolor="#CCCCCC" id="corpo">';
echo'<table width="93%" bgcolor="'.$cor.'" id="body" style="margin-left:8px;"><tr><td colspan="3">';
echo $voce.'<span style="font-size:18px; font-family:calibri,arial; color:green; font-weight:bold;">, esta &eacute; a P&aacute;gina do perfil de <input type="text" name="logon" value="'.$localizado1=str_replace("_"," ",$localizado1).'" readonly="true" size="16" STYLE="background-color:transparent; border:none; font-size:18px; font-family:calibri,arial; color:green; font-weight:bold;"/></span>';
echo'</input>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="Voltar" onclick="history.go(-2);" />';
echo'</td></tr>';


$listar0=@mysql_query("SELECT tituloPerfil FROM _users WHERE tituloPerfil LIKE '%$_GET[nome]%' ;",$conexao);
$listar1=@mysql_query("SELECT email FROM _users WHERE tituloPerfil LIKE '%$_GET[nome]%';",$conexao);
$listar2=@mysql_query("SELECT textoPerfil FROM _users WHERE tituloPerfil LIKE '%$_GET[nome]%';",$conexao);
$listar3=@mysql_query("SELECT atividades FROM _users WHERE tituloPerfil LIKE '%$_GET[nome]%';",$conexao);
$listar4=@mysql_query("SELECT hobby FROM _users WHERE tituloPerfil LIKE '%$_GET[nome]%';",$conexao);
$listar5=@mysql_query("SELECT status FROM _users WHERE tituloPerfil LIKE '%$_GET[nome]%';",$conexao);
$listar6=@mysql_query("SELECT estado FROM _users WHERE tituloPerfil LIKE '%$_GET[nome]%';",$conexao);
$listar7=@mysql_query("SELECT cidade FROM _users WHERE tituloPerfil LIKE '%$_GET[nome]%';",$conexao);
$listar8=@mysql_query("SELECT arquivo FROM _image WHERE foto LIKE '%$localizado%';",$conexao);
$listar11=@mysql_query("SELECT dia FROM _users WHERE tituloPerfil LIKE '%$_GET[login]%';",$conexao);
$listar12=@mysql_query("SELECT mes FROM _users WHERE tituloPerfil LIKE '%$_GET[login]%';",$conexao);


//$listar21="Clovis_Jr";
//$listar20=str_replace("_"," ",$listar0);
$perfil1=@mysql_result($listar0,0,tituloPerfil);
$perfil=@mysql_result($listar0,0,tituloPerfil);
echo '<form>';
echo'<tr><td width="20%" colspan="2"><p id="Estado"><font size="7" color="green" face="impact"
style="text-transform:uppercase">' .$perfil1=str_replace("_"," ",$perfil1);
echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></p></td><tr><td></td></tr><td></td>
<td width="50%" colspan="1" align="left" valign="bottom" >
<font color="#06438E" size="3" face="verdana"><b>Sobre mim...</b></td></tr>';
echo'<td width="15%" height="50" colspan="1" valign="bottom"><div id="campo" style="background-image:url(BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px; ">E-mail:&nbsp;&nbsp;<font size="2" color="green" face="arial" style="font-weight:600;"> ' .@mysql_result($listar1,0,email);
echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div></td><td width="40%" rowspan="5" colspan="1"
valign="top" bgcolor="#B0C6D2" id="celula1"><font color="#168ECF" size="2" face="verdana">'
.@mysql_result($listar2,0,textoPerfil).'</font></td></tr>';

echo'<tr><td width="15%" colspan="1" height="50" valign="bottom"><br/><div id="campo" style="background-image:url(BACKGROUNDS/CampoMyWebTextArea.png);
background-repeat:no-repeat;height:160px;padding-top:20px;padding-left:10px; ">Minhas atividades:
&nbsp;&nbsp;<br/><textarea  readonly="true" name="Atividades" valign="bottom" cols="42" rows="6"
id="Atividades" style="text-align:justify; margin:4px 0px 0px 7px; background-color:transparent; font-weight:600;">'
.@mysql_result($listar3,0,atividades);
echo'</textarea></font></div></td></tr>';
echo'<tr><td width="15%" colspan="1" height="50" valign="bottom"><div id="campo" style="background-image:url(BACKGROUNDS/CampoMyWebTextArea.png);
background-repeat:no-repeat;height:160px;padding-top:20px;padding-left:10px; ">Meus hobbies:&nbsp;&nbsp;
<br/><textarea  readonly="true" name="hobbies" valign="bottom"  cols="42"  rows="6"
id="hobbies" style="text-align:justify; margin:4px 0px 0px 7px; background-color:transparent; font-weight:600;" >' .@mysql_result($listar4,0,hobby);
echo'</textarea></font></div></td></tr>';
echo'<td width="15%" height="50" colspan="1" valign="bottom"><div id="campo" style="background-image:url(BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px; ">Status:&nbsp;&nbsp;
<font size="2" color="green" face="arial" style="font-weight:600;"> ' .@mysql_result($listar5,0,status);
echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div></td></tr>';
echo'<td width="15%" height="50" colspan="1" valign="bottom"><div id="campo" style="background-image:url(BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px; ">Estado:&nbsp;&nbsp;
<font size="2" color="green" face="arial" style="text-transform:uppercase; font-weight:600;"> '
 .@mysql_result($listar6,0,estado);
echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div></td></tr>';
echo'<td width="15%" height="50" colspan="1" valign="bottom"><div id="campo" style="background-image:url(BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px; ">Cidade:&nbsp;&nbsp;
<font size="2" color="green" face="arial" style="text-transform:capitalize; font-weight:600;"> '
 .@mysql_result($listar7,0,cidade);
echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div></td>
</tr>';
echo'<tr><td width="50%" colspan="1" height="50" valign="bottom"><div id="campo" style="background-image:url(BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px; ">Anivers&aacute;rio:&nbsp;&nbsp;
<input type="text" readonly="true" size="30" id="aniversario" valign="bottom" name="aniversario" style="background-color:transparent; font-weight:600;"
value="' .@mysql_result($listar11,0,dia).'/'.@mysql_result($listar12,0,mes);
echo'"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div></td></tr>';



echo'<tr><td width="50%" height="30"colspan="1" height="50" valign="bottom">
<br/><br/>
<b>MINHA FOTO</b><br/><br/></td>
<td width="50%" height="30" colspan="1" height="50" valign="bottom"></td></tr>';

?>
<tr><td width="10%" colspan="1" height="100" valign="top" align="left"  >
<?php

$sql0 = "SELECT imagem FROM $localizado WHERE contatos='$localizado'";
$limite0 = @mysql_query("$sql0");
while($sql0 = @mysql_fetch_array ($limite0)){
$arquivo0 = $sql0['imagem'];
echo'<div style="text-align:top; background:#CCCCCC; float:left; position:relative; padding:4px 4px 4px 4px;">Foto Principal<br/>';
echo'<a href='.$arquivo0.'>
<img src='.$arquivo0.' width="150"  height="180" border="2" bordercolor="#FF6600"/></a></div>
</div>';


}



?>
<?php
}

echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>';
echo'</form>';
echo'</table>';
echo'<table width="93%" bgcolor="'.$cor.'" id="body" style="margin-left:8px;"><tr>
<td colspan="3"> <br/>
<div id="formulario1">
<form name="adiciona" method="post" action="adiciona.php?login='.$_GET["login"].'">';
$adicionar=@mysql_query("SELECT contatos FROM strtolower($login WHERE) contatos = 'strtolower($localizado)';",$conexao);
$adicionar=@mysql_num_rows($adicionar);
//$adicionar=$adicionar["contatos"];
if($adicionar > 0){ 
echo'<div style="background:'.$cor.'; width:93%; height:50px;">';
 echo"Voces sao amigos.";
 echo"</div>";
}
else{ 
    echo"<div style='background:'.$cor.'; width:93%; height:50px;'>";
	echo"<input type='hidden' name='perfil' value='".$localizado."'/>";
	echo"<input type='submit' name='add' value='Adicionar contato'/>";
 echo"</div>";

}
?>

</td></tr></table>

<hr size="10%" width="93%" color="#A2A6A9" style="margin-left:8px;">


  




 <br>
    <p align="right"><img src="BACKGROUNDS/Clov!System_2012_logo.png" width="120" height="60"/></p>
    <br>

</BODY>
</HTML>
