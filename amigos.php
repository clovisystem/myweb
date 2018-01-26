<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<META HTTP-EQUIV="REFRESH" >
<?php
//$login=$_POST["c_email"];
//$senha=$_POST["c_senha"];
//echo'<meta http-equiv="refresh" content="1"; url="ListarPerfil.php?login=$login&senha=$senha">';
?>

<HEAD>
 <TITLE> - myWeb - </TITLE>


<link type="text/css" rel="stylesheet" href="Estilo.css"/>
  <link type="text/css" rel="stylesheet" href="EstiloFonte.css"/>
  <link rel="shortcut icon" href="MY_WEB-LOGO/favicon.ico" type="image/x-icon"/>
  <script language="javascript" src="jquery-1.6.2.min.js"></script>
  <!--<script language="javascript" src="AlteraTema.js"></script>-->
  <script language="javascript" src="Jquery_Cycle\cycle.all.js"></script>
  </head>
<?php $background="#CCCCCC";
echo'<BODY id="corpo" bgcolor="'.$background.'" onload="cor()">'; 

include "based.php";

$email=$_GET['id'];
$perfil=$_GET['login'];
$perfil=strtolower($perfil);
echo 'Amigos de'.' '.str_replace("_"," ",$perfil);
echo'<br/>';
echo'<button name="voltar" value="voltar" onclick="history.go(-1);">Voltar</button>';
//echo $email;



$cor=@mysql_query("SELECT coalesce(background,'#B5C0C3') as background FROM _users WHERE email LIKE '$email';",$conexao); 
//$cor=@msql_query($cor)or die(@mysql_error());
$cor=@mysql_fetch_array($cor);
$cor=$cor["background"];


echo'<table width="100%" bgcolor="'.$cor.'" align="left" id="body" style="bordercolor:transparent;">
<tr>
<td width="100%" >';

$exibeContato=@mysql_query("SELECT * FROM ".strtolower($perfil).";",$conexao);
$exibeFoto=@mysql_query("SELECT imagem FROM ".$perfil.";",$conexao);
$fetchImagem=@mysql_fetch_array($exibeFoto);

$linhasContato=@mysql_num_rows($exibeContato);

$limiteContato=@mysql_query("SELECT * FROM ".strtolower($perfil)." LIMIT 1000;",$conexao);

$limiteContato=@mysql_num_rows($limiteContato);

$exibeContatoMenos=@mysql_query("SELECT * FROM ".strtolower($perfil)." WHERE contatos <> '$perfil';",$conexao);
$linhasContatoMenos=@mysql_num_rows($exibeContatoMenos);
$LinhasContato1=@mysql_fetch_array($exibeContato);
$LinhasContato2=$LinhasContato1["contatos"];

//if($nullLinhaContato['contatos']==0){echo ' ';}
//else{


if($linhasContato>1){

    
    echo'<div class="contatos"><br/><a name="contatos"><b>MEUS CONTATOS</a></div><div id="contador" style="float:left; position:relative; margin-top:-45px; margin-left:160px;
    padding:6px 0px 0px 16px;">
    <font color="white" >'.$linhasContatoMenos.' amigos</font></div></b>
    <br/><br/><br/><br/><br/><br/><br/><br/>
    <form name="form2" action="" method="get">';





 //$i=0;
 $j=1;

 //for($i==0;$i<$linhasContato;$i++){
 //echo'<div id="segmento">';
 //echo "\t";
 for($j==1;$j<$limiteContato;$j++){
    
   $contact=@mysql_result($exibeContato,$j,contatos);
   $contact=str_replace("_"," ",$contact);
   //if($contact=$perfil1){echo "";}
   
    echo '<div class="botao"><a href="linkContatos.php?sessao='.@mysql_result($exibeContato,$j,contatos).'&login='.$perfil.'">';
    $meusContatos=@mysql_result($exibeContato,$j,contatos);
    //$sql = "SELECT imagem FROM  $perfil" ; 
    //$limite = @mysql_query($sql);
    //$sql = @mysql_fetch_array($limite);
    //$arquivo = $sql['arquivo'];
    echo'<div class="imagemContato"><img src="'.@mysql_result($exibeContato,$j,imagem).'" width="60"  height="80" /></div>';
    //src="arquivos/97b77915013e0a68dea8c323be0983d4.jpg"
    echo'<div class="texto">'.strtoupper($contact);
    echo'</a></div></div>';
    //echo'<div class="imagem"><img src='.@mysql_result($exibeContato,$j,imagem);
    //echo'/> </div>';
    //while($exibeFoto1=@mysql_fetch_array($exibeFoto)){
    //$foto=$exibeFoto1["imagem"];
    //echo '<img src='.$foto.' width="150"  height="180" border="2" bordercolor="#FF6600"/>';
    echo'</div>
    ';
    //}
    echo'&nbsp;&nbsp;';
    echo'<input type="hidden" name="perfil" value="'; echo $perfil; echo'" />';
   
   
     echo'</div>';
     
     
     
     
     
     
     
    }
    
    //}//fecha i
    
   //}
   /*
   //$meusContatos=@mysql_query("SELECT contatos FROM clovis jr;",$conexao);
   echo'<div style="float:left; position:absolute; margin-top:-96px;">';
     $anivDia=@mysql_query("SELECT dia FROM users WHERE tituloPerfil =".$meusContatos.";",$conexao);
     $anivMes=@mysql_query("SELECT mes FROM users WHERE tituloPerfil =".$meusContatos.";",$conexao);
     //$anivAno=@mysql_query("SELECT ano FROM users WHERE tituloPerfil =".$perfil.";",$conexao);
     $anivContato=@mysql_query("SELECT tituloPerfil FROM users WHERE tituloPerfil =".$meusContatos.";",$conexao);
     $perfil=str_replace(" ","_",$perfil);
     $anivContato=@mysql_query("Select contatos  From ".strtolower($perfil)." Where dia = ".date('d')." And mes = ".date('n').";",$conexao);
     $fetchAniversario=@mysql_fetch_array($anivContato);
     $fetchAniversario=$fetchAniversario['contatos'];
     //$anoAtual=date(Y);
     $diaAtual=date("d");
     $mesAtual=date("n");
     $dataAtual=$diaAtual."/".$mesAtual; //echo $dataAtual;
     $anivPerfil=$anivDia."/".$anivMes;
     //$meusContatos=@mysql_query("SELECT tituloPerfil,".$perfil." FROM users WHERE tituloPerfil.dia=".$diaAtual." AND tituloPerfil.mes=".$mesAtual." AND ".$perfil.".contatos;",$conexao);
     if($anivContato){
     echo"<br/><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;<font color='green'><b>Hoje e aniversario de ".str_replace("_"," ",$fetchAniversario);
     }
   echo'</b></font></div>';
   */
   
   
   

   
   echo'</div></form>';
   echo'</div>';
   }
   else{
   echo'não tem amigos.';
   }

echo '</td>
      </tr>
      <table>';
?>