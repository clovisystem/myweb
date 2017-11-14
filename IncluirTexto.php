<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<HEAD>
 <TITLE> - myWeb - </TITLE>
 <link type="text/css" rel="stylesheet" href="Estilo.css"/>
 <link type="text/css" rel="stylesheet" href="EstiloFonte.css"/>
 <link rel="shortcut icon" href="MY_WEB-LOGO/favicon.ico" type="image/x-icon"/>
<?
include "based.php";
?>
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
<br/>
<p align="left"><img src="MY_WEB-LOGO/MyWeb.png" width="200" height="60" /></p>
    <br>
    <br>




<?php

 // @session_start();
 //   $_SESSION['c_email'];
 //   $_SESSION['c_senha'];


include "based.php";


//@session_start();
$confirmacao=$_GET['confirmacao'];

$textoPerfil=$_POST['textoPerfil'];
$textoAtividades=$_POST['textoAtividades'];
$textoHobbies=$_POST['textoHobbies'];
$textoEstado=$_POST['textoEstado'];
$textoCidade=$_POST['textoCidade'];
$textoStatus=$_POST['textoStatus'];
$textoDominio=$_POST['dominio'];
$textoEmail=$_POST['textoEmail'];
$email=$textoEmail."@".$textoDominio;
$textoSenha=$_POST['textoSenha'];
$textoDia=$_POST['textoDia'];
$textoMes=$_POST['textoMes'];
$textoAno=$_POST['textoAno'];


//$email=@mysql_query("SELECT email FROM users WHERE email LIKE'%$textoEmail%';",$conexao);
//if($textoEmail!=$email){echo"<script>alert('Informe seu e-mail corretamente!'); history.go(-1);</script>";}

if($_POST['textoPerfil'] == "" || $_POST['textoAtividades'] == "" || $_POST['textoHobbies'] == ""|| $_POST['textoEstado']
== ""|| $_POST['textoCidade'] == ""|| $_POST['textoStatus'] == ""|| $_POST['textoEmail'] == "" || $_POST['dominio'] == "" || $_POST['textoSenha'] == ""
|| $_POST['textoDia'] == "" || $_POST['textoMes'] == "" || $_POST['textoAno'] == "")
{echo '<body bgcolor="#CCCCCC"><BR><BR><font color="red"><b>Us&aacute;rio n&atilde;o p&ocirc;de ser alterado, preencha todos os campos!</b>
</font></body><BR><BR>';
 echo $confirmacao.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="logar.php"><input type="button" name="logoff" value="Fazer logoff" /></a>'.'|'.'<input type="button" name="voltar" value="Voltar"
  onclick="history.go(-2)"/>';
// echo '<br><br>';
?>
<!--<form method="post" action="">    <img src="Clov!System.ico" width="120" height="60" align="right" id="body"/>
Texto do Perfil:<BR><textarea name="textoPerfil" cols="40" rows="8" wrap="on" scrolling="yes"></textarea><BR><BR>
Minhas Atividades:<BR><textarea  name="textoAtividades"  cols="40" rows="8" wrap="on" scrolling="yes"></textarea> <BR><BR>
Meus Hobbies:<BR><textarea  name="textohobbies"  cols="40" rows="8" wrap="on" scrolling="yes"></textarea>    <BR><BR>
Estado:<input type="text" value="" name="textoEstado" size="6" maxlength="2" id="Estado"/>  <BR><BR>
Cidade:<input type="text" value="" name="textoCidade" size="30" id="Proper"/>    <BR><BR>
Senha:<input type="text" value="" name="textoSenha" size="30" />    <BR><BR>
Dia de aniversário:<select name="textoDia">
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
v<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>    <BR><BR>
Mês:<select name="textoMes">
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
</select>   <BR><BR>
Ano:<select name="textoAno">
<option value="2012" Selected>2012</option>
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
<option value="2010">1999</option>
<option value="2009">1998</option>
<option value="2008">1997</option>
<option value="2007">1996</option>
<option value="2006">1995</option>
<option value="2005">1994</option>
<option value="2004">1993</option>
<option value="2003">1992</option>
<option value="2002">1991</option>
<option value="2001">1990</option>
<option value="2000">1989</option>
<option value="2010">1988</option>
<option value="2009">1987</option>
<option value="2008">1986</option>
<option value="2007">1985</option>
<option value="2006">1984</option>
<option value="2005">1983</option>
<option value="2004">1982</option>
<option value="2003">1981</option>
<option value="2002">1980</option>
<option value="2001">1979</option>
<option value="2000">1978</option>
</select> <BR><br>

Status:<select name="textoObjetivo">
<option value="amizade" Selected>Amizade</option>
<option value="namoro">Namoro</option>
<option value="outro...">Outro...</option>
</select> <BR> <BR>

Digite seu E-mail:  <BR>
<input type="text" value="" name="textoEmail" size="15" maxlength="40" id="textoEmail"/>@clovisystem.net  <BR><BR>
<input type="submit" name="confirmacao"  value="Confirmar"/>

</form>
';-->
<?php
}else{

$resultado=@mysql_query("UPDATE users SET textoPerfil='".$_POST['textoPerfil']."', estado='".$_POST['textoEstado']."',
 cidade='".$_POST['textoCidade']."', atividades='".$_POST['textoAtividades']."', hobby='".$_POST['textoHobbies']."',
 status='".$_POST['textoStatus']."', email='$email',senha='".$_POST['textoSenha']."',
 dia='".$_POST['textoDia']."',Mes='".$_POST['textoMes']."', Ano='".$_POST['textoAno']."'
 WHERE email LIKE '%$textoEmail%' ;",$conexao);

echo '<font color="green">'.$confirmacao.'</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logar.php"><input type="button" 
name="logoff" value="Fazer logoff" /></a>'.'|'.'<input type="button" name="voltar" value="Voltar" onclick="history.go(-2)"/>';
echo '<br><br>';
?>

<!--<form method="post" action="">    <img src="Clov!System.ico" width="120" height="60" align="right" id="body"/>
Texto do Perfil:<BR><textarea name="textoPerfil" cols="40" rows="8" wrap="on" scrolling="yes"></textarea><BR><BR>
Minhas Atividades:<BR><textarea  name="textoAtividades"  cols="40" rows="8" wrap="on" scrolling="yes"></textarea> <BR><BR>
Meus Hobbies:<BR><textarea  name="textohobbies"  cols="40" rows="8" wrap="on" scrolling="yes"></textarea>    <BR><BR>
Estado:<input type="text" value="" name="textoEstado" size="6" maxlength="2" id="Estado"/>  <BR><BR>
Cidade:<input type="text" value="" name="textoCidade" size="30" id="Proper"/>    <BR><BR>
Senha:<input type="text" value="" name="textoSenha" size="30" />    <BR><BR>
Dia de aniversário:<select name="textoDia">
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
</select>    <BR><BR>
Mês:<select name="textoMes">
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
</select>   <BR><BR>
Ano:<select name="textoAno">
<option value="2012" Selected>2012</option>
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
</select> <BR><br>
Status:<select name="textoObjetivo">
<option value="amizade" Selected>Amizade</option>
<option value="namoro">Namoro</option>
<option value="outro...">Outro...</option>
</select>
<BR>   <BR>
Digite seu E-mail:  <BR>
<input type="text" value="" name="textoEmail" size="15" maxlength="40" id="Email"/>@websystem.x10.mx  <BR><BR>
 <input type="submit" name="confirmacao"  value="Confirmar"/>

</form>';-->
<?php
 }

 echo"<script>alert('Alteraç&otilde;es atualizadas no pr&oacute;ximo Logon.');</script>";


?>




</BODY>
</HTML>
