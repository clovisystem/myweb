
<?php


$conexao=mysqli_connect("localhost","root","","usuario");
//@mysql_select_db('usuario',$conexao);
$consulta=mysqli_query($conexao,"SELECT * FROM users");

//$usuarios=@mysql_query("SELECT * FROM users WHERE codigo >0;",$conexao);
//$j=@mysql_num_rows($usuarios);
//$usuarios=@mysql_fetch_array($usuarios);
//$usuarios=$usuarios["tituloPerfil"];

//$usuarios=@mysql_num_rows($usuarios);
//$usuarios=array($usuarios);
//$usuarios=@mysql_fetch_assoc($usuarios);


//while($row = mysql_fetch_array($usuarios)) {

	   
	  //echo $lista=$row['tituloPerfil'] . "<br />";
	
	  //}
	  
	  
	 while($retorno=mysqli_fetch_object($consulta)){
	 $usuarios=$retorno -> tituloPerfil;
     $arquivo = 'ListarPerfil.php';
	$destino = 'usuarios/'.$usuarios.'/index.php';
	$move = copy($arquivo, $destino);
	if($move){echo"movido";}else{echo"error";}
	}
	  
	//$resultado=@mysql_query("SELECT tituloPerfil FROM users ORDER BY  codigo DESC;",$conexao);
    //$quantos=@mysql_num_rows($resultado);
    //$i=0;
    
    //for($i==0;$i<$quantos;$i++)
    //{
     
  
    //  echo $USUARIO=@mysql_result($resultado,$i,tituloPerfil);
     
    // }
	  
	  
	//$usuarios=array($USUARIO);  
	//ECHO"  <BR/>";
	//echo $usuarios[0];
	
	
//COPIAR PARA CADERNO
	
//$arr=array("CLOVIS_JUNIOR","PAULO_CESAR","MELISSA_VIEIRA_SOUTO","RUI_COSTA_PEREIRA");
//$arr=array($USUARIO);
	
//foreach($arr as $pastas){
//$arquivo = 'index.php';
//$destino = 'usuarios/'.$pastas.'/BBB.php';
//$move = copy($arquivo, $destino);
//if($move){echo"movido";}else{echo"error";}
//} 



//for($j=0;$j<$usuarios;$j++){
//$arquivo_origem="ListarPerfil.php";
//$arquivo_substituto="usuarios/".$usuarios."/index.php";
//$arquivo_destino="usuarios/".$usuarios[0]."/INDEX.php";

//$copia=copy($arquivo_origem, $arquivo_destino);
//if($copia){echo"Arquivo copiado com sucesso!";}
//}
//echo $row;


?>