<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<HEAD>
 <TITLE> - myWeb - </TITLE>
 <link type="text/css" rel="stylesheet" href="Estilo.css"/>
 <link rel="shortcut icon" href="MY_WEB-LOGO/favicon.ico" type="image/x-icon"/>
 </HEAD>
 <BODY  bgcolor='#CCCCCC' id='corpo'>
 
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

 <p align="left"><img src="MY_WEB-LOGO/MyWeb.png" width="200" height="60" /></p>
    <br>
    <br>
<?php
include"based.php";

// @session_start();
    //$_SESSION['c_email'];
    //$_SESSION['c_senha'];


$perfil=$_GET['id'];

$perfil=strtolower($perfil);





$sql0 = "SELECT imagem FROM $perfil WHERE contatos='$perfil'";
$limite0 = @mysql_query("$sql0");
while($sql0 = @mysql_fetch_array ($limite0)){
$arquivo0 = $sql0['imagem'];
echo'<div style="text-align:top; background:#CCCCCC; float:left; position:relative; padding:4px 4px 4px 4px;">Foto Principal
&nbsp;&nbsp;
<br/>';
echo'<a href='.$arquivo0.'>
<img src='.$arquivo0.' width="150"  height="180" border="2" bordercolor="#FF6600"/></a></div>';


}







$perfilMaiusc=strtoupper($perfil);

$localizaContato=@mysql_query("SELECT email FROM users WHERE tituloPerfil LIKE'%$perfilMaiusc%';",$conexao);
echo'<form method="POST" enctype="multipart/form-data" action="" > ';


echo'Foto :<input name="arquivo" type="file" id="arquivo"  value="Escolher arquivo"/>
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

echo '<input type="submit" name="Submit" value="Enviar Foto" />
 <br/>';

echo'</form></div></td></tr>';









error_reporting(0);
ini_set("display_errors",0);

if ($_FILES["arquivo"] != "") {
$arquivo = $_FILES["arquivo"];
$arquivo=str_replace(" ","_",$arquivo);

$pasta_dir = "arquivos/";//diretorio dos arquivos
//se nao existir a pasta ele cria uma


if(!file_exists($pasta_dir)){
mkdir($pasta_dir);

}

$arquivo_nome = $pasta_dir . $arquivo["name"];

// Faz o upload da imagem
move_uploaded_file($arquivo["tmp_name"], $arquivo_nome);



//conecta no banco

$nome = $_POST['nome'];
$tituloPerfil=$_POST['tituloPerfil'];
$tituloPerfilMin=strtolower($tituloPerfil);



$incluImagem1 = "UPDATE $tituloPerfilMin SET imagem='$arquivo_nome' WHERE contatos='$tituloPerfilMin'";
$inserir1=@mysql_query( $incluImagem1 )or die (mysql_error());


mysql_close();//fecha conexão







?>
<?php
echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head><title> - webystem - </title>
<style type='text/css'>
 #Email{text-transform:lowercase;}
 #Estado{text-transform:uppercase;}
 #body{font-family:tahoma; padding:21px;}
 #celula{padding:10px;}
 #celula1{padding:16px;}
 #Proper{text-transform:capitalize;}
 #corpo{padding:30px; font-family:tahoma;}
</style></head>
<body bgcolor='#CCCCCC' id='corpo'>

<center><font size='3'>Foto principal atualizada com sucesso";
//echo "</center><br/>";
//echo  "<img src='$arquivo_nome' width='250'><br/>$nome<br/> <br/>
echo"<center><form method='post' enctype='multipart/form-data' action=''>
<input type='button' name='sair' value='Voltar' onclick='history.go(-2)'/>
</form></a></center>
</body>
</html>";




}




 ?>
     <br>
    <p align="right"><img src="BACKGROUNDS/Clov!System_2012_logo.png" width="120" height="60"/></p>
    <br>
 </BODY>
</HTML>


