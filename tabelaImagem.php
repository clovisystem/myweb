<?
include"based.php";

$imagem=@mysql_query("CREATE TABLE image(
id int(11) auto_increment primary key not null,
arquivo varchar(255) binary,
nome varchar(255),
tituloPerfil  varchar(255));",$conexao);
if($imagem)
{ echo"<script>alert('tabela image criada');</script>"; }
else
{ echo"<script>alert('falha');</script>"; }

?>
