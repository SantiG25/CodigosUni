<html>

<body>

<?php

$host = "localhost";
$port = "5432";
$user = "postgres";
$pass = "admin";
$dbname = "postgres";


$conectado = pg_connect("host=$host port=$port user=$user password=$pass dbname=$dbname");

?>

</body>
</html>