<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style>
#faixa{background-image:url("././BACKGROUNDS/faixaMinor.png");background-repeat:no-repeat; width:1000px; height:120px; 
 text-align:center;  margin-left:0px; padding-top:30px; color:white; font-family:Tahoma, calibri, arial; text-transform:uppercase;}
</style>
<HEAD>
 <TITLE> - myWeb - </TITLE>
 <link type="text/css" rel="stylesheet" href="Estilo.css"/>
 <link type="text/css" rel="stylesheet" href="EstiloFonte.css"/>
 <link rel="shortcut icon" href="MY_WEB-LOGO/favicon.ico"" type="image/x-icon"/>
 <!--<script language="javascript" src="query.js"></script>-->
<?
include "based.php";
?>
<script language="javascript">
function retirarAcento(objResp) {
var varString = new String(objResp.value);
var stringAcentos = new String('àâêôûãõáéíóúçüÀÂÊÔÛÃÕÁÉÍÓÚÇÜ');
var stringSemAcento = new String('aaeouaoaeioucuAAEOUAOAEIOUCU');
 
var i = new Number();
var j = new Number();
var cString = new String();
var varRes = '';
 
for (i = 0; i < varString.length; i++) {
cString = varString.substring(i, i + 1);
for (j = 0; j < stringAcentos.length; j++) {
if (stringAcentos.substring(j, j + 1) == cString){
cString = stringSemAcento.substring(j, j + 1);
}
}
varRes += cString;
}
objResp.value = varRes;
}
</script>
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
 <!--     <div id="flashContent" align="center">
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
			</object>
		</div>
<!--	</body>-->
<p align="left"><img src="MY_WEB-LOGO/MyWeb.png" width="200" height="60" /></p>
    <br>
    <br>

<div align="left"><h1>Cadastro de Usu&aacute;rios</h1><img src="BACKGROUNDS/Clov!System_2012_logo.png" width="120" height="60" align="right" id="body"/>
<form method="post" enctype="multipart/form-data" name="IncluirUsuario" action="Incluir.php" >
<font face="tahoma" size=1>
Nome(T&iacute;tulo para o Perfil):<input type="text" name="tituloPerfil" value="" size="16" id="Estado" maxlength="48"  onchange="javascript:retirarAcento(this);"/>&nbsp;&nbsp;<span style="color:green;">
</span><br/>
Sobrenome(T&iacute;tulo para o Perfil):<input type="text" name="tituloPerfil1" value="" size="35" id="Estado" maxlength="68" onchange="javascript:retirarAcento(this);"/>&nbsp;&nbsp;<span style="color:green;">
</span><br/>
E-mail(Seu Login):<input type="text" name="c_email" value="" size="10" id="email"/>@
<select name="dominio">
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
<br/>
<!--@myweb.is-great.net<br/>-->
Senha:<input type="password" name="c_senha" id="c_senha" value="secret" size="20" onClick="javascript:this.value=''"/><br/>
Redigite a senha:<input type="password" name="redigiteSenha" value="secret" size="20" onClick="javascript:this.value=''"/>  <br/>
Estado:<input type="text" name="estado" id="estado" onClick="javascript:this.value=''" value=">>" size="4" maxlength="2" id="Estado"/> <br/>
Cidade:<input type="text" name="cidade" value="" size="30" id="Proper"/>  
<!--Religião:
<select name="religiao">
<option value="Assembléia de Deus" Selected>Assembléia de Deus</option>
<option value="Batista">Batista</option>
<option value="Igreja Católica">Igreja Católica</option>
<option value="Congregação Cristã">Congregação Cristã</option>
<option value="Metodista">Metodista</option>
<option value="Presbiteriana">Presbiteriana</option>
<option value="Bola de Neve">Bola de Neve</option>
<option value="Congregacional">Congregacional</option>
<option value="Nova Vida">Nova Vida</option>
<option value="Cristo Vive">Cristo Vive</option>
<option value="Mórmon">Mórmon</option>
<option value="Maranata">Maranata</option>
<option value="Outro">Outro</option>
</select> -->                                      <br>
Data de nascimento:<select name="dia">
<option value="01" Selected>01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select name="mes">
<option value="01" Selected>Janeiro</option>
<option value="02">Fevereiro</option>
<option value="03">Março</option>
<option value="04">Abril</option>
<option value="05">Maio</option>
<option value="06">Junho</option>
<option value="07">Julho</option>
<option value="08">Agosto</option>
<option value="09">Setembro</option>
<option value="10">Outubro</option>
<option value="11">Novembro</option>
<option value="12">Dezembro</option>
</select>
<select name="ano">
<option value="2011" Selected>2011</option>
<option value="2011">2015</option>
<option value="2011">2014</option>
<option value="2011">2013</option>
<option value="2011">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1980">1959</option>
<option value="1979">1958</option>
<option value="1978">1957</option>
<option value="1977">1956</option>
<option value="1976">1955</option>
<option value="1975">1954</option>
<option value="1974">1953</option>
<option value="1973">1952</option>
<option value="1972">1951</option>
<option value="1971">1950</option>
<option value="1970">1949</option>
<option value="1969">1948</option>
<option value="1968">1947</option>
<option value="1967">1946</option>
<option value="1966">1945</option>
<option value="1965">1944</option>
<option value="1964">1943</option>
<option value="1963">1942</option>
<option value="1962">1941</option>
<option value="1961">1940</option>
<option value="1960">1939</option>
<option value="1968">1938</option>
<option value="1967">1937</option>
<option value="1966">1936</option>
<option value="1965">1935</option>
<option value="1964">1934</option>
<option value="1963">1933</option>
<option value="1962">1932</option>
<option value="1961">1931</option>
<option value="1960">1930</option>
</select> <BR><br>
<!--Versículo:<br>
<textarea  name="versiculo"  cols="40" rows="6" scrolling="yes" maxlength="100">Se Deus é por nós, quem será contra nós?</textarea><br>
Atividades:<br>-->
Atividades:<br/>
<textarea  name="atividades"  cols="40" rows="6" scrolling="yes" maxlength="100" onClick="javascript:this.value=''">O que você faz?</textarea><br>
Hobby:<br>
<textarea name="hobby"  cols="40" rows="6" scrolling="yes" maxlength="100" onClick="javascript:this.value=''">De que você gosta?</textarea><br>
Texto do Perfil:<br>
<textarea name="textoPerfil"  cols="40" rows="6"
scrolling="yes" maxlength="1500" onClick="javascript:this.value=''">Digite aqui o que você quer exibir no seu perfil.</textarea><br>
Status:<select name="status">
<option value="solteiro" Selected>Solteiro(a)</option>
<option value="namorando">Namorando</option>
<option value="casado(a)">Casado(a)</option>
<option value="outro...">Outro...</option>
</select> <BR>
</div>
<div>
<br/><br/><br/><br/><br/><br/><h5>Insira sua foto aqui !</h5>
Foto :<input name="arquivo" type="file"   value="Escolher arquivo"/>
<?php $tituloPerfil=isset($_POST['tituloPerfil'])?$_POST['tituloPerfil']:null; echo'<input name="nome" type="hidden" id="nome" value="'.$tituloPerfil.'"/>'; ?>
</div>
<br/><br/>
<span STYLE="width:50%; margin-left:130px;">
<div align="center">

    <input onmouseover=this.style.cursor="hand" name="cadastrar" value="Cadastre-se" type="submit" STYLE="border:0; height:18;
    width:80; background:#999999;">
    <BR>
    <BR>


</div>
</span>
</form>


</BODY>
</HTML>
