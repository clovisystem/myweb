<?php
include"based.php";

$user=isset($_POST['usuario'])?$_POST['usuario']:null;;
$tabela=isset($_POST['tabela'])?$_POST['tabela']:null;;
$removeUser=@mysql_query("DELETE FROM users WHERE tituloPerfil='$user';",$conexao);
$removetabela=@mysql_query("DROP TABLE $tabela;",$conexao);











$pasta = "usuarios/".$user."/";

 if(is_dir($pasta))
 {
  $diretorio = dir($pasta);

  while($arquivo = $diretorio->read())
  {
   if(($arquivo != '.') && ($arquivo != '..'))
   {
    unlink($pasta.$arquivo);
    //echo 'Arquivo '.$arquivo.' foi apagado com sucesso. <br />';
   }
  }

  $diretorio->close();
 }
 else
 {
  echo 'A pasta não existe.';
 }

//------------------------------------------------------------------------------------

 $pasta1 = "arquivos/".$tabela."/";

 if(is_dir($pasta1))
 {
  $diretorio1 = dir($pasta1);

  while($arquivo1 = $diretorio1->read())
  {
   if(($arquivo1 != '.') && ($arquivo1 != '..'))
   {
    unlink($pasta1.$arquivo1);
    //echo 'Arquivo '.$arquivo.' foi apagado com sucesso. <br />';
   }
  }

  $diretorio1->close();
 }
 else
 {
  echo 'A pasta não existe.';
 }



$removepasta=rmdir("usuarios/".$user);
$removeimagem=rmdir("arquivos/".$tabela); 
$removeimagembanco=@mysql_query("DELETE FROM image WHERE tituloPerfil='$user';",$conexao);
$removemensagem=@mysql_query("DELETE FROM mensagens WHERE sessao='$user';",$conexao);


if($removeUser){
echo "<script>alert('Sua conta foi excluída.');location.href='index.php';</script>";
}else{
echo "<script>alert('Sua conta não pôde ser excluída.');history.go(-1);</script>";
}


?>
