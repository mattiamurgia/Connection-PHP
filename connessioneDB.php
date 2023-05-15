<?php 
$host = 'localhost';
$user = "root";
$db_user = "esamephp2022";
$port= '8889';
$password = "root";

$connessione = new mysqli($host,$user, $password,$db_user);

  if($connessione === false) {
        die("Errore di connessione: " . $mysql_connector->connect_error);}
    echo "Connessione avvenuta con successo: " . $connessione->host_info."\n"; ?>