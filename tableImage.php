
<?php
  require "based.php";
$table=@mysql_query("CREATE TABLE image(
  id integer(11),
  arquivo varchar(255),
  nome varchar(255));",$conexao);
if($table)
{echo'Tabela criada';}
else
{echo'falha';}
?>

