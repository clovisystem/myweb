<HTML>
<HEAD>
 <TITLE> - myWeb -</TITLE>
 <link rel="shortcut icon" href="MY_WEB-LOGO/favicon.ico" type="image/x-icon"/>
</HEAD>
<BODY>
<?

 //@session_start();
    //$_SESSION['c_email'];
   //$_SESSION['c_senha'];

  include"based.php";
  $perfil=$_GET['arquivo'];



  $eliminaFoto=@mysql_query("DELETE FROM _image WHERE arquivo LIKE'%$perfil%';",$conexao);



  if($eliminaFoto){
  echo"<script>alert('Foto, eliminada com sucesso!'); history.go(-1);</script>";}
  else{
  echo"<script>alert('Foto, n&atilde;o pode ser eliminada!');  history.go(-1);</script>";}
?>
</BODY>
</HTML>
