<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<META HTTP-EQUIV="REFRESH" >
<?php
//$login=$_POST["c_email"];
//$senha=$_POST["c_senha"];
//echo'<meta http-equiv="refresh" content="1"; url="ListarPerfil.php?login=$login&senha=$senha">';
?>

<HEAD>
 <TITLE> - myWeb - </TITLE>
 <?php
  echo'<link type="text/css" rel="stylesheet" href="../../Estilo.css"/>
  <link type="text/css" rel="stylesheet" href="../../EstiloFonte.css"/>
  <link rel="shortcut icon" href="../../MY_WEB-LOGO/favicon.ico" type="image/x-icon"/>
  <script language="javascript" src="..\..\jquery-1.6.2.min.js"></script>
  <!--<script language="javascript" src="AlteraTema.js"></script>-->
  <script language="javascript" src="..\..\Jquery_Cycle\cycle.all.js"></script>';
  ?>
<script language="javascript">
$(document).ready(function(){
$("#slides ul").cycle({
fx:'scrollHorz',
speed:1000
});
});
</script> 
  
 <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'pt', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


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

<?php 
?>
</style>


</HEAD>
<?php 

//session_name("NOMESESSAO");
//$_SESSION["email"]=$_POST["c_email"].'@'.$_POST["dominio"];
//$_SESSION["senha"]=$_POST["c_senha"];
//ini_set("session.gc_maxlifetime",86400);
//ini_set("session.cache_expire",14400);
//session_save_path();

//session_start();
//ob_start();

include ("../../based.php");
//$login=$_POST['c_email']."@".$_POST['dominio'];
//$password=isset($_POST['c_senha'])?$_POST['c_senha']:null;

//$login=$_GET['c_email']."@".$_GET['dominio'];
//$password=@mysql_query("SELECT senha FROM users WHERE email=".$login.";",$conexao);
//$password=@mysql_fetch_array($password);


//$background=@msql_query("SELECT * FROM users WHERE email ='%$login%' AND senha ='%$password%' ;",$conexao); 
//$background=@msql_query($background)or die(@mysql_error());
//$background=@mysql_fetch_array($background);
//$background=$background["background"];
$background="#CCCCCC";
echo'<BODY id="corpo" bgcolor="'.$background.'" onload="cor()">'; 

?><!--bgcolor="#CCCCCC"-->
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
day = " <b><tt>Ter&ccedila,</tt></b> "

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
month = "<b><tt> de Mar&ccedilo de</tt></b> "

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


<?php

include ("../../based.php");



$login=$_POST['c_email']."@".$_POST['dominio'];
$password=isset($_POST['c_senha'])?$_POST['c_senha']:null;


//$login=$_GET['c_email']."@".$_GET['dominio'];
//$password=$_GET['e'];







//$password=isset($_POST['c_senha'])?$_POST['c_senha']:null;

//$password=@mysql_query("SELECT senha FROM users WHERE email=".$login.";",$conexao);
//$password=@mysql_fetch_array($password);

$sql_logar = "SELECT email,atividades,textoPerfil,tituloPerfil,estado,cidade,hobby,status,ano,dia,mes FROM users WHERE email = '$login' && senha = '$password' ";
$exe_logar = mysql_query($sql_logar) or die (mysql_error());
$fet_logar = mysql_fetch_assoc($exe_logar);
$num_logar = mysql_num_rows($exe_logar);

if ($num_logar == 0){
   echo "<body bgcolor='#CCCCCC' id='corpo'>";
   echo "<p id='Estado' align='center'>Login ou senha invalido.</p><br/><br/>";
   echo "<br/><center><a href='javascript:window.history.go(-2)'>Clique aqui para voltar.</a><center>";
   echo $login."</body>";
   //echo $password."</body>";
   if(!filter_var($login,FILTER_VALIDATE_EMAIL)){
        echo '<body bgcolor="#CCCCCC" id="corpo">';
        echo'<p id="Estado">Digite um E-mail v&aacute;lido.</p><br/><br/>';
        echo'</body>';}
}
else{
    //@session_start();
	//@ob_start();
    //$_SESSION['c_email']=$login;
    //$_SESSION['c_senha']=$password;

	$_POST['c_email']=$login;
    $_POST['c_senha']=$password;
	//$login=$_GET['c_email']."@".$_GET['dominio'];
    //$password=@mysql_query("SELECT * FROM users WHERE email=".$login.";",$conexao);
	//$password=@mysql_fetch_array($password);
    
    echo $login.' logado(a) com sucesso!<br/>';
    echo'<form method="post" enctype="multipart/form-data" action="../../index.php">
    <input type="submit" name="sair" value="Fazer logoff"/></form>';
    $localizaContato=$login;
	
	$numeroMensagens0=@mysql_query("SELECT comentario FROM mensagens WHERE postar='$login';",$conexao);
    $cont0 = mysql_num_rows($numeroMensagens0);
	
?>



  

<table >
<tr>
<td id="faixa" style="background-color:gray; border-radius:16px; width:1135px; " >
<?php if($cont0<1){echo'<div id="link"><a href="#mensagens">Minhas mensagens</a></div><div id="notificacao">0</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';}else{ ?>
<?php echo'<div id="link"><a href="#mensagens">Minhas mensagens</a></div><div id="notificacao">'.$cont0.'</div>';}?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo'<div id="link1"><a href="#fotos">Minhas fotos</a></div><div id=""></div>'; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo'<div id="link2"><a href="#contatos">Meus contatos</a></div><div id=""></div>'; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
</tr>
</table>

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
		</div>-->

<p align="left"><img src="../../MY_WEB-LOGO/MyWeb.png" width="200" height="60" /></p>


<?php

$listar0=@mysql_query("SELECT tituloPerfil FROM users WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%' ;",$conexao);
$listar1=@mysql_query("SELECT email FROM users WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%' ;",$conexao);
$listar2=@mysql_query("SELECT textoPerfil FROM users WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%';",$conexao);
$listar3=@mysql_query("SELECT atividades FROM users WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%';",$conexao);
$listar4=@mysql_query("SELECT hobby FROM users WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%';",$conexao);
$listar5=@mysql_query("SELECT status FROM users WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%';",$conexao);
$listar6=@mysql_query("SELECT estado FROM users WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%';",$conexao);
$listar7=@mysql_query("SELECT cidade FROM users WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%';",$conexao);
$listar9=@mysql_query("SELECT sessao FROM mensagens WHERE postar = '$_POST[c_email]' ORDER BY id DESC LIMIT 50;",$conexao);
$listar10=@mysql_query("SELECT comentario FROM mensagens WHERE postar = '$_POST[c_email]' ORDER BY id DESC LIMIT 50;",$conexao);
$listar11=@mysql_query("SELECT dia FROM users WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%';",$conexao);
$listar12=@mysql_query("SELECT mes FROM users WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%';",$conexao);
$listar13=@mysql_query("SELECT coalesce(diaDaSemana,'Nao definido') as diaDaSemana FROM mensagens WHERE postar  = '$_POST[c_email]' ORDER BY id DESC
 LIMIT 50;",$conexao);
$listar14=@mysql_query("SELECT coalesce(mes,'Nao definido') as mes FROM mensagens WHERE postar  = '$_POST[c_email]' ORDER BY id DESC LIMIT 50;",$conexao);
$listar15=@mysql_query("SELECT coalesce(ano,'Nao definido') as ano FROM mensagens WHERE postar  = '$_POST[c_email]' ORDER BY id DESC;",$conexao);
/*$listar13=@mysql_query("SELECT religiao FROM users WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%' ;",$conexao);
$listar14=@mysql_query("SELECT versiculo FROM users WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%' ;",$conexao);*/



$perfil1=@mysql_result($listar0,0,tituloPerfil);
$perfil=@mysql_result($listar0,0,tituloPerfil);

include("../../based.php");
$cor=@mysql_query("SELECT coalesce(background,'#B5C0C3') as background FROM users WHERE email LIKE '%$login%';",$conexao); 
//$cor=@msql_query($cor)or die(@mysql_error());
$cor=@mysql_fetch_array($cor);
$cor=$cor["background"];
//$cor="blue";
//echo $cor;
#B5C0C3
echo'<form>';
echo'<table width="1144" bgcolor="'.$cor.'" align="left" id="body" style="bordercolor:transparent;"><tr>
<td width="80%" colspan="2"  id="estado"><div id="TituloPerfil"><input type="text" readonly="true"  style="background-color:'.$cor.'; width:800px;" name="Titulo"
id="Titulo" value="'.$perfil1=str_replace("_"," ",$perfil1);
echo'" style="width:auto;"/><a href="../../AlteraPerfil.php?titulo='.strtolower($perfil).'"><input type="button"
name="alteraTexto" id="alteraTexto" value="Alterar nome do perfil" style="border-radius:80px; background-color:white;"/></a></div></td>';
?>

<!--<input type="text" name="mudarBackground" id="mudarBackground" /><button type="button" onclick="AlteraTema()">Mudar Tema</button>-->

<?php
/*echo'</td><td width="50%" valign="bottom" id="Titulo"><font  size="3" face="verdana">MEMBRO da Igreja&nbsp;
<b>'.@mysql_result($listar13,0,religiao);
echo '<br/><br/><a href="alteraTexto.php?meuPerfil='.$login.'"><input type="button"
name="alteraReligiao" id="alteraTexto" value="Alterar" /></a></td></tr>';

echo'</td><tr><td style="color:transparent;">1</td></tr><tr><td style="color:transparent;">2</td></tr>
<td width="30%"  align="left" valign="bottom" colspan="2"><font color="#06438E" size="3" face="verdana">
<b>Meu Vers�culo Favorito:&nbsp; <font color="orange" size="2" face="verdana">'.@mysql_result($listar14,0,versiculo).'</b>--></td>';
echo'<td width="20%"  colspan="3" align="left" valign="bottom" style="color:transparent;"><font  size="3" face="verdana">
<br/><br/><a href="../../AlteraPerfil.php?titulo='.strtolower($perfil).'"><input type="button"
name="alteraTexto" id="alteraTexto" value="Alterar nome do perfil" style="border-radius:80px; background-color:white;"/></a></td></tr>';*/
?>


<?php
echo'</td><tr><td style="color:transparent;">1</td></tr><tr><td style="color:transparent;">2</td></tr>
<td width="30%"  align="left" valign="bottom"><font color="#06438E" size="3" face="verdana">
<b>Minhas informa&ccedil;&otilde;es</b>&nbsp;<a href="../../alteraTexto.php?meuPerfil='.$perfil.'"><input type="button"
name="alteraInforma�oes" id="alteraTexto" value="Alterar Informacoes" style="border-radius:80px; background-color:white;"/></a></td>
<td width="50%"  colspan="3" align="left" valign="bottom"><font color="#06438E" size="3" face="verdana">
<b>Sobre mim...</b></td></tr>';
echo'<tr><td width="50%" colspan="1" height="50" rowspan="1" valign="bottom" ><div id="campo" style="background-image:url(../../BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px;">E-mail&nbsp;&nbsp;
<input type="text" readonly="true" name="E-mail" size="30" valign="bottom" style="background-color:transparent; font-weight:600;" id="E-mail" value="'
.@mysql_result($listar1,0,email);

echo'"/></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td width="40%" rowspan="3" valign="top"
bgcolor="#B0C6D2" id="celula1"><textarea name="texto" readonly="true"  valign="bottom"  id="Texto" wrap="on" cols="45" rows="10"
value="" >'.@mysql_result($listar2,0,textoPerfil).'</textarea>';
echo '<br/><br/><a href="../../alteraTexto.php?meuPerfil='.$perfil.'"><input type="button"
name="alteraTexto" id="alteraTexto" value="Alterar Descricao" style="border-radius:80px; background-color:white;"/></a></td></tr>';


echo'<tr><td width="50%" colspan="1" height="80" valign="bottom"><div id="campo1" style=" background-image:url(../../BACKGROUNDS/CampoMyWebTextArea.png);
background-repeat:no-repeat;height:160px;padding-top:20px;padding-left:10px;">Minhas atividades:
&nbsp;&nbsp;<br/><textarea  readonly="true" name="atividades" valign="bottom" cols="44" rows="6" style="background-color:transparent; font-weight:600;"
id="Atividades" style="text-align:justify; margin:4px 0px 0px 0px;" scrolling="yes">' .@mysql_result($listar3,0,atividades);
echo'</textarea></font></div></td></tr>';
echo'<tr><td width="50%" colspan="1" height="80" valign="bottom"><div id="campo2" style=" background-image:url(../../BACKGROUNDS/CampoMyWebTextArea.png);
background-repeat:no-repeat;height:160px;padding-top:20px;padding-left:10px;">Meus hobbies:&nbsp;&nbsp;
<br/><textarea  readonly="true" name="hobbies" valign="bottom"  cols="44"  rows="6" style="background-color:transparent; font-weight:600;"
id="hobbies" style="text-align:justify; margin:4px 0px 0px 0px;" scrolling="yes">' .@mysql_result($listar4,0,hobby);
echo'</textarea></font></div></td></tr>';
echo'<tr><td width="50%" colspan="1" height="50" valign="bottom"><div id="campo3" style=" background-image:url(../../BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px;">Status:&nbsp;&nbsp;
<input type="text" readonly="true" size="30" name="status" valign="bottom" style="background-color:transparent; font-weight:600;" id="status"
value="' .@mysql_result($listar5,0,status);
echo'"/></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>';
echo'<tr><td width="50%" colspan="1" height="50" valign="bottom"><div id="campo4" style=" background-image:url(../../BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px;">Estado:&nbsp;&nbsp;
<input type="text" readonly="true" size="30" style="background-color:transparent; font-weight:600;" id="estado1" name="estado" valign="bottom"
value="' .@mysql_result($listar6,0,estado);
echo'"/></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
<td  rowspan="3">
<div id="slides">
<ul>
<li><a href="http://g1.globo.com/" target="_blank"><img src="../../imagem/G1.png" alt="G1" width="600" height="200"/></li>
<li><a href="http://www.r7.com/" target="_blank"><img src="../../imagem/R7.png" alt="R7" width="600" height="200"/></li>
<li><a href="https://www.youtube.com/" target="_blank"><img src="../../imagem/YouTube.jpg" alt="Google" width="600" height="200"/></li>
</ul>
</div>
</td>
</tr>';
echo'<tr><td width="50%" colspan="1" height="50" valign="bottom"><div id="campo5" style=" background-image:url(../../BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px;">Cidade:&nbsp;&nbsp;
<input type="text" readonly="true" size="30" style="background-color:transparent; font-weight:600;" id="cidade" name="cidade" valign="bottom"
value="' .@mysql_result($listar7,0,cidade);
echo'"/></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>';
echo'<tr><td width="50%" colspan="1" height="50" valign="bottom"><div id="campo6" style=" background-image:url(../../BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px;">Anivers&aacute;rio:&nbsp;&nbsp;
<input type="text" readonly="true" size="30" style="background-color:transparent; font-weight:600;" id="aniversario" valign="bottom" name="aniversario"
value="' .@mysql_result($listar11,0,dia).'/'.@mysql_result($listar12,0,mes);
echo'"/></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><br/><br/></td></tr>';

echo'<tr><td width="50%" height="30"colspan="1" height="50" valign="bottom"></td>
<td width="50%" height="30" colspan="1" height="50" valign="bottom"></td></tr>';

?>




<?php
echo'<tr><td></td></tr>';
echo'<tr><td>';

echo'<br/><br/><br/>';

echo'<tr><td width="90%" colspan="2" align="left" bgcolor="#B0C6D2">
<p>
<div style="margin-left:14px;"><b>LOCALIZAR CONTATOS</b></div><br/>
<form name="form1" action="" method="post">
<input type="hidden" name="logar" value="'.$login.'"/>
</form>
<a href="../../localizaContatos.php?login='.$perfil.'"><button type="button" name="localizar" style="border-radius:80px; background-color:white;">
Localizar contatos</button></a>|<a href="../../localizaContatos.php?login='.$perfil.'">
<button type="button" name="Mensagem" style="border-radius:80px; background-color:white;">Enviar Mensagem </button></a>

';
?>
</p>
</td></tr>  <tr><td>


<?php
//$login=$_SESSION['c_email'];
$login=$_POST['c_email']."@".$_POST['dominio'];


 $exibeContato=@mysql_query("SELECT * FROM ".strtolower($perfil).";",$conexao);
 $exibeFoto=@mysql_query("SELECT imagem FROM ".$perfil.";",$conexao);
 $fetchImagem=@mysql_fetch_array($exibeFoto);
 
 $linhasContato=@mysql_num_rows($exibeContato);
 
 $exibeContatoMenos=@mysql_query("SELECT * FROM ".strtolower($perfil)." WHERE contatos <> '$perfil';",$conexao);
 $linhasContatoMenos=@mysql_num_rows($exibeContatoMenos);
 $LinhasContato1=@mysql_fetch_array($exibeContato);
 $LinhasContato2=$LinhasContato1["contatos"];

 //if($nullLinhaContato['contatos']==0){echo ' ';}
 //else{
 
 
 if($linhasContato>1){

echo'<div class="contatos"><br/><a name="contatos"><b>MEUS CONTATOS</a></div><div id="contador" style="float:left; position:relative; margin-top:-45px; margin-left:160px;
padding:6px 0px 0px 16px;">
<font color="white" >'.$linhasContatoMenos.' amigos</font></div></b>
<form name="form2" action="" method="get">
<div style="width:100%; ">';
 //$colunas=4;

 //$i=0;
 $j=1; //faz com que o seu perfil n�o apare�a na p�gina

 //for($i==0;$i<$linhasContato;$i++){
 //echo'<div id="segmento">';
 //echo "\t";
 for($j==1;$j<$linhasContato;$j++){
 
$contact=@mysql_result($exibeContato,$j,contatos);
$contact=str_replace("_"," ",$contact);
//if($contact=$perfil1){echo "";}

 echo '<div class="botao"><a href="../../linkContatos.php?sessao='.@mysql_result($exibeContato,$j,contatos).'&login='.$perfil.'">';
 $meusContatos=@mysql_result($exibeContato,$j,contatos);
 //$sql = "SELECT imagem FROM  $perfil" ; 
 //$limite = @mysql_query($sql);
 //$sql = @mysql_fetch_array($limite);
 //$arquivo = $sql['arquivo'];
 echo'<div class="imagemContato"><img src="../../'.@mysql_result($exibeContato,$j,imagem).'" width="60"  height="80" /></div>';
 //src="arquivos/97b77915013e0a68dea8c323be0983d4.jpg"
 echo'<div class="texto">'.strtoupper($contact);
 echo'</a></div></div>';
 //echo'<div class="imagem"><img src='.@mysql_result($exibeContato,$j,imagem);
 //echo'/> </div>';
 //while($exibeFoto1=@mysql_fetch_array($exibeFoto)){
 //$foto=$exibeFoto1["imagem"];
 //echo '<img src='.$foto.' width="150"  height="180" border="2" bordercolor="#FF6600"/>';
 echo'</div>
 ';
 //}
 echo'&nbsp;&nbsp;';
 echo'<input type="hidden" name="perfil" value="'; echo $login; echo'" />';

 }
  echo'</div>';

 
 //}//fecha i
 
//}


echo'<div style="float:left; position:absolute; margin-top:-96px;">';
  $anivDia=@mysql_query("SELECT dia FROM users WHERE tituloPerfil =".$meusContatos.";",$conexao);
  $anivMes=@mysql_query("SELECT mes FROM users WHERE tituloPerfil =".$meusContatos.";",$conexao);
  //$anivAno=@mysql_query("SELECT ano FROM users WHERE tituloPerfil =".$perfil.";",$conexao);
  $anivContato=@mysql_query("SELECT tituloPerfil FROM users WHERE tituloPerfil =".$meusContatos.";",$conexao);
  //$anoAtual=date(Y);
  $diaAtual=date("d");
  $mesAtual=date("n");
  $dataAtual=$diaAtual."/".$mesAtual;
  $anivPerfil=$anivDia."/".$anivMes;
  
  if($anivPerfil = $dataAtual){
  echo"<br/><br/><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;<font color='green'><b>Hoje e aniversario de ".str_replace("_"," ",$meusContatos);
  }
echo'</b></font></div>';


echo'</div></form>';
echo'</div>';
}
else{
echo'';
}
//echo'<div style="float:left; position:absolute; margin-left:41%; margin-top:1%;"><iframe name="quadro" width=180% height=300%
//scrolling="auto" src="http://g1.globo.com/"></iframe></div>';

echo'</td><td style="padding-left:204px; margin-top:35px; height:200px; position:absolute; float:left; width:396px; background-color:#B0C6D2;">

<div style="font-size:18px; font-family:tahoma; font-weight:600; margin-left:20px; padding-top:10px;">Escolha um tema:</div><br/>';

echo'

<form name="alteraTemaForm" action="../../IncluiTema.php" method="post">
<div style="position:absolute; float:left;"><button type="submit" name="tema" id="tema" value="#0eb8d7" style="background-color:#0eb8d7;
width:60px; height:20px; border-radius:8px;"></button>
</div>

<div style="position:absolute; float:left; margin-left:70px;"><button type="submit" name="tema" id="tema" value="yellow" style="background-color:yellow;
width:60px; height:20px; border-radius:8px;"></button></div>

<div style="position:absolute; float:left; margin-left:140px;"><button type="submit" name="tema" id="tema" value="red" style="background-color:red;
width:60px; height:20px; border-radius:8px;"></button></div><br/><br/>

<div style="position:absolute; float:left;"><button type="submit" name="tema" id="tema" value="purple" style="background-color:purple;
width:60px; height:20px; border-radius:8px;"></button></div>

<div style="position:absolute; float:left; margin-left:70px;"><button type="submit" name="tema" id="tema" value="white" style="background-color:white;
width:60px; height:20px; border-radius:8px;"></button></div>

<div style="position:absolute; float:left; margin-left:140px;"><button type="submit" name="tema" id="tema" value="gray" style="background-color:gray;
width:60px; height:20px; border-radius:8px;"></button></div><br/><br/>

<div style="position:absolute; float:left;"><button type="submit" name="tema" id="tema" value="black" style="background-color:black;
width:60px; height:20px; border-radius:8px;"></button></div>

<div style="position:absolute; float:left; margin-left:70px;"><button type="submit" name="tema" id="tema" value="gold" style="background-color:gold;
width:60px; height:20px; border-radius:8px;"></button></div>

<div style="position:absolute; float:left; margin-left:140px;"><button type="submit" name="tema" id="tema" value="#045506" style="background-color:#045506;
width:60px; height:20px; border-radius:8px;"></button></div><br/><br/>';

echo'<div style="position:absolute; float:left; margin-left:70px;"><button type="submit" name="tema" id="tema" value="#B5C0C3" style="background-color:#B5C0C3;
width:60px; height:20px; border-radius:8px;" ></button></div><br/>


<br/>';


?>



<?php
$login=isset($_POST['c_email'])?$_POST['c_email']:null;
//echo $login;
$tema=isset($_POST["tema"])?$_POST["tema"]:null;
echo'<input type="hidden" name="emailPerfil" value="'.$login.'"/>

</form>';

?>

<div style="position:absolute; float:left; margin-left:15px; margin-top:40px; padding-bottom:20px;">
<button type="button" name="tema" id="tema" value="#B5C0C3" style="background-color:#B5C0C3;
width:180px; height:20px; border-radius:8px; " onClick='parent.location="javascript:location.reload()"'>Atualizar pagina</button>
</div><br/>

<!--<script>
document.getElementById("tema").onclick = function() {
    var radios = document.getElementsByName("tema");
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            alert("Escolheu: " + radios[i].value);
        }
    }
};
</script>-->
<?php


?>

</td></tr>


<?php
 echo'<tr><td width="50%" colspan="2" height="50" valign="bottom" bgcolor="#B0C6D2"><div style="margin-left:14px; margin-top:16px;">
<a name="fotos"><b>MINHAS FOTOS</b></a></div><br/><br/>';

?>

<?php





$sql0 = "SELECT imagem FROM ".strtolower($perfil)." WHERE contatos='".strtolower($perfil)."'";
$limite0 = @mysql_query("$sql0");
while($sql0 = @mysql_fetch_array ($limite0)){
$arquivo0 = $sql0['imagem'];
echo'<div style="text-align:top; background:#CCCCCC; float:left; position:relative; padding:4px 20px 4px 20px;">Foto Principal
&nbsp;&nbsp;
<br/>';
echo'<form name="fotoPrincipal" enctype="multipart/form-data" method="post action="">
 <a href='.$arquivo0;
echo'><img src=../../'.$arquivo0;
echo' width="150"  height="180" border=2 bordercolor="#FF6600" alt="Sua foto n&atilde;o p&ocirc;de ser carregada, tente outra."/></a></form>
<form method="POST" enctype="multipart/form-data" action="../../AtualizaFoto.php?id='.$perfil.'" > ';
echo'
<input name="nome" type="hidden" id="nome" value="';
?>
<?php
echo $localizaContato;
?>
<?php
echo'"/>';
echo'<br/>
<input name="tituloPerfil" type="hidden" id="nome" value="';
?>
<?php
echo $perfil;
?>
<?php
echo'"/>';
echo'<br/>
';
echo '<center><input type="submit" name="atualizarfoto" value="Atualizar Foto" style="border-radius:10px 30px; border:outset; "/></center>
 <br/>';
echo'</form>





</div>




</div>';


}



$sql = "SELECT arquivo FROM image WHERE nome ='$localizaContato'  ";

$limite = @mysql_query("$sql");

while($sql = @mysql_fetch_array ($limite) ) {
$arquivo = $sql['arquivo'];
error_reporting(E_ALL);
echo'<span style="float:left; position:relative; padding:23px 4px 4px 4px;" ><a href=../../'.$arquivo.'>
<img src=../../'.$arquivo.' width="150"  height="180" border="2" bordercolor="#FF6600" alt="Sua foto n&atilde;o p&ocirc;de ser carregada, tente outra."/></a>
<a href="../../eliminaFoto.php?arquivo='.$arquivo.'"><button type="button" name="excluir" style="border-radius:80px; background-color:white;" />Excluir</button>
</a>
</span>
';
}



echo'</td></tr><tr><td><div style="float:left; position:relative;"><h5>Insira sua fotos aqui !</h5>
<form method="POST" enctype="multipart/form-data" action="../../upload.php?perfil='.$perfil.'" > ';


echo'Foto :<input name="arquivo" type="file" id="arquivo"  value="Escolher arquivo" />
<input name="nome" type="hidden" id="nome" value="';
?>
<?php
echo $localizaContato;
?>
<?php
echo'"/>';
echo'<br/>
<input name="tituloPerfil" type="hidden" id="nome" value="';
?>
<?php
echo $perfil;
?>
<?php
echo'"/>';
echo'<br/>
';

echo '<input type="submit" name="Submit" value="Enviar Foto"/>
 <br/>';

echo'</form></div></td></tr>';




echo'</td></tr>

<tr>';
$linhas=@mysql_num_rows($listar9);


if($linhas>0){

$numeroMensagens=@mysql_query("SELECT comentario FROM mensagens WHERE postar='$login';",$conexao);
$cont = mysql_num_rows($numeroMensagens);
//$numeroMensagens=@mysql_fetch_array($numeroMensagens["comentario"]);
echo'<td width="100%" colspan="2"  valign="top" align="left" cellspacing="8">';
echo'<br/><br/><div style="float:left; position:relative; width:260px;"><a name="mensagens"><b>MINHAS MENSAGENS</a>&nbsp;&nbsp;
</div><div id="contadorMaior" style="float:left; position:relative; margin-top:0px; margin-left:-40px;
padding:6px 0px 0px 16px;">
<font color="white" >'.$cont.' novas mensagens</font></div></b><br/><br/>';
//$nome=@mysql_result($listar9,$i);
$i=0;
for($i==0;$i<$linhas;$i++){
echo '<tr><id ><td  width="100%" colspan="2" id="body" align="left" cellspacing="2" valign="top"
bgcolor="#9AACCB" id="celula" height="50" align="left" ><form method="post" action="excluir.php"
id="coluna"><font size="3" color="#0e3aa8" face="impact" style="text-transform:capitalize">
<input type="text" name="sessao" value="'.str_replace("_"," ",$nome=@mysql_result($listar9,$i)).'" readonly="true"
style="background:#9AACCB; border:none; width:200px; height:40px; font-family:impact; color:#0e3aa8;
font-size:20px;"/>
<input type="text" name="data" value="'.@mysql_result($listar13,$i).' de '.@mysql_result($listar14,$i).' de '.@mysql_result($listar15,$i).'" readonly="true"
style="background:#9AACCB; border:none; width:400px; height:40px; font-family:calibri,arial; color:#0e3aa8;
font-size:14px;"/><hr size="2%" align="right" width="88%" color="#a2c2f2"><input type="text"
name="comentario" value="'.@mysql_result($listar10,$i).'" readonly="true"  style="background:#9AACCB;
 border:none; font-family:calibri; color:#136389; font-size:18px;"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="excluir" value="Excluir" style="float:right; margin-right:15px; border-radius:80px; background-color:white;"/></form>';
echo'</font><br/><br/>';
}
}
else{
echo'';
}
echo'</td></tr>';



echo'<tr><td colspan=3>';
echo'<p align="right"><img src="../../BACKGROUNDS/Clov!System_2012_logo.png" width="120" height="60"/></p></td></tr>';




echo'<tr><td>';
echo'</td></tr><tr><td>';

error_reporting(0);
ini_set(�display_errors�, 0 );

$perfilAltera=str_replace(" ","_",$perfil1);
$perfilAltera1=strtolower($perfilAltera);
//echo $perfilAltera;
//echo $perfilAltera1;
echo'<form name="remover" method="post" action="../../RemoverConta.php">
<input type="hidden" name="usuario" value="'.$perfilAltera.'"/>
<input type="hidden" name="tabela" value="'.$perfilAltera1.'"/>
<button type="submit" name="removerconta" value="RemoverConta" style="border-radius:15px; background:red; color:white;">Remover conta</button></form>';


}


echo '<input type="hidden" name="meuPerfil" id="meuPerfil" value="'.$login.'"/>';
echo '<input type="hidden" name="minhaSenha" id="minhaSenha" value="'.$password;//['c_senha'];
echo '"/>';


//$removerconta=isset($_POST["removerconta"])?$_POST["removerconta"]:null;
//if($removerconta=='Remover conta'){



?>
</td></tr></table>

<BR>
<BR>



</BODY>
</body>
</HTML>
