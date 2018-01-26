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
$insereTema=@mysql_query("UPDATE _users SET background = '$tema' WHERE email LIKE'%$login%';",$conexao);
echo'<script>alert("Altera&ccedil;&atilde;o realizada com sucesso! Atualize sua p&aacute;gina para ver o resultado (tecla F5)."); history.go(-1); </script>';
}else{
echo'<script>alert("A altera&ccedil;&atilde;o n&atilde;o pode ser realizada."); history.go(-1);</script>';
}

?>
<!--<script language="javascript" src="AlteraTema.js">-->
<!--<button type="button" onclick="AlteraTema()">Voltar</button>-->
<!--<script>alert("Altera��o realizada com sucesso! Atualize sua p�gina para ver o resultado (tecla F5)."); history.go(-1);</script>-->