<?php include 'connessioneDB.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esame PHP</title>
</head>

<body>
    <form action="insert.php" method="POST">
        <p>Nome: <input type="text" name="nome"></p>
        <p>Codice: <input type="text" name="codice"></p>
        <p>Marca: <input type="text" name="marca"></p>
        <p>Prezzo: <input type="text" name="prezzo"></p>
        <p>Descrizione: <input type="text" name="descrizione"></p>
        <p>Sistema Operativo: <input type="text" name="so"></p>
        <p>Risoluzione: <input type="text" name="risoluzione"></p>

        <p><input type="submit" value="invio"></p>
        <a href="products.php"><input type="button" value="prodotti"></a>




        <?php include 'inserimento.php';?>

    </form>
</body>

</html>