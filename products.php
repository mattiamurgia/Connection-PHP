<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>

<body>
    <?php
require 'connessioneDB.php';

$link = 'inserimento.php';

$query= "SELECT * FROM products";


if (!$connessione->query($query)) {
  echo "Errore della query: " . $connessione->error;}


$risultatoquery= mysqli_query($connessione,$query);

$numerodeicampi = mysqli_num_fields($risultatoquery);

echo "<table><tr>";
echo "<th>NAME</th><th>CODE</th> <th>BRAND</th> <th>PRICE</th> <th>DESCRIPTION</th> <th>SO</th> <th>RESOLUTION</th>";
echo "</tr>";


while($riga = mysqli_fetch_assoc($risultatoquery))
{  $riga['name'];
   $riga['code'];
   $riga['brand'];
   $riga['price'];
   $riga['description'];
   $riga['so'];
   $riga['resolution'];
 
   echo  "<tr><td> ".$riga['name']."</td><td>".$riga['code']."</td><td> ".$riga['brand']."</td><td> ".$riga['price']."</td><td> ".$riga['description']."</td><td> ".$riga['so']."</td><td> ".$riga['resolution']."</td></tr>";}
echo "</table>";

$connessione->close();?>
</body>

</html>