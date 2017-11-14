<html>
<head>
<title> - myWeb - </title>
<link rel="stylesheet" type="text/css" href="estilo.css"/>
<link rel="shortcut icon" href="MY_WEB-LOGO/favicon.ico" type="image/x-icon"/>
</head>
<body>
<?php
include"based.php";

if((empty($_POST['NovoPerfil']))||(empty($_POST['NovoPerfilSobrenome']))){
echo"<script>alert('Você deixou um campo em branco!'); history.go(-1);</script>";
}

//$mudar=isset($_POST['mudar'])?$_POST['mudar']:null;
$novoPerfil=isset($_POST['NovoPerfil'])?$_POST['NovoPerfil']:null;
$novoPerfil=str_replace(" ","_",$novoPerfil);
$novoPerfilSobrenome=isset($_POST['NovoPerfilSobrenome'])?$_POST['NovoPerfilSobrenome']:null;
$novoPerfilSobrenome=str_replace(" ","_",$novoPerfilSobrenome);
$novoPerfilCompleto=strtolower($novoPerfil.'_'.$novoPerfilSobrenome);
//$novoPerfil=str_replace(" ","_",$novoPerfil);


//$novoPerfil1=str_replace(" ","_",$novoPerfil);
$novoPerfilCompleto1=strtolower($novoPerfil.'_'.$novoPerfilSobrenome);
$novoPerfilCompletoMaiusc=strtoupper($novoPerfilCompleto1);
//$novoPerfil1=strtoupper($novoPerfil);
//$novoPerfil1=str_replace(" ","_",$novoPerfil1);

$Perfil=$_GET['titulo'];
$PerfilMaiusc=strtoupper($Perfil);

//$conta=@mysql_query("SELECT contatos FROM $novoPerfil WHERE contatos='$novoPerfil';",$conexao); 





$alteraTabela=@mysql_query("RENAME TABLE $Perfil To $novoPerfilCompleto;", $conexao);
$alteraContato=@mysql_query("UPDATE $novoPerfilCompleto SET contatos='$novoPerfilCompleto' WHERE codigo=1;",$conexao);	
$alteraNome=@mysql_query("UPDATE users SET tituloPerfil='$novoPerfilCompletoMaiusc' WHERE tituloPerfil ='".strtoupper($Perfil)."';",$conexao);		
  
  if($alteraTabela){
  echo"<script>alert('Contato ".str_replace("_"," ",$novoPerfilCompleto).", atualizado com sucesso!'); history.go(-2);</script>";}
  else{
  echo"<script>alert('Contato ".str_replace("_"," ",$novoPerfilCompleto).", não pode ser atualizado!');  history.go(-2);</script>";}
  
  
  
 ?>
 </body>
 </html>