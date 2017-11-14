<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<HEAD>
 <TITLE> - webSystem - </TITLE>
  <link type="text/css" rel="stylesheet" href="Estilo.css"/>
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
<style type="text/css">

textarea
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

#faixa{background-image:url("././BACKGROUNDS/faixaMinor.png");background-repeat:no-repeat; width:1000px; height:120px; 
 text-align:center;  margin-left:0px; padding-top:30px; color:white; font-family:Tahoma, calibri, arial; text-transform:uppercase;}

</style>

</HEAD>
<BODY bgcolor="#CCCCCC" id="corpo">
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


<?php
include "based.php";



	
	$voltaLogin=isset($_GET['voltaLogin'])?$_GET['voltaLogin']:null;
	$voltaPassword=isset($_GET['voltaPassword'])?$_GET['voltaPassword']:null;	
	
echo "<input type='hidden' name='password' value='".$voltaPassword."'/>";

$sql_logar = "SELECT email,atividades,textoPerfil,tituloPerfil,estado,cidade,hobby,status,ano,dia,mes FROM users WHERE email = '$voltaLogin' &&  senha = '$voltaPassword'";
$exe_logar = mysql_query($sql_logar) or die (mysql_error());
$fet_logar = mysql_fetch_assoc($exe_logar);
$num_logar = mysql_num_rows($exe_logar);

if ($num_logar == 0){
   echo "<body bgcolor='#CCCCCC' id='corpo'>";
   echo "<p id='Estado' align='center'>Login ou senha invalido.</p><br/><br/>";
   echo "<br/><center><a href='javascript:window.history.go(-1)'>Clique aqui para voltar.</a><center></body>";
   if(!filter_var($voltaLogin,FILTER_VALIDATE_EMAIL)){
        echo '<body bgcolor="#CCCCCC" id="corpo">';
        echo'<p id="Estado">Digite um E-mail válido.</p><br/><br/>';
        echo'</body>';}
}
else{
    @session_start();
    $_SESSION['c_login']=$voltaLogin;
    $_SESSION['c_senha']=$voltaPassword;


    echo $_SESSION['c_login'].' logado(a) com sucesso!<br/>';
    echo'<form method="post" enctype="multipart/form-data" action="">
    <a href="index.php"><input type="button" name="sair" value="Fazer logoff" /></a> </form>';
    $localizaContato=$voltaLogin;
?>








		<div id="flashContent" align="center">
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
				<object type="application/x-shockwave-flash" data="guias.swf" width="1000" height="50">
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
					<a href="http://www.adobe.com/go/getflash">
						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
					</a>
				<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>
		</div>

<p align="left"><img src="WEBSYSTEM_LOGO/WEBSYSTEM_LOGO.png" width="200" height="60" />          </p>


<?php

$listar0=@mysql_query("SELECT tituloPerfil FROM users WHERE email LIKE '%$voltaLogin%' AND senha LIKE'%$voltaPassword%' ;",$conexao);
$listar1=@mysql_query("SELECT email FROM users WHERE email LIKE '%$voltaLogin%' AND senha LIKE'%$voltaPassword%' ;",$conexao);
$listar2=@mysql_query("SELECT textoPerfil FROM users WHERE email LIKE '%$voltaLogin%' AND senha LIKE'%$voltaPassword%';",$conexao);
$listar3=@mysql_query("SELECT atividades FROM users WHERE email LIKE '%$voltaLogin%' AND senha LIKE'%$voltaPassword%';",$conexao);
$listar4=@mysql_query("SELECT hobby FROM users WHERE email LIKE '%$voltaLogin%' AND senha LIKE'%$voltaPassword%';",$conexao);
$listar5=@mysql_query("SELECT status FROM users WHERE email LIKE '%$voltaLogin%' AND senha LIKE'%$voltaPassword%';",$conexao);
$listar6=@mysql_query("SELECT estado FROM users WHERE email LIKE '%$voltaLogin%' AND senha LIKE'%$voltaPassword%';",$conexao);
$listar7=@mysql_query("SELECT cidade FROM users WHERE email LIKE '%$voltaLogin%' AND senha LIKE'%$voltaPassword%';",$conexao);
$listar9=@mysql_query("SELECT sessao FROM mensagens WHERE postar = '%$voltaLogin%';",$conexao);
$listar10=@mysql_query("SELECT comentario FROM mensagens WHERE postar = '%$voltaLogin%';",$conexao);
$listar11=@mysql_query("SELECT dia FROM users WHERE email LIKE '%$voltaLogin%' AND senha LIKE'%$voltaPassword%';",$conexao);
$listar12=@mysql_query("SELECT mes FROM users WHERE email LIKE '%$voltaLogin%' AND senha LIKE'%$voltaPassword%';",$conexao);
echo '<form>';
echo'<table width="90%" bgcolor="#B5C0C3" align="left" id="body" style="bordercolor:transparent;"><tr>
<td width="20%" colspan="1"  id="estado"><input type="text" readonly="true"  name="Titulo"
id="Titulo" value="' .$perfil=@mysql_result($listar0,0,tituloPerfil);
echo'"/><br/><br/><br/><font color="#06438E" size="3" face="verdana"><b>Como sou...</b></font><br/></td>';
echo'<td>';
?>
<?php
$consulta = "SELECT * FROM principal WHERE nome ='$perfil'  ";
$limitar= @mysql_query("$consulta");

$consulta = @mysql_fetch_array ($limitar);
$fotoPrincipal = $consulta['fotoPrincipal'];

echo'<span style="float:left; position:relative; padding:4px 4px 4px 4px; border:outset;" >
<img src='.$fotoPrincipal.' width="120"  height="120"  bordercolor="#FF6600"/>
</span>
';

?>
<?php
echo'</td><td width="50%" >
<</td></tr>';
echo'<tr><td width="40%" rowspan="12" valign="top"
bgcolor="#B0C6D2" id="celula1"><textarea readonly="true" cols="70" rows="8" id="Texto">'.@mysql_result($listar2,0,textoPerfil).'</textarea>';
echo '<br/><br/><a href="alteraTexto.php?meuPerfil=ALTERAR PERFIL"><input type="button"
name="alteraTexto" id="alteraTexto" value="Alterar" /></a>
<br/>
<div id="contorno">	

<div id="opcoes" style="margin-top:250px; border:inset; background-color:#92c6f7; width:80%;">
<a href="minhasFotos.php?perfil='.$perfil.'&login='.$voltaLogin.'"><div id="Link">MINHAS FOTOS</div></a></div>
<div id="opcoes" style="border:inset; background-color:#92c6f7; text-decoration:none; width:70%;">
<a href="http://www.iped.com.br/afiliado/684775"><div id="Link">CURSOS</div></a></div>
<div id="opcoes" style="margin-top:3px; border:inset; background-color:#92c6f7; text-decoration:none; width:60%;">
<a href="http://www.rankingdofutebol.netai.net"><div id="Link">FUTEBOL</div></a></div>
<div id="opcoes" style="margin-top:3px; border:inset; background-color:#92c6f7; text-decoration:none; width:50%;">
<a href="http://www.d-virtuais.comule.com"><div id="Link">NEGÓCIO</div></a></div>

</div>

</td></tr>';
echo'';

echo'<tr><td width="50%" colspan="1" height="50" rowspan="1" style="padding-left:16px;">E-mail:&nbsp;&nbsp;
<input type="text" readonly="true" name="E-mail" size="30"  id="E-mail" value="'
.@mysql_result($listar1,0,email);
echo'"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>';
echo'<tr><td width="50%" colspan="1" height="50" style="padding-left:16px;">Sexo:&nbsp;&nbsp;
<input type="text" readonly="true" size="30" id="sexo"  name="sexo"
value="' .@mysql_result($listar15,0,sexo);
echo'"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>';
echo'<tr><td width="50%" colspan="1" height="50" style="padding-left:16px;">Escolaridade:&nbsp;&nbsp;
<input type="text" readonly="true" size="30" id="escolaridade"  name="escolaridade"
value="' .@mysql_result($listar11,0,escolaridade);
echo'"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>';
echo'<tr><td width="50%" colspan="1" height="50" style="padding-left:16px;">Profissao:&nbsp;&nbsp;
<input type="text" readonly="true" size="30" id="profissao"  name="profissao"
value="' .@mysql_result($listar11,0,profissao);
echo'"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>';
echo'<tr><td width="50%" colspan="1" height="50" style="padding-left:16px;"><br/>Minhas atividades:
&nbsp;&nbsp;<br/><textarea  readonly="true" name="Atividades" cols="50" rows="2"
id="Atividades" style="text-align:justify; margin:4px 0px 0px 7px;">' .@mysql_result($listar3,0,atividades);
echo'</textarea></font></td></tr>';
echo'<tr><td width="50%" colspan="1" height="50" style="padding-left:16px;">Meus hobbies:&nbsp;&nbsp;
<br/><textarea  readonly="true" name="hobbies"  cols="50"  rows="2"
id="hobbies" style="text-align:justify; margin:4px 0px 0px 7px;" ">' .@mysql_result($listar4,0,hobby);
echo'</textarea></font></td></tr>';
echo'<tr><td width="50%" colspan="1" height="50" style="padding-left:16px;">Status:&nbsp;&nbsp;
<input type="text" readonly="true" size="30" name="status"  id="status"
value="' .@mysql_result($listar5,0,status);
echo'"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>';
echo'<tr><td width="50%" colspan="1" height="50" style="padding-left:16px;">Estado:&nbsp;&nbsp;
<input type="text" readonly="true" size="30" id="estado1" name="estado" 
value="' .@mysql_result($listar6,0,estado);
echo'"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>';
echo'<tr><td width="50%" colspan="1" height="50" style="padding-left:16px;">Cidade:&nbsp;&nbsp;
<input type="text" readonly="true" size="30" id="cidade" name="cidade" 
value="' .@mysql_result($listar7,0,cidade);
echo'"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>';
echo'<tr><td width="50%" colspan="1" height="50" style="padding-left:16px;">Aniversário:&nbsp;&nbsp;
<input type="text" readonly="true" size="30" id="aniversario"  name="aniversario"
value="' .@mysql_result($listar11,0,dia).'/'.@mysql_result($listar12,0,mes);
echo'"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>';
echo'<tr><td width="50%" colspan="1" height="50" style="padding-left:16px;">Signo:&nbsp;&nbsp;
<input type="text" readonly="true" size="30" id="signo"  name="aniversario"
value="' .@mysql_result($listar11,0,signo);
echo'"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><br/><br/></td></tr>';

echo'<tr><td width="50%" colspan="1" height="50" style="padding-left:16px;"	></td><td width="50%" height="30"colspan="1" height="50" ></td>
<td width="50%" height="30" colspan="1" height="50" ></td></tr>';

?>




<?php
echo'<tr><td width="100%" colspan="2"  valign="top" align="left" cellspacing="8">
<br/><br/><b>MINHAS MENSAGENS</b><br/><br/>';

$linhas=@mysql_num_rows($listar9);
$i=0;
for($i==0;$i<$linhas;$i++)
echo '<tr><id ><td  width="100%" colspan="2" id="body" align="left" cellspacing="2" valign="top"
bgcolor="#9AACCB" id="celula" height="50" align="left" ><form method="post" action="excluir.php"
id="coluna"><font size="3" color="#0e3aa8" face="impact" style="text-transform:capitalize">
<input type="text" name="sessao" value="'.@mysql_result($listar9,$i).'" readonly="true"
style="background:#9AACCB; border:none; width:400px; height:40px; font-family:impact; color:#0e3aa8;
font-size:20px;"/><hr size="2%" align="right" width="88%" color="#a2c2f2"><input type="text"
name="comentario" value="'.@mysql_result($listar10,$i).'" readonly="true"  style="background:#9AACCB;
 border:none; font-family:calibri; color:#136389; font-size:18px;"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="submit" name="excluir" value="Excluir" style="float:right; margin-right:15px;"/></form>';


echo'</font><br/><br/></td></tr>';
echo'<tr><td>';

echo'<br/><br/><br/>';

echo'<tr><td width="90%" colspan="2" align="left" bgcolor="#B0C6D2">
<p>
<b>LOCALIZAR CONTATOS</b><br/>

<input type="hidden" name="logar" value="'.$voltaLogin.'"/>
<a href="localizaContatos.php?login='.$perfil.'"><button type="button" name="localizar">
Localizar contatos</button></a>|<a href="localizaContatos.php?login='.$perfil.'">
<button type="button" name="Mensagem">Enviar Mensagem </button></a>
<input type="hidden" name="login" value='.$voltaLogin.'/><input type="hidden" name="password" value='.$voltaPassword.'/>
';

//echo'<input type="hidden" name="login" value='.$login.'/><input type="hidden" name="password" value='.$password.'/>';
?>
</p>
</td></tr>  
<tr><td>

<div class="contatos">
<?php
$login=$voltaLogin;
echo'<br/><b>MEUS CONTATOS</b>   </div>
<form name="form2" action="" method="get">';
 $exibeContato=@mysql_query("SELECT amigos FROM ".$perfil.";",$conexao);
 $linhasContato=@mysql_num_rows($exibeContato);
 $colunas=3;

 $i=0;
 $j=0;

 for($i==0;$i<$linhasContato;$i++){
 echo'<div id="segmento">';
 echo "\t";
 for($j==0;$j<$linhasContato;$j++){


 echo '<div class="botao"><a href=linkContatos.php?sessao='.@mysql_result($exibeContato,$j,amigos).
 '&login='.$voltaLogin.'><div class="texto">'.strtoupper(@mysql_result($exibeContato,$j,amigos));
 echo'</div></div></a>';
 echo'&nbsp;&nbsp;';
 echo'<input type="hidden" name="perfil" value="'; echo $voltaLogin; echo'" />';
 echo'</div>';
 }
}



echo'</form>';
echo'</div>';
?>

</td></tr>

<tr><td width="50%" colspan="2" height="50" valign="top">
</td></tr>



<?php






echo'<tr><td colspan="2">';
echo'<img src="Clov!System.png" width="120" height="60" style="float:right; position:right;"/></td></tr>';




echo'<tr><td bgcolor="#B5C0C3" id="body" align="left" cellspacing="4" align="left">';

echo'</td></tr><tr><td>';



}


echo '<input type="hidden" name="meuPerfil" id="meuPerfil" value="'.$voltaLogin.'"/>';
echo '<input type="hidden" name="minhaSenha" id="minhaSenha" value="'.$voltaPassword.'"/>';




?>
</td></tr></table>

<BR>
<BR>



</BODY>
</HTML>
