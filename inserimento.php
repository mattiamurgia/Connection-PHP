<?php

require 'connessioneDB.php';


$nome = $_POST['nome'] ?? '';
$codice = $_POST['codice'] ?? '';
$marca = $_POST['marca'] ?? '';
$prezzo = $_POST['prezzo'] ?? '';
$descrizione = $_POST['descrizione'] ?? '';
$so = $_POST['so'] ?? '';
$risoluzione = $_POST['risoluzione'] ?? '';



$sql = ("INSERT INTO `products` (name, code, brand, price, description, so, resolution) VALUES ('$nome', '$codice', '$marca', '$prezzo', '$descrizione', '$so', '$risoluzione')");


if ($connessione->query($sql) === true) {
   $ultimo_elemento = $connessione-> insert_id;
   echo "Prodotto inserito con successo, il suo id è: " . $ultimo_elemento;}
   else {"Errore durante inserimento prodotto" . $connessione->errno;}
   


$connessione->close();
?>