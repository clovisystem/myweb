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
 <link rel="shortcut icon" href="../../MY_WEB-LOGO/favicon.ico" type="image/x-icon"/>
  <script language="javascript" src="..\..\jquery-1.6.2.min.js"></script>
  <!--<script language="javascript" src="AlteraTema.js"></script>-->
  <script language="javascript" src="..\..\Jquery_Cycle\cycle.all.js"></script>
  <!--<link type="text/css" rel="stylesheet" href="../../Estilo.css"/>
  <link type="text/css" rel="stylesheet" href="../../EstiloFonte.css"/>-->
  <meta name="viewport" content="width=200, initial-scale=1">
 <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
 <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> 
 <script src="jquery-1.6.2.min.js"></script> 


<script language="javascript">
$(document).ready(function(){
$("#slides ul").cycle({
fx:'scrollHorz',
speed:1000
});
});
</script> 
  
 
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

</style>


</HEAD>

<?php

include ("../../based.php");

/*$email=isset($_POST['email'])?$_POST['email']:null;
$dominio=isset($_POST['dominio'])?$_POST['dominio']:null;*/

$login=isset($_POST['email'])?$_POST['email']:null;
$password=isset($_POST['senha'])?$_POST['senha']:null;
//echo $_POST['c_email']."@".$_POST['dominio'];

//$login=$_GET['c_email']."@".$_GET['dominio'];
//$password=$_GET['e'];







//$password=isset($_POST['c_senha'])?$_POST['c_senha']:null;

//$password=@mysql_query("SELECT senha FROM users WHERE email=".$login.";",$conexao);
//$password=@mysql_fetch_array($password);

$sql_logar = "SELECT email,atividades,textoPerfil,tituloPerfil,estado,cidade,hobby,status,ano,dia,mes FROM _users WHERE email = '$login' && senha = '$password' ";
$exe_logar = mysql_query($sql_logar) or die (mysql_error());
$fet_logar = mysql_fetch_assoc($exe_logar);
$num_logar = mysql_num_rows($exe_logar);

if ($num_logar == 0){
    ?>
   <body style="background-image:url('../../BACKGROUNDS/layoutprinc.gif'); background-size:cover;background-repeat:no-repeat; background-attachment:fixed; height:100vh;">
   <?php
   echo "<p id='Estado' align='center'>Login ou senha invalido.</p><br/><br/>";
   echo "<br/><center><a href='javascript:window.history.go(-2)'>Clique aqui para voltar.</a><center>";
   echo $login."</body>";
   //echo $password."</body>";
   if(!filter_var($login,FILTER_VALIDATE_EMAIL)){
    ?><body style="background-image:url('../../BACKGROUNDS/layoutprinc.gif'); background-size:cover;background-repeat:no-repeat; background-attachment:fixed; height:100vh;">
        <?php
        echo'<p id="Estado">Digite um E-mail v&aacute;lido.</p><br/><br/>';
        echo'</body>';}
}
else{
    //@session_start();
	//@ob_start();
    //$_SESSION['c_email']=$login;
    //$_SESSION['c_senha']=$password;

	
?>
<BODY style="background-image:url('../../BACKGROUNDS/layoutprinc.gif'); background-size:cover; background-repeat:no-repeat; background-attachment:fixed; height:100vh; padding-left:7%;">

<!--<BODY style="background-color:#CCCCCC;">-->
<?php


echo'<input type="button" onclick="history.back(-1);" name="voltar" value="Voltar">';

?>

<div class="container container-fluid ">
<div class="row">


<main class="container container-fluid col-xs-12 " > 
<!--bgcolor="#CCCCCC"-->
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


document.write("<p style='color:white;'>"+ day + '<font size=2>' + myweekday + '</font>' + month + year + ' - ' + '<font size=2>' + timeValue + '</font></p>')



</script>
</div>
<br/>
<?php
    $_POST['email']=$login;
    $_POST['senha']=$password;
	//$login=$_GET['c_email']."@".$_GET['dominio'];
    //$password=@mysql_query("SELECT * FROM users WHERE email=".$login.";",$conexao);
	//$password=@mysql_fetch_array($password);
    
    echo $login.' logado(a) com sucesso!<br/>';
    echo'<form method="post" enctype="multipart/form-data" action="../../index.php">
    <input type="submit" name="sair" value="Fazer logoff"/></form>';
    $localizaContato=$login;
	
	$numeroMensagens0=@mysql_query("SELECT comentario FROM _mensagens WHERE postar='$login';",$conexao);
    $cont0 = mysql_num_rows($numeroMensagens0);
	
?>
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


#faixa{background-image:url("././BACKGROUNDS/faixaMinor.png");background-repeat:no-repeat;  width:100%; height:120px; 
  text-align:center;   padding-top:30px; color:white; font-family:Tahoma, calibri, arial; text-transform:uppercase;}
 
 #faixa a:visited{text-decoration:none; color:white;}
 #faixa a:link{text-decoration:none; color:white;}
 #faixa a:hover{text-decoration:none; color:yellow;}
 
 #notificacao{background:#e6056a; width:20px; height:20px; float:left; position:relative; margin-left:3px; margin-right:0px; overflow:hidden; }
 #link{margin-left:100px; width:160px; height:40px; float:left; position:relative; }
 #link1{margin-left:100px; width:160px; height:40px; float:left; position:relative; }
 #link2{margin-left:100px; width:160px; height:40px; float:left; position:relative; margin-top:0px;}
 #contador{background-image:url("././BACKGROUNDS/contador.png");background-repeat:no-repeat; width:260px; height:30px; }
 #contadorMaior{background-image:url("././BACKGROUNDS/contadorMaior1.png");background-repeat:no-repeat; width:260px; height:40px; }
 </style>




<table style="width:86%;" >
<tr>
<td id="faixa" style="background-color:gray; border-radius:16px; width:86%; text-align:center;   padding-top:30px; color:white; font-family:Tahoma, calibri, arial; text-transform:uppercase; " >
<?php if($cont0<1){echo'<div id="link" style="margin-left:12%; width:160px; height:40px; float:left; position:relative;"><a href="#mensagens">Minhas mensagens</a></div><div id="notificacao">0</div>';}else{ ?>
<?php echo'<div id="link" style="margin-left:12%; width:160px; height:40px; float:left; position:relative;"><a href="#mensagens">Minhas mensagens</a></div><div id="notificacao">'.$cont0.'</div>';}?>
<?php echo'<div id="link1" style="margin-left:15%; width:160px; height:40px; float:left; position:relative;"><a href="#fotos">Minhas fotos</a></div><div id=""></div>'; ?>
<?php echo'<div id="link2" style="margin-left:15%; width:160px; height:40px; float:left; position:relative; margin-top:0px;"><a href="#contatos">Meus contatos</a></div><div id=""></div>'; ?>
</td>
</tr>
</table>

</main>
</div><!--row-->





<div class="row">
<main  class="container container-fluid  col-xs-12 " >

<br/>
<br/>
<?php
ini_set("default_charset","UTF-8");
?> 
<div style="background-color:white; border-radius:12px; width:86%; height:60px;"><p align="left"><img src="../../MY_WEB-LOGO/MyWeb.png" width="200" height="60" /></p></div>
<br/>
<br/>
</main>
</div><!--row-->



<div class="row">
<main class="container container-fluid col-xs-6 " > 
<?php

$listar0=@mysql_query("SELECT tituloPerfil FROM _users WHERE email LIKE '%$email%' AND senha LIKE'%$password%' ;",$conexao);
$listar1=@mysql_query("SELECT email FROM _users WHERE email LIKE '%$email%' AND senha LIKE'%$password%' ;",$conexao);
$listar2=@mysql_query("SELECT textoPerfil FROM _users WHERE email LIKE '%$email%' AND senha LIKE'%$password%';",$conexao);
$listar3=@mysql_query("SELECT atividades FROM _users WHERE email LIKE '%$email%' AND senha LIKE'%$password%';",$conexao);
$listar4=@mysql_query("SELECT hobby FROM _users WHERE email LIKE '%$email%' AND senha LIKE'%$password%';",$conexao);
$listar5=@mysql_query("SELECT status FROM _users WHERE email LIKE '%$email%' AND senha LIKE'%$password%';",$conexao);
$listar6=@mysql_query("SELECT estado FROM _users WHERE email LIKE '%$email%' AND senha LIKE'%$password%';",$conexao);
$listar7=@mysql_query("SELECT cidade FROM _users WHERE email LIKE '%$email%' AND senha LIKE'%$password%';",$conexao);
$listar9=@mysql_query("SELECT sessao FROM _mensagens WHERE postar = '$email' ORDER BY id DESC LIMIT 50;",$conexao);
$listar10=@mysql_query("SELECT comentario FROM _mensagens WHERE postar = '$email' ORDER BY id DESC LIMIT 50;",$conexao);
$listar11=@mysql_query("SELECT dia FROM _users WHERE email LIKE '%$email%' AND senha LIKE'%$password%';",$conexao);
$listar12=@mysql_query("SELECT mes FROM _users WHERE email LIKE '%$email%' AND senha LIKE'%$password%';",$conexao);
$listar13=@mysql_query("SELECT coalesce(diaDaSemana,'Nao definido') as diaDaSemana FROM _mensagens WHERE postar  = '$email' ORDER BY id DESC
 LIMIT 50;",$conexao);
$listar14=@mysql_query("SELECT coalesce(mes,'Nao definido') as mes FROM _mensagens WHERE postar  = '$email' ORDER BY id DESC LIMIT 50;",$conexao);
$listar15=@mysql_query("SELECT coalesce(ano,'Nao definido') as ano FROM _mensagens WHERE postar  = '$email' ORDER BY id DESC;",$conexao);
/*$listar13=@mysql_query("SELECT religiao FROM users WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%' ;",$conexao);
$listar14=@mysql_query("SELECT versiculo FROM users WHERE email LIKE '%$_POST[c_email]%' AND senha LIKE'%$_POST[c_senha]%' ;",$conexao);*/

include("../../based.php");
$cor=@mysql_query("SELECT coalesce(background,'#B5C0C3') as background FROM _users WHERE email LIKE '$email';",$conexao); 
//$cor=@msql_query($cor)or die(@mysql_error());
$cor=@mysql_fetch_array($cor);
$cor=$cor["background"];

$perfil1=@mysql_result($listar0,0,tituloPerfil);
$perfil=@mysql_result($listar0,0,tituloPerfil);

echo'
<input type="text" readonly="true"  style="  margin-top:0px; width:100%;" name="Titulo"
id="Titulo" value="'.$perfil1=str_replace("_"," ",$perfil1);
echo'"/>
<a href="../../AlteraPerfil.php?titulo='.strtolower($perfil).'" style="postion:absolute; float:left; margin-top:10px; margin-left:10px;"><br/> <input type="button"
name="alteraTexto" id="alteraTexto" value="Alterar nome do perfil" style="  margin-top:0%; border-radius:80px; background-color:white;"/></a>';


$sql0 = "SELECT imagem FROM ".strtolower($perfil)." WHERE contatos='".strtolower($perfil)."'";
$limite0 = @mysql_query("$sql0");
while($sql0 = @mysql_fetch_array ($limite0)){
$arquivo0 = $sql0['imagem'];





echo'<form name="fotoPrincipal" enctype="multipart/form-data" method="post action="">
 <a href='.$arquivo0;
echo' style="margin-left:51%; margin-top:0%;"><img src=../../'.$arquivo0;
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
echo '<center><input type="submit" name="atualizarfoto" value="Atualizar Foto" style="border-radius:10px 30px; border:outset; margin-left:10%; margin-top:-15%;""/></center>
 <br/>';
echo'</form>';

}





include("../../based.php");
$cor=@mysql_query("SELECT coalesce(background,'#B5C0C3') as background FROM _users WHERE email LIKE '%$login%';",$conexao); 
//$cor=@msql_query($cor)or die(@mysql_error());
$cor=@mysql_fetch_array($cor);
$cor=$cor["background"];
//$cor="blue";
//echo $cor;
#B5C0C3
echo'<table style="background:'.$cor.'; width:86%;  margin-top:0%; z-index:-90;"><tr><td>';
echo'<article  align="left"  style=" background:'.$cor.'; z-index:999; height:230%;   bordercolor:transparent; position:relative; float:left;  margin-top:6%; margin-left:0%; ">';
echo'<form>';
?>


<?php
echo'
<br/>
<div  style="margin-left:10px; margin-top:0%;">
<font color="#06438E" size="3" face="verdana">
<b>Minhas informa&ccedil;&otilde;es</b>&nbsp;<a href="../../alteraTexto.php?meuPerfil='.$perfil.'"><input type="button"
name="alteraInforma&ccedil;oes" id="alteraTexto" value="Alterar Informacoes" style="border-radius:80px; background-color:white;"/></a>
</div>';

echo'<div style="margin-left:0px;margin-top:5px; " ><div id="campo" style=" background-image:url(../../BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px;">E-mail&nbsp;&nbsp;
<input type="text" readonly="true" name="E-mail" size="30" valign="bottom" style="background-color:transparent; font-weight:600;" id="E-mail" value="'
.@mysql_result($listar1,0,email);


echo'"/></div></div>
';
echo'<div  style="margin-left:0px;margin-top:10px; height="80" valign="bottom"><div id="campo1" style=" background-image:url(../../BACKGROUNDS/CampoMyWebTextArea.png);
background-repeat:no-repeat;height:160px;padding-top:20px;padding-left:10px;">Minhas atividades:
&nbsp;&nbsp;<br/><textarea  readonly="true" name="atividades" valign="bottom" cols="44" rows="6" style="background-color:transparent; font-weight:600;"
id="Atividades" style="text-align:justify; margin:4px 0px 0px 0px;" scrolling="yes">' .@mysql_result($listar3,0,atividades);
echo'</textarea></div></div>
';
echo'<div  height="80" style="margin-left:0px;margin-top:15px; valign="bottom"><div id="campo2" style=" background-image:url(../../BACKGROUNDS/CampoMyWebTextArea.png);
background-repeat:no-repeat;height:160px;padding-top:20px;padding-left:10px;">Meus hobbies:&nbsp;&nbsp;
<br/><textarea  readonly="true" name="hobbies" valign="bottom"  cols="44"  rows="6" style="background-color:transparent; font-weight:600;"
id="hobbies" style="text-align:justify; margin:4px 0px 0px 0px;" scrolling="yes">' .@mysql_result($listar4,0,hobby);
echo'</textarea></div>
';
echo'<div  height="50" style="margin-left:0px;margin-top:20px; valign="bottom"><div id="campo3" style=" background-image:url(../../BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px;">Status:&nbsp;&nbsp;
<input type="text" readonly="true" size="30" name="status" valign="bottom" style="background-color:transparent; font-weight:600;" id="status"
value="' .@mysql_result($listar5,0,status);
echo'"/></div></div>
';
echo'<div  height="50" style="margin-left:0px;margin-top:25px; valign="bottom"><div id="campo4" style=" background-image:url(../../BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px;">Estado:&nbsp;&nbsp;
<input type="text" readonly="true" size="30" style="background-color:transparent; font-weight:600;" id="estado1" name="estado" valign="bottom"
value="' .@mysql_result($listar6,0,estado);
echo'"/></div></div>
';

echo'<div  height="50" style="margin-left:0px;margin-top:30px; valign="bottom"><div id="campo5" style=" background-image:url(../../BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px;">Cidade:&nbsp;&nbsp;
<input type="text" readonly="true" size="30" style="background-color:transparent; font-weight:600;" id="cidade" name="cidade" valign="bottom"
value="' .@mysql_result($listar7,0,cidade);
echo'"/></div></div>
';
echo'<div  height="50" style="margin-left:0px;margin-top:35px; valign="bottom"><div id="campo6" style=" background-image:url(../../BACKGROUNDS/CampoMyWeb.png);
background-repeat:no-repeat;height:80px;padding-top:20px;padding-left:10px;">Anivers&aacute;rio:&nbsp;&nbsp;
<input type="text" readonly="true" size="30" style="background-color:transparent; font-weight:600;" id="aniversario" valign="bottom" name="aniversario"
value="' .@mysql_result($listar11,0,dia).'/'.@mysql_result($listar12,0,mes);
echo'"/></div></div>';

echo'<div  height="30" height="50" valign="bottom"></div>
<div width="50%"   height="0" valign="bottom"></div>';


echo'</div>
</article>';

?>
</main>





<main class="container container-fluid col-xs-6" >

<?php
echo'<aside     style="background:#B0C6D2;z-index:999; border-radius:10px; margin-top:0%; postion:relative; float:left; ">
<p><font color="#06438E" size="3" face="verdana">
<b>Sobre mim...</b></font></p>
<p>
<textarea name="texto" readonly="true"  valign="bottom"  id="Texto" wrap="on" cols="38.5" rows="10"
value="" style="margin-top:20px;" >'.@mysql_result($listar2,0,textoPerfil).'</textarea>';
echo '<br/><br/><a href="../../alteraTexto.php?meuPerfil='.$perfil.'">
</p>
<p>
<input type="button"
name="alteraTexto" id="alteraTexto" value="Alterar Descricao" style="border-radius:80px; background-color:white;"/></a>

</p>
</aside>';



?>

</main>

<main class="container container-fluid col-xs-6" >
<?php

echo'<div style="  height:200px; z-index:4; position:relative; float:left; width:180px; margin-left:46%; ">

<div style="font-size:18px; font-family:tahoma; margin-left:-45%; font-weight:600;  padding-top:10px;">Escolha um tema:</div><br/>';

echo'
<div style=" ">
<form name="alteraTemaForm" action="../../IncluiTema.php" method="post">
<div style="position:absolute; float:left; margin-left:-110px"><button type="submit" name="tema" id="tema" value="#0eb8d7" style="background-color:#0eb8d7;
width:60px; height:20px; border-radius:8px;"></button>
</div>

<div style="position:absolute; float:left; margin-left:-40px;"><button type="submit" name="tema" id="tema" value="yellow" style="background-color:yellow;
width:60px; height:20px; border-radius:8px;"></button></div>

<div style="position:absolute; float:left; margin-left:30px;"><button type="submit" name="tema" id="tema" value="red" style="background-color:red;
width:60px; height:20px; border-radius:8px;"></button></div><br/><br/>

<div style="position:absolute; float:left; margin-left:-110px"><button type="submit" name="tema" id="tema" value="purple" style="background-color:purple;
width:60px; height:20px; border-radius:8px;"></button></div>

<div style="position:absolute; float:left; margin-left:-40px;"><button type="submit" name="tema" id="tema" value="white" style="background-color:white;
width:60px; height:20px; border-radius:8px;"></button></div>

<div style="position:absolute; float:left; margin-left:30px;"><button type="submit" name="tema" id="tema" value="gray" style="background-color:gray;
width:60px; height:20px; border-radius:8px;"></button></div><br/><br/>

<div style="position:absolute; float:left; margin-left:-110px"><button type="submit" name="tema" id="tema" value="black" style="background-color:black;
width:60px; height:20px; border-radius:8px;"></button></div>

<div style="position:absolute; float:left; margin-left:-40px;"><button type="submit" name="tema" id="tema" value="gold" style="background-color:gold;
width:60px; height:20px; border-radius:8px;"></button></div>

<div style="position:absolute; float:left; margin-left:30px;"><button type="submit" name="tema" id="tema" value="#045506" style="background-color:#045506;
width:60px; height:20px; border-radius:8px;"></button></div><br/><br/>';

echo'<div style="position:absolute; float:left; margin-left:-40px;"><button type="submit" name="tema" id="tema" value="#B5C0C3" style="background-color:#B5C0C3;
width:60px; height:20px; border-radius:8px;" ></button></div><br/>


<br/>
';
?>


</div>


</main>
</DIV>


<div class="row">
<main class="container container-fluid col-xs-6" style="margin-top:8%;" >

<?php

echo'

<div id="slides" >
<ul>
<li><a href="http://g1.globo.com/" target="_blank"><img src="../../imagem/g1.jpg" alt="G1" width="290" height="200"/></a></li>
<li><a href="http://www.r7.com/" target="_blank"><img src="../../imagem/R7.png" alt="R7" width="290" height="200"/></a></li>
<li><a href="https://www.youtube.com/" target="_blank"><img src="../../imagem/YouTube.jpg" alt="Google" width="290" height="200"/></a></li>
</ul>
</div>';

?>

<div style="position:absolute; float:left; margin-left:37%; margin-top:15%; z-index:999;">
<button type="button" name="tema" id="tema" value="#B5C0C3" style="background-color:#B5C0C3;
width:180px; height:20px; border-radius:8px; margin-left:-80px;" onClick='parent.location="javascript:location.reload()"'>Atualizar pagina</button>
</div><br/>


</main>

<main class="container container-fluid col-xs-12" >


<?php




/*
$sql0 = "SELECT imagem FROM ".strtolower($perfil)." WHERE contatos='".strtolower($perfil)."'";
$limite0 = @mysql_query("$sql0");
while($sql0 = @mysql_fetch_array ($limite0)){
$arquivo0 = $sql0['imagem'];





echo'<div style="text-align:top;  margin-top:10%; float:left; position:relative; padding:4px 20px 4px 20px; font-family:arial;  background:'.$cor.';">Foto Principal
&nbsp;&nbsp;
<br/>';
echo'<a name="fotos"><form name="fotoPrincipal" enctype="multipart/form-data" method="post action=""></a>
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


}*/
?>
</main>
</div>




<div class="row">
<main class="container container-fluid col-xs-6">
<?php




$sql = "SELECT arquivo FROM _image WHERE nome ='$localizaContato' ORDER BY id DESC LIMIT 4 ";

$limite = @mysql_query("$sql");
echo'<div div style=" z-index:999; float:left; position:absolute; margin-top:42%; margin-left:1%;">
<a name="fotos" style="z-index:999;" >
<b>MINHAS FOTOS</b>
</a><br/>
<div style=" z-index:999; float:left; position:relative; margin-top:1%; padding:23px 4px 4px 4px; width:100%; " >';
while($sql = @mysql_fetch_array ($limite) ) {
$arquivo = $sql['arquivo'];
error_reporting(E_ALL);
//echo $arquivo;

echo'


<a href="../../'.$arquivo.'">
<img src="../../'.$arquivo.'" width="70"  height="90" border="2" bordercolor="#FF6600" alt="Sua foto n&atilde;o p&ocirc;de ser carregada, tente outra."/>
</a>
<a href="../../eliminaFoto.php?arquivo='.$arquivo.'">
<button type="button" name="excluir" style="border-radius:80px; background-color:white;" />Excluir</button>
</a>

';


}
echo'</div>';


echo'</div>';



/*$sql0 = "SELECT imagem FROM ".strtolower($perfil)." WHERE contatos='".strtolower($perfil)."'";
$limite0 = @mysql_query("$sql0");
while($sql0 = @mysql_fetch_array ($limite0)){
$arquivo0 = $sql0['imagem'];





echo'<form name="fotoPrincipal" enctype="multipart/form-data" method="post action="">
 <a href='.$arquivo0;
echo' style="margin-left:51%; margin-top:0%;"><img src=../../'.$arquivo0;
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
echo '<center><input type="submit" name="atualizarfoto" value="Atualizar Foto" style="border-radius:10px 30px; border:outset; margin-left:10%; margin-top:-15%;""/></center>
 <br/>';
echo'</form>';


}
*/

?>
<?php
echo'<div style="margin-top:28%;" >
<h5>Insira sua fotos aqui !</h5>
<form method="POST" enctype="multipart/form-data" action="../../upload.php?perfil='.$perfil.'" > ';

//echo $login;
echo'Foto :<input name="arquivo" type="file" id="arquivo"  value="Escolher arquivo" />
<input name="nome" type="hidden" id="nome" value="';
?>
<?php
echo $login;
?>
<?php
echo'"/><br/>
<input name="tituloPerfil" type="hidden" id="nome" value="';
?>
<?php
echo $perfil;
?>
<?php
echo'"/><br/>';


echo '<input type="submit" name="Submit" value="Enviar Foto"/>
 <br/>';

echo'</form>
</div>
';
?>
</main>
</div>


<div class="row">
<main class="container container-fluid col-xs-12" style="width:66%; margin-top:66%;">


<?php
echo'<br/><br/><br/>';

echo'<table style="background:'.$cor.';  font-family:arial; width:100%; margin-top:0%;" ><tr><td>';

echo'<div width="90%" align="left" bgcolor="'.$cor.'">
<p>
<div style="margin-left:14px;"><b>LOCALIZAR CONTATOS</b></div><br/>
<form name="form1" action="" method="post">
<input type="hidden" name="logar" value="'.$login.'"/>
</form>
<a href="../../localizaContatos.php?login='.$perfil.'"><button type="button" name="localizar" style="border-radius:70px; background-color:white;">
Localizar contatos</button></a>&nbsp;&nbsp;<a href="../../localizaContatos.php?login='.$perfil.'">
<button type="button" name="Mensagem" style="border-radius:70px; background-color:white;">Enviar Mensagem </button></a>';


?>
</p>
</td></tr> 
</table>






<?php
//$login=$_SESSION['c_email'];
$login=$_POST['email'];


 $exibeContato=@mysql_query("SELECT * FROM ".strtolower($perfil).";",$conexao);
 $exibeFoto=@mysql_query("SELECT imagem FROM ".$perfil.";",$conexao);
 $fetchImagem=@mysql_fetch_array($exibeFoto);
 
 $linhasContato=@mysql_num_rows($exibeContato);

 $limiteContato=@mysql_query("SELECT * FROM ".strtolower($perfil)." LIMIT 10;",$conexao);
 
 $limiteContato=@mysql_num_rows($limiteContato);

 $exibeContatoMenos=@mysql_query("SELECT * FROM ".strtolower($perfil)." WHERE contatos <> '$perfil';",$conexao);
 $linhasContatoMenos=@mysql_num_rows($exibeContatoMenos);
 $LinhasContato1=@mysql_fetch_array($exibeContato);
 $LinhasContato2=$LinhasContato1["contatos"];


 echo'<table style="background:'.$cor.'; width:43%;  font-family:arial; margin-top:2%; margin-left:12.4%;"><tr><td>';


 if($linhasContato>1){

echo'<div class="contatos"><br/><a name="contatos"><b>MEUS CONTATOS</a></div><div id="contador" style="float:left; position:relative; margin-top:-45px; margin-left:160px;
padding:6px 0px 0px 16px;">
<font color="white" >'.$linhasContatoMenos.' amigos</font></div></b>
<form name="form2" action="" method="get">
<div style="width:100%; ">';
 //$colunas=4;

 //$i=0;
 $j=1; //faz com que o seu perfil n�o apare�a na p�gina


 for($j==1;$j<$limiteContato;$j++){
 
$contact=@mysql_result($exibeContato,$j,contatos);
$contact=str_replace("_"," ",$contact);
//if($contact=$perfil1){echo "";}

 echo '<div class="botao"><a href="../../mobile/linkContatosMobile.php?sessao='.@mysql_result($exibeContato,$j,contatos).'&login='.$perfil.'">';
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
 echo'<input type="hidden" name="perfil" value="'; 
 echo'<input type="hidden" name="email" value="'.$login=$_POST['email'].'"/>';


  echo'</div>';
  
  
  
  
  
  
  
 }
 
 //}//fecha i
 
//}

//$meusContatos=@mysql_query("SELECT contatos FROM clovis jr;",$conexao);
echo'<div style="float:left; position:absolute; margin-top:-96px;">';
  $anivDia=@mysql_query("SELECT dia FROM _users WHERE tituloPerfil =".$meusContatos.";",$conexao);
  $anivMes=@mysql_query("SELECT mes FROM _users WHERE tituloPerfil =".$meusContatos.";",$conexao);
  //$anivAno=@mysql_query("SELECT ano FROM users WHERE tituloPerfil =".$perfil.";",$conexao);
  $anivContato=@mysql_query("SELECT tituloPerfil FROM _users WHERE tituloPerfil =".$meusContatos.";",$conexao);
  $perfil=str_replace(" ","_",$perfil);
  $anivContato=@mysql_query("Select contatos  From ".strtolower($perfil)." Where dia = ".date('d')." And mes = ".date('n').";",$conexao);
  $linhasAnivContato=@mysql_num_rows($anivContato);
  $fetchAniversario=@mysql_fetch_array($anivContato);
  $fetchAniversario=$fetchAniversario['contatos'];
  //$anoAtual=date(Y);
  $diaAtual=date("d");
  $mesAtual=date("n");
  $dataAtual=$diaAtual."/".$mesAtual; //echo $dataAtual;
  $anivPerfil=$anivDia."/".$anivMes;
  //$meusContatos=@mysql_query("SELECT tituloPerfil,".$perfil." FROM users WHERE tituloPerfil.dia=".$diaAtual." AND tituloPerfil.mes=".$mesAtual." AND ".$perfil.".contatos;",$conexao);
  if($linhasAnivContato > 0){
  echo"<br/><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;<font color='green'><b>Hoje e aniversario de ".str_replace("_"," ",$fetchAniversario);
  }
echo'</b></font></div>';






$limiteContato=@mysql_query("SELECT * FROM ".strtolower($perfil)." LIMIT 10;",$conexao);

$TotalContato=@mysql_num_rows($exibeContato);

$email=$_POST['email'];

if($TotalContato > 10){
    echo'<div><a href="../../amigos.php?login='.$perfil.'&id='.$email.'"><button type="button" name="mais" value="Mais Amigos">Veja Mais Amigos Aqui...</button></a></div>';
    echo'<input type="hidden" name="perfil" value="perfil"/>';

}

echo'</div></form>';
echo'</div>';
}
else{
echo'';
}
//echo'<div style="float:left; position:absolute; margin-left:41%; margin-top:1%;"><iframe name="quadro" width=180% height=300%
//scrolling="auto" src="http://g1.globo.com/"></iframe></div>';



?>



<?php
$login=isset($email)?$email:null;
//echo $login;
$tema=isset($_POST["tema"])?$_POST["tema"]:null;
echo'<input type="hidden" name="emailPerfil" value="'.$login.'"/>

</form>';

?>




</td></tr></table>
</div>




</div><!--row-->










<div class="row" >
<main  class="container container-fluid  col-xs-12 "  >
<?php

$linhas=@mysql_num_rows($listar9);

echo'<section style="margin-top:20%; margin-left:0px; background:; width:44%;">';

if($linhas>0){

$numeroMensagens=@mysql_query("SELECT comentario FROM _mensagens WHERE postar='".$email."';",$conexao);
$cont = mysql_num_rows($numeroMensagens);
//$numeroMensagens=@mysql_fetch_array($numeroMensagens["comentario"]);
echo'<div><table><td width="100%" colspan="2"  valign="top" align="left" cellspacing="8" >';
echo'<br/><br/><div style="float:left; position:relative; width:260px;"><a name="mensagens"><b>MINHAS MENSAGENS</a>&nbsp;&nbsp;
</div><div id="contadorMaior" style="float:left; position:relative; margin-top:0px; margin-left:-40px;
padding:6px 0px 0px 16px;">
<font color="white" >'.$cont.' novas mensagens</font></div></b><br/><br/>';
//$nome=@mysql_result($listar9,$i);
$i=0;
for($i==0;$i<$linhas;$i++){
echo '<table style="margin-top:20%; margin-left:0px;">
<tr><td  width="100%" colspan="2" id="body" align="left" cellspacing="2" valign="top"
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




echo'<tr><td>';
echo'</td></tr><tr><td>';

error_reporting(0);
ini_set("display_errors", 0 );

$perfilAltera=str_replace(" ","_",$perfil1);
$perfilAltera1=strtolower($perfilAltera);

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
</td></tr></table></div>

<BR>
<BR>
</section>
<p align="right" style="margin-right:180px;"><img src="../../BACKGROUNDS/Clov!System_2012_logo.png" width="120" height="60"/></p></td></tr>

</article>
</td></tr></table>
</main>
</div><!--row-->



<div class="row" style="height:20%;">
<main class="container col-xs-12">
</main>
</div><!--row-->


</div><!--contaner-->

</BODY>
<!--</body>-->
</HTML>
