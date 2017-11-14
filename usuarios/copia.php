
<?php
include"based.php";

//$usuarios=@mysql_query("SELECT * FROM users WHERE codigo >0;",$conexao);
//$j=@mysql_num_rows($usuarios);
//$usuarios=@mysql_fetch_array($usuarios);
//$usuarios=$usuarios["tituloPerfil"];
//echo $usuarios;
//$usuarios=@mysql_num_rows($usuarios);
//$usuarios=array($usuarios);
//$usuarios=@mysql_fetch_assoc($usuarios);


//while($row = mysql_fetch_array($usuarios)) {

	   
	  //echo $lista=$row['tituloPerfil'] . "<br />";
	
	  //}


	  
	$usuarios=@mysql_query("SELECT tituloPerfil FROM users ORDER BY  codigo DESC;",$conexao);
    $quantos=@mysql_num_rows($usuarios);
    $i=0;
    
    for($i==0;$i<=$quantos;$i++)
    {
     
  
      echo $usuarios1=@mysql_result($usuarios,$i,tituloPerfil);
     
     }
	  
	  
	  //$usuarios1=@mysql_fetch_assoc($usuarios);
	  
	  


//for($j=0;$j<$usuarios;$j++){
$arquivo_origem="ListarPerfil.php";
//$arquivo_substituto="usuarios/".$usuarios."/index.php";
$arquivo_destino=../"g.php";
$copia=copy($arquivo_origem, $arquivo_destino);
if($copia){echo"Arquivo copiado com sucesso!";}
//}
//echo $row;


?>