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
#imgBusca{
		
		float:left; 
		position:absolute;
		margin-left:-60px;
		margin-top:4px;
		}
		
#btnBusca{
		
		float:left; 
		position:absolute;
		margin-left:-55px;
		margin-top:3px;
		width:30px;
		height:30px;
		background-image:url("OBJETOS/search4.png");
		background-repeat:no-repeat;
		background-size:35px 25px;
		background-position: -5px 1px;
		}
		
#txtBusca{
		float:left;
		background-color:transparent;
		padding-left:5px;
		font-style:italic;
		font-size:18px;
		border:none;
		height:32px;
		width:260px;
		margin-top:2.2px;
		}
		
#divBusca{
		background-color:white;
		border:transparent 1px;
		border-radius:4px;
		width:260px;
		height:30px;
		padding-bottom:6px;
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

<body>

<div id="faixa" style="margin-left:60px;">
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
<p align="left" style="margin-left:60px;><img src="MY_WEB-LOGO/MyWeb.png" width="200" height="60" /></p>
    <br>


<?php

 //@session_start();
    //$_SESSION['c_email'];
    //$_SESSION['c_senha'];

include "based.php";

error_reporting(0);
ini_set(“display_errors”, 0 );

 $login=$_GET["login"];

if(!(isset($_POST["action"])?$_POST["action"]:null)){ ?>
INFORME O NOME DO CONTATO:<br/>  <br/>
<form name="localiza" method="post" action="">


<div id="divBusca">
	<input type="search" name="contato" id="txtBusca" placeholder="Buscar..."/>
	<button type="submit" id="btnBusca" name="pesquisar" value="Localizar" ></button><!--<img src="OBJETOS/search4.png" width="40" height="30" id="imgBusca" alt="Buscar"/>-->
</div>


<!--<input type="text" name="contato" value="" size="30"/><br/><br/>
<button type="submit" name="pesquisar" value="Localizar" />Localizar</button>| --><input type="reset" value="Limpar" name="limpar"/> | <input type="button" 
name="voltar1" value="Voltar" onclick="history.go(-1)"/>
<br/><br/>



<?php




echo'<form name="form2" action="" >';

$logar=isset($_POST["logar"])?$_POST["logar"]:null;
echo'<input type="hidden" name="logar" value="'.$logar;
echo'"/>';


$contat=@mysql_query("SELECT * FROM users;",$conexao);
$contat=@mysql_fetch_array($contat);
$contat=$contat["tituloPerfil"];
 $contatMinor=strtolower($contat);
 $exibeImagem=@mysql_query("SELECT imagem FROM $contatMinor LIMIT 28;",$conexao);
 
//$perfil=$_SESSION['c_email'];

 $exibeContato=@mysql_query("SELECT tituloPerfil,imagem FROM users  WHERE tituloPerfil <> '$login' ORDER BY codigo DESC  LIMIT 28 ;",$conexao);
 //$exibeFoto=@mysql_query("SELECT imagem FROM ".$perfil.";",$conexao);
 //$fetchImagem=@mysql_fetch_array($exibeFoto);
 
 $linhasContato=@mysql_num_rows($exibeContato);
  //$linhasImagem=@mysql_num_rows($exibeImagem);
 $LinhaContato=@mysql_fetch_array($exibeContato);
 //if($nullLinhaContato['contatos']==0){echo ' ';}
 //else{
 
 $colunas=3;

 $i=0;
 $j=0;

 //for($i==0;$i<$linhasContato;$i++){
 //echo'<div id="segmento">';
 //echo "\t";
 for($j==0;$j<$linhasContato;$j++){
 
 

 echo '<div class="botao"><a href=localizaContatos2.php?nome='.@mysql_result($exibeContato,$j,tituloPerfil).'&login='.$login.'>';

 echo'<div class="imagemContato"><img src='.@mysql_result($exibeContato,$j,imagem).' width="60"  height="80"/></div>';
 //echo'<div class="imagemContato"><img src='.@mysql_result($exibeContato,$j,imagem).' width="60"  height="80"/></div>';
$result=@mysql_result($exibeContato,$j,tituloPerfil);
$result1=str_replace("_"," ",$result);
 echo'<div class="textoLocaliza">'.$perfis=strtoupper($result1);
 if($result=$login){
 echo' ';
 }
 echo'</div>';

 echo'</div>
 ';
 //}
 echo'&nbsp;&nbsp;';
 echo'<input type="hidden" name="perfil" value="'; echo $login; echo'" />';
 echo'</div>';
 
 }


echo'</form>';









?>

       <?php if(isset($_POST["pesquisar"])?$_POST["pesquisar"]:null){
                                                if(empty($_POST["contato"])){
                                                echo'<br/>Informe o nome do contato!<br/>';
                                                echo'</b>';
                                                exit;  }
else {  ?>


<!--<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>-->
<br/>
<br/>
<br/>
SELECIONE O CONTATO:&nbsp;&nbsp;
<br/><br/>
<a name="SelecioneContato">
<div  size="5" style="border:none; background:#CCCCCC; font-size:18px; color:blue; padding:8px 20px 6px 2px;
margin-left:14px; font-weight:bold; width:360px;">

<?php
$contato=isset($_POST['contato'])?$_POST['contato']:null;
$contato=str_replace(" ","_",$contato);
//$contato1=$contato;
//$contato1=str_replace("_"," ",$contato1);
$sql=@mysql_query("SELECT users.tituloPerfil,users.cidade,".$contato.".imagem FROM users,".$contato." WHERE
users.tituloPerfil LIKE '$contato%'
 AND users.tituloPerfil=".$contato.".contatos LIMIT 3 ;",$conexao);
While(list($tituloPerfil,$cidade,$imagem)=@mysql_fetch_array($sql))
echo '<a href="localizaContatos2.php?login='.$_GET["login"].'&nome='.$tituloPerfil.'">
<span id="localizaContato" class="select"   style="border:none; background:#CCCCCC; font-size:18px; color:blue; padding:8px 20px 6px 2px;margin-left:15px; font-weight:bold; width:600px;" value="'.str_replace("_"," ",$tituloPerfil).'"><img src="'.$imagem.'"
width="40" height="40" bordercolor="#FF6600"/>&nbsp;&nbsp;'.str_replace("_"," ",$tituloPerfil).'
&nbsp;&nbsp;-&nbsp;&nbsp;'.$cidade.'&nbsp;&nbsp;</span><br/>';
echo '</div></a>';
echo'</a>';
}
?>
</b>
<br>
 <?php
      $logar=$_POST['logar'];
      echo '<input type="hidden" name="logar" value="'.$_POST['logar'].'"/>';
 ?>
<br/>
<!--<input type="submit" value="Localizar" name="action"/> | <input type="reset" value="Limpar" name="limpar"/> | <input type="button" 
value="Voltar" name="voltar" onclick="history.go(-1)"/>-->
</form>






<?php }   }
else if(isset($_POST["action"])?$_POST["action"]:null){
if(empty($_GET["nome"])){
echo"<font face='tahoma' size='3' color='red'><b><br>Erro !!!</b></font><br>";
echo"<input type='submit' value='Voltar' onclick='history.go(-1);'/>";}
Else{

     $senha=@mysql_query("SELECT senha FROM users WHERE senha LIKE'%$_POST[logar]%';",$conexao);
     @session_start();
     $_SESSION['c_email']=$_POST['logar'];
     $_SESSION['c_senha']=$senha;
     $localizado=$_GET['nome'];


echo'<body bgcolor="#CCCCCC" id="corpo">';
echo'<table width="90%" bgcolor="#B5C0C3" id="body" align="center"><tr><td colspan="3">';
echo '<input type="text" name="logon" value="'.$_POST['logar'].'" readonly="true" size="23" STYLE="background:#B5C0C3; border:none; font-size:18px; font-family:calibri,arial; color:green; font-weight:bold;"/>, esta é a Página do perfil de <input type="text" name="logon" value="'.strtoupper($localizado).'" readonly="true" size="16" STYLE="background:#B5C0C3; border:none; font-size:18px; font-family:calibri,arial; color:green; font-weight:bold;"/>';
echo'</input>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="Voltar" onclick="history.go(-2);" />';
echo'</td></tr>';


$listar0=@mysql_query("SELECT tituloPerfil FROM users WHERE tituloPerfil LIKE '%$_GET[nome]%' ;",$conexao);
$listar1=@mysql_query("SELECT email FROM users WHERE tituloPerfil LIKE '%$_GET[nome]%';",$conexao);
$listar2=@mysql_query("SELECT textoPerfil FROM users WHERE tituloPerfil LIKE '%$_GET[nome]%';",$conexao);
$listar3=@mysql_query("SELECT atividades FROM users WHERE tituloPerfil LIKE '%$_GET[nome]%';",$conexao);
$listar4=@mysql_query("SELECT hobby FROM users WHERE tituloPerfil LIKE '%$_GET[nome]%';",$conexao);
$listar5=@mysql_query("SELECT objetivo FROM users WHERE tituloPerfil LIKE '%$_GET[nome]%';",$conexao);
$listar6=@mysql_query("SELECT estado FROM users WHERE tituloPerfil LIKE '%$_GET[nome]%';",$conexao);
$listar7=@mysql_query("SELECT cidade FROM users WHERE tituloPerfil LIKE '%$_GET[nome]%';",$conexao);
$listar8=@mysql_query("SELECT arquivo FROM image WHERE foto LIKE '%$localizado%';",$conexao);
$listar11=@mysql_query("SELECT dia FROM users WHERE tituloPerfil LIKE '%$sessao%';",$conexao);
$listar12=@mysql_query("SELECT mes FROM users WHERE tituloPerfil LIKE '%$sessao%';",$conexao);


$perfil=@mysql_result($listar0,0,tituloPerfil);


echo '<form>';
echo'<tr><td width="20%" colspan="2"><p id="Estado"><font size="7" color="green" face="impact"
style="text-transform:uppercase">' .$perfil=str_replace("_"," ",$perfil);
echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></p></td><tr><td></td></tr><td></td>
<td width="50%" colspan="1" align="left" valign="bottom" >
<font color="#06438E" size="3" face="verdana"><b>Sobre mim...</b></td></tr>';
echo'<td width="15%" height="50" colspan="1" valign="bottom">E-mail:&nbsp;&nbsp;<font size="2" color="green" face="arial"> ' .@mysql_result($listar1,0,email);
echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td><td width="40%" rowspan="5" colspan="1"
valign="top" bgcolor="#B0C6D2" id="celula1"><font color="#168ECF" size="2" face="verdana">'
.@mysql_result($listar2,0,textoPerfil).'</font></td></tr>';

echo'<tr><td width="15%" colspan="1" height="50" valign="bottom"><br/>Minhas atividades:
&nbsp;&nbsp;<br/><textarea  readonly="true" name="Atividades" valign="bottom" cols="45" rows="2"
id="Atividades" style="text-align:justify; margin:4px 0px 0px 7px;">'
.@mysql_result($listar3,0,atividades);
echo'</textarea></font></td></tr>';
echo'<tr><td width="15%" colspan="1" height="50" valign="bottom">Meus hobbies:&nbsp;&nbsp;
<br/><textarea  readonly="true" name="hobbies" valign="bottom"  cols="45"  rows="2"
id="hobbies" style="text-align:justify; margin:4px 0px 0px 7px;" ">' .@mysql_result($listar4,0,hobby);
echo'</textarea></font></td></tr>';
echo'<td width="15%" height="50" colspan="1" valign="bottom">Status:&nbsp;&nbsp;
<font size="2" color="green" face="arial"> ' .@mysql_result($listar5,0,objetivo);
echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>';
echo'<td width="15%" height="50" colspan="1" valign="bottom">Estado:&nbsp;&nbsp;
<font size="2" color="green" face="arial" style="text-transform:uppercase;"> '
 .@mysql_result($listar6,0,estado);
echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>';
echo'<td width="15%" height="50" colspan="1" valign="bottom">Cidade:&nbsp;&nbsp;
<font size="2" color="green" face="arial" style="text-transform:capitalize;"> '
 .@mysql_result($listar7,0,cidade);
echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
</tr>';
echo'<tr><td width="50%" colspan="1" height="50" valign="bottom">Anivers&aacute;rio:&nbsp;&nbsp;
<input type="text" readonly="true" size="30" id="aniversario" valign="bottom" name="aniversario"
value="' .@mysql_result($listar11,0,dia).'/'.@mysql_result($listar12,0,mes);
echo'"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>';



echo'<tr><td width="50%" height="30"colspan="1" height="50" valign="bottom">
<br/><br/>
<b>MINHA FOTO</b><br/><br/></td>
<td width="50%" height="30" colspan="1" height="50" valign="bottom"></td></tr>';

?>
<tr><td width="10%" colspan="1" height="100" valign="top" align="left"  >
<?php
$sql = "SELECT imagem FROM $localizado WHERE tituloPerfil ='$localizado'  ";
$limite = @mysql_query("$sql");

while($sql = @mysql_fetch_array ($limite) ) {
$arquivo = $sql['imagem'];
echo'<form name="form2" method="get" action="" >';
echo'<span style="float:left; position:relative; padding:4px 8px 8px 4px;"><a href='.$arquivo.'>
<img src=' .$arquivo. ' width="120" height="90" border="2" bordercolor="#FF6600"/></a> ';
?>
</span>
</form>
<?php
}
echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>';
echo'</form>';
echo'</table>';
echo'<table width="90%" bgcolor="#B5C0C3" id="body" align="center"><tr>
<td colspan="3"> <br/>
<div id="formulario1">
<form name="adiciona" method="post" action="adiciona.php?login='.$login.'">
<input type="hidden" name="perfil" value="'.$perfil.'"/>
<input type="submit" name="add" value="Adicionar contato"/>
</form>
</div>


</td></tr></table>';

echo'<hr size="10%" width="90%" color="#A2A6A9">';



}}


?>
 <br>
    <p align="right"><img src="BACKGROUNDS/Clov!System_2012_logo.png" width="120" height="60"/></p>
    <br>

</BODY>
</HTML>
