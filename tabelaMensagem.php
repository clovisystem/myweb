<?
include"based.php";

$mensagem=@mysql_query("CREATE TABLE mensagens(
id int(11) not null primary key auto_increment,
comentario varchar(255),
postar varchar(255),
sessao varchar(255));",$conexao);

if($mensagem)
{ echo"<script>alert('tabela mensagens criada');</script>"; }
else
{ echo"<script>alert('falha');</script>"; }

?>