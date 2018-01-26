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
day = " <b><tt>Ter�a,</tt></b> "

else if(myday == 3)
day = " <b><tt>Quarta,</tt></b> "

else if(myday == 4)
day = " <b><tt>Quinta,</tt></b> "

else if(myday == 5)
day = " <b><tt>Sexta,</tt></b> "

else if(myday == 6)
day = " <b><tt>S�bado,</tt></b> "

if(mymonth == 0)
month = " <b><tt>de Janeiro de</tt></b> "

else if(mymonth ==1)
month = "<b><tt> de Fevereiro de</tt></b> "

else if(mymonth ==2)
month = "<b><tt> de Mar�o de</tt></b> "

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
<br/>
<div style="background-color:white; border-radius:12px; width:100%; height:60px;"><p align="left"><img src="MY_WEB-LOGO/MyWeb.png" width="200" height="60" /></p></div>

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

<?php
}else{

$resultado=@mysql_query("UPDATE _users SET textoPerfil='".$_POST['textoPerfil']."', estado='".$_POST['textoEstado']."',
 cidade='".$_POST['textoCidade']."', atividades='".$_POST['textoAtividades']."', hobby='".$_POST['textoHobbies']."',
 status='".$_POST['textoStatus']."', email='$email',senha='".$_POST['textoSenha']."',
 dia='".$_POST['textoDia']."',Mes='".$_POST['textoMes']."', Ano='".$_POST['textoAno']."'
 WHERE email LIKE '%$textoEmail%' ;",$conexao);

echo '<font color="green">'.$confirmacao.'</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logar.php"><input type="button" 
name="logoff" value="Fazer logoff" /></a>'.'|'.'<input type="button" name="voltar" value="Voltar" onclick="history.go(-2)"/>';
echo '<br><br>';
?>


<?php
 }

 echo"<script>alert('Altera&ccedil;&otilde;es atualizadas no pr&oacute;ximo Logon.');</script>";


?>




</BODY>
</HTML>
