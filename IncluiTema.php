<HTML>
<HEAD>
 <TITLE> - myWeb - </TITLE>
 <link type="text/css" rel="stylesheet" href="Estilo.css"/>
 <link rel="shortcut icon" href="MY_WEB-LOGO/favicon.ico" type="image/x-icon"/>
 <script language="javascript" src="AlteraTema.js"></script>
</HEAD>
<BODY bgcolor="#CCCCCC" id="corpo">

<?php
include"based.php";
$tema=isset($_POST["tema"])?$_POST["tema"]:null;
$login=isset($_POST["emailPerfil"])?$_POST["emailPerfil"]:null;
if($tema){
$insereTema=@mysql_query("UPDATE users SET background = '$tema' WHERE email LIKE'%$login%';",$conexao);
echo'<script>alert("Alteraç&atilde;o realizada com sucesso! Atualize sua p&aacute;gina para ver o resultado (tecla F5)."); history.go(-1); </script>';
}else{
echo'<script>alert("A alteraç&atilde;o n&atilde;o pôde ser realizada."); history.go(-1);</script>';
}

?>
<!--<script language="javascript" src="AlteraTema.js">-->
<!--<button type="button" onclick="AlteraTema()">Voltar</button>-->
<!--<script>alert("Alteração realizada com sucesso! Atualize sua página para ver o resultado (tecla F5)."); history.go(-1);</script>-->