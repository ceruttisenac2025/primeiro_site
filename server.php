<?php 
$port = 8000;
echo"Servidor PHP iniciado em http://localhophpst:$port\n";
exec("php -S localhost:$port -t public");
?>

//php server.php 