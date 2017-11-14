
<?php
include "based.php";



echo"<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<style>
#faixa{background-image:url('././BACKGROUNDS/faixaMinor.png');background-repeat:no-repeat; width:1000px; height:120px; 
 text-align:center;  margin-left:0px; padding-top:30px; color:white; font-family:Tahoma, calibri, arial; text-transform:uppercase;}
</style>
<head>
<title> - myWeb - </title>

 <link type='text/css' rel='stylesheet' href='Estilo.css'/>
 <link rel='shortcut icon' href='MY_WEB-LOGO/favicon.ico' type='image/x-icon'/>
</head>

<body bgcolor='#CCCCCC' id='corpo'>

<div align='right'>
<script  Type='text/JavaScript' language='JavaScript' >


var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var timeValue = '' + ((hours >12) ? hours -12 :hours)
timeValue += ((minutes < 10) ? ':0' : ':') + minutes
timeValue += (hours >= 12) ? ' pm':' am'
timerRunning = true;

mydate = new Date();
myday = mydate.getDay();
mymonth = mydate.getMonth();
myweekday= mydate.getDate();
weekday= myweekday;
myyear= mydate.getYear();
year =  myyear



if(myday == 0)
day = ' <b><tt>Domingo,</tt></b> '

else if(myday == 1)
day = ' <b><tt>Segunda,</tt></b> '

else if(myday == 2)
day = ' <b><tt>Terça,</tt></b> '

else if(myday == 3)
day = ' <b><tt>Quarta,</tt></b> '

else if(myday == 4)
day = ' <b><tt>Quinta,</tt></b> '

else if(myday == 5)
day = ' <b><tt>Sexta,</tt></b> '

else if(myday == 6)
day = ' <b><tt>Sábado,</tt></b> '

if(mymonth == 0)
month = ' <b><tt>de Janeiro de</tt></b> '

else if(mymonth ==1)
month = '<b><tt> de Fevereiro de</tt></b> '

else if(mymonth ==2)
month = '<b><tt> de Março de</tt></b> '

else if(mymonth ==3)
month = '<b><tt> de Abril de</tt></b> '

else if(mymonth ==4)
month = '<b><tt> de Maio de</tt></b> '

else if(mymonth ==5)
month = '<b><tt> de Junho de</tt></b> '

else if(mymonth ==6)
month = '<b><tt> de Julho de</tt></b> '

else if(mymonth ==7)
month = '<b><tt> de Agosto de</tt></b> '

else if(mymonth ==8)
month = '<b><tt> de Setembro de </tt></b>'

else if(mymonth ==9)
month = '<b><tt> de Outubro de </tt></b>'

else if(mymonth ==10)
month = '<b><tt> de Novembro de </tt></b>'

else if(mymonth ==11)
month = '<b><tt> de Dezembro de </tt></b>'



year='<b><tt>2017</tt></b> '


document.write(day + '<font size=2>' + myweekday + '</font>' + month + year + ' - ' + '<font size=2>' + timeValue + '</font>')



</script>
</div>
<br/>

<body>
<div id='faixa'>
<a href='https://www.google.com.br/' target='_blank'>Google</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href='http://www.infojobs.com.br/' target='_blank'>Infojobs</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href='http://g1.globo.com/' target='_blank'>G1</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href='http://www.r7.com/' target='_blank'>R7</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href='https://www.youtube.com/' target='_blank'>YouTube</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>

<p align='left'><img src='MY_WEB-LOGO/MyWeb.png' width='200' height='60' /></p>
    <br>
    <br>

	
<form id='form1' name='form1' method='post' action='lembraSenha.php'>
  <table width='86%' border='0' align='center'>
    <tr>
      <td colspan='3'><div align='left'><strong>LEMBRAR SENHA </strong></div><br/><br/></td>
    </tr>
    <tr>
      <td width='12%' ><span >Seu login:</span></td>
      <td width='38%' ><span >
        <label>
        <input name='login' type='text' id='login' placeholder='user@domain.com' />
        </label>
      </span></td>
    </tr>
    <tr>
      <td></td>
      <td>
        <label>
        <br><p align='right'><input type='submit' name='Submit' value='Enviar' Style='background:#999999;' />     </p>
        </label>
     </td>


    <td>  <label>
     <br><p align='left' ><input type='button'  value='Voltar' onclick='history.go(-1)' Style='background:#999999;' /> </p>
      </label></td>
     </tr>
  </table>

   </form>

    <br>
    <p align='right'><img src='BACKGROUNDS/Clov!System_2012_logo.png' width='120' height='60'/></p>
    <br>
	</body>
	</html>";



   
?>
