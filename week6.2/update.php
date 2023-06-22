<?php
    $host = 'localhost:3307';
    $db   = 'producten';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try 
    {
        $pdo = new PDO($dsn, $user, $pass, $options);
        echo "Connectie gemaakt!" . "<br>";
    } 
    catch (\PDOException $e) 
    {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }

    if( isset($_POST['knopje'])) {
        echo "er wordt op het knopje gedrukt";
        $product_naam = $_POST['product_naam'];
        $prijs_per_stuk = $_POST['prijs_per_stuk'];
        $omschrijving = $_POST['omschrijving'];
       
        $sql = "UPDATE winkel SET product_naam=?, prijs_per_stuk=?, omschrijving=? WHERE product_code=9";
        $pdo->prepare($sql)->execute([$product_naam, $prijs_per_stuk, $omschrijving]);

        //$result=$pdo->prepare($query);

       // $data=array($product_naam , $prijs_per_stuk , $omschrijving);

       //$result->execute($data); 
    } else {
        echo "op het knopje wordt nog niet gedrukt" . "<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<form action="" method="post">
 <label for="product_naam">product_naam</label><br>
    <input type="text" name="product_naam" valeu="product_naam">

    <br>

    <label for="prijs_per_stuk">prijs_per_stuk</label><br>
    <input type="text" name="prijs_per_stuk" valeu="prijs_per_stuk">

    <br>

    <label for="omschrijving">omschrijving</label><br>
    <input type="text" name="omschrijving" valeu="omschrijving">

    <br><br>
   
    <input type="submit" name="knopje">
</form>
</body>
</html>