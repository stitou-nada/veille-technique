<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xml</title>
</head>
<body>
<?php
$xml = simplexml_load_file('index.xml');
echo "nom :" . $xml->nom . "<br>";
echo "prenom :" .$xml->prenom . "<br>";
echo "age:" . $xml->age;

?>
</body>
</html>
