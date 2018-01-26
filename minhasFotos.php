<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<HEAD>
 <TITLE> - webSystem - </TITLE>
  <link type="text/css" rel="stylesheet" href="estilo.css"/>
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



year="<b><tt>2018</tt></b> "


document.write(day + myweekday + month + "2018" + " - " + timeValue)



</script>
</div>
<br/>


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



<b>MINHAS FOTOS</b><br/><br/>
<table width="90%" bgcolor="#B5C0C3" align="left" id="body" style="bordercolor:transparent;"><tr>
<td width="50%" colspan="2" height="50" valign="bottom" bgcolor="#B0C6D2" >


<?php
include"based.php";

$login=$_GET["login"];
$perfil=$_GET["perfil"];
$consultar = @mysql_query("SELECT arquivo FROM image WHERE nome LIKE'%$login%';",$conexao);


while($consulta = @mysql_fetch_array($consultar) ){
$arquivo = $consulta['arquivo'];

echo'<span style="float:left; position:relative; padding:4px 4px 4px 4px;" ><a href='.$arquivo.'>
<img src='.$arquivo.' width="120"  height="120"  bordercolor="#FF6600"/></a>
<a href="eliminaFoto.php?arquivo='.$arquivo.'"><button type="button" name="excluir"  />Excluir</button>
</a>
</span>';}

echo'<div style="float:left; position:relative; margin-left:20px;">';
echo'&nbsp;&nbsp;&nbsp;&nbsp;<h5>Insira sua fotos aqui !</h5>
<form method="POST" enctype="multipart/form-data" action="upload.php?perfil='.$perfil.'" > ';
echo'Foto :<input name="arquivo" type="file" id="arquivo"  value=Escolher arquivo"/>
<input name="login" type="hidden" id="login" value="';
?>


<?php
echo $login;
?>
<?php
echo'"/>';
echo'<br/>
<input name="tituloPerfil" type="hidden" id="tituloPerfil" value="';
?>
<?php
echo $perfil;
?>
<?php
echo'"/>';
echo'<br/>
';
include"based.php";
$login=@mysql_query("SELECT * FROM users WHERE tituloPerfil ='$perfil';",$conexao);
$linhas=@mysql_num_rows($login);
$i=0;
for($i=0;$i<$linhas;$i++){
$voltaLogin=@mysql_result($login,$i,'email');
}
	
$password=@mysql_query("SELECT * FROM users WHERE tituloPerfil ='$perfil';",$conexao);
$linhas1=@mysql_num_rows($password);
$j=0;
for($j=0;$j<$linhas1;$j++){
$voltaPassword=@mysql_result($password,$j,'senha');
}

echo '<input type="submit" name="Submit" value="Enviar Foto" />&nbsp;&nbsp;|&nbsp;&nbsp;';
echo '<a href="ListarPerfil2.php?voltaLogin='.$voltaLogin.'&voltaPassword='.$voltaPassword.'"><input type="button" name="voltar" value="Voltar" /></a>
 <br/>';

echo'</form>';
echo'</div>';
?>

</td></tr>
</table>

</body>
</html>
