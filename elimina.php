<HTML>
<HEAD>
 <TITLE> - myWeb -</TITLE>
  <link rel="shortcut icon" href="MY_WEB-LOGO/favicon.ico" type="image/x-icon"/>
</HEAD>
<BODY>
<?
  include"based.php";
  $perfil=isset($_POST['perfil'])?$_POST['perfil']:null;
  $logado=isset($_POST['logado'])?$_POST['logado']:null;
  $login=isset($_GET['login'])?$_GET['login']:null;


  $elimina=@mysql_query("DELETE FROM $login WHERE contatos ='$_POST[perfil]';",$conexao);
  $elimina.=@mysql_query("DELETE FROM $perfil WHERE contatos = '$login';",$conexao);



  if($elimina){
  echo"<script>alert('Contato ".$_POST['perfil'].", eliminado com sucesso!'); history.go(-1);</script>";}
  else{
  echo"<script>alert('Contato ".$_POST['perfil'].", n&atilde;o pode ser eliminado!');  history.go(-1);</script>";}
?>
</BODY>
</HTML>
