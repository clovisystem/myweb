
<?php
  include "based.php";
  $user=@mysql_query("CREATE TABLE users(
  codigo integer primary key auto_increment,
  tituloPerfil varchar(20),
  email varchar(36),
  senha varchar(20),
  estado varchar(2),
  cidade varchar(40),
  dia integer,
  mes varchar,
  ano integer,
  atividades varchar(255),
  hobby varchar(255),
  textoPerfil varchar(255),
  objetivo varchar(255),

  id varchar(255));",$conexao);

  if($user)
  {
  echo 'A tabela foi criada';
  }
  else
  {
  echo 'Erro';
  }

?>

