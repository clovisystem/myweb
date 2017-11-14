
<?php

include "based.php";


$arquivo_origem = "ListarPerfil.php";
$arquivo_destino = "usuarios/$AP.php";

copy($arquivo_origem, $arquivo_destino);

?>