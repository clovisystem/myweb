
<?php
include "based.php";
?>


<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />


<head>
<title> - myWeb - </title>
<link rel="shortcut icon" href="MY_WEB-LOGO/favicon.ico" type="image/x-icon"/>
<meta name="viewport" content="width=200, initial-scale=1">
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> 
<script src="jquery-1.6.2.min.js"></script> 

<!-- <link type='text/css' rel='stylesheet' href='Estilo.css'/>-->

</head>

<body style="background-image:url('BACKGROUNDS/layoutprinc.gif'); background-size:cover;background-repeat:no-repeat; background-attachment:fixed; height:100vh;" >
<div class="container container-fluid  ">
<div class="row">

<main class="container container-fluid col-xs-12 " > 
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
day = ' <b><tt>Ter&ccedil;a,</tt></b> '

else if(myday == 3)
day = ' <b><tt>Quarta,</tt></b> '

else if(myday == 4)
day = ' <b><tt>Quinta,</tt></b> '

else if(myday == 5)
day = ' <b><tt>Sexta,</tt></b> '

else if(myday == 6)
day = ' <b><tt>S&aacute;bado,</tt></b> '

if(mymonth == 0)
month = ' <b><tt>de Janeiro de</tt></b> '

else if(mymonth ==1)
month = '<b><tt> de Fevereiro de</tt></b> '

else if(mymonth ==2)
month = '<b><tt> de Mar&ccedil;o de</tt></b> '

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



year='<b><tt>2018</tt></b> '


document.write(day + '<font size=2>' + myweekday + '</font>' + month + year + ' - ' + '<font size=2>' + timeValue + '</font>')



</script>
</div>
<br/>

<body>
<div style="background-color:#CCCCCC; width:100%; height:88px; border-radius:12px; padding-top:4px;"  >
<!--<div class="container container-fluid col-xs-12 ">-->
<!--<div class="container container-fluid col-xs-1 "  id="faixaEsq" style="margin-left:-10px; position:absolute; float:left; background-image:url('BACKGROUNDS/faixaEsq.png');background-repeat:no-repeat;  width:2%; height:120px; 
 text-align:center;  background-size:100%  padding-top:30px; color:white; font-family:Tahoma, calibri, arial; text-transform:uppercase; "></div>
-->
<div class="container container-fluid col-xs-12 "  style="margin-left:-10px;  position:absolute; float:left;  width:96%; height:120px; 
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
</main>
</div><!--row-->



<div class="row">

<main class="container container-fluid col-xs-12 " > 

<br/>
<br/>
<?php
ini_set("default_charset","UTF-8");
?> 
<div style="background-color:white; border-radius:12px; width:100%; height:60px;"><p align="left"><img src="MY_WEB-LOGO/MyWeb.png" width="200" height="60" /></p></div>
<br/>
<br/>
</main>
</div><!--row-->






<div class="row">

<main class="container container-fluid col-xs-8 " > 
	
<form id='form1' name='form1' method='post' action='lembraSenha.php'>
  <table width='86%' border='0' align='center'>
    <tr>
      <td colspan='3'><div align='left'><strong>LEMBRAR SENHA </strong></div><br/><br/></td>
    </tr>
    <tr>
      <!--<td width='12%' ><span >Seu login:</span></td>-->
      <td width='20%' ><span >
        <label>
        <span >Seu login:<input name='login' type='text' id='login' placeholder='user@domain.com' /></span>
        </label>
      </span></td>
    </tr>
    <tr>
     
      <td >
      <br/><br/>
        <label>
        <br><p align='right'><input type='submit' name='Submit' value='Enviar' style='  width:215px;' />     </p>
    
        <p align='left' ><input type='button'  value='Voltar' onclick='history.go(-1)'  style='  width:215px;' /> </p>
      </label>
     </td>


    
     </tr>
  </table>

   </form>

    <br>
    <p align='right'><img src='BACKGROUNDS/Clov!System_2012_logo.png' width='120' height='60'/></p>
    <br>
  </main>
  </div><!--row-->
	</body>
	</html>



   

