<html>
<head>
<link rel="stylesheet" type="text/css" href="contador.css"/>
</head>
<body bgcolor="yellow">




<?php
include "based.php";

$consulta=@mysql_query("SELECT * FROM users WHERE  tituloPerfil LIKE '%c%';",$conexao);
$linhas=@mysql_fetch_array($consulta);
$i[20];
$contador=$linhas[1];
$contar=$linhas++;
for($i=0;$i < $linhas;$i++){
echo "<font color='blue'>  ". $contar;
echo "<font color='blue'> ". mysql_result($consulta,$i,tituloPerfil);
echo "  <br/></font>";
}





$contador=$linhas[1];

$contar=$linhas[1]+1;

$atualiza=@mysql_qery("UPDATE users SET codigo='$contar' Where
codigo='1';",$conexao);

$iconsulta=@mysql_query("SELECT*FROM users WHERE codigo='1';",$conexao);
$itotal=@mysql_query($iconsulta) or die(mysql_error());

$ilinhas=@mysql_fetch_array($itotal);


if($linhas>100 and ($linhas<1000)){


echo"  <font color='blue'> 1- ".$contar;
echo "</font>";
}

else{ echo "falha";}
 ?>



</body>
</html>
