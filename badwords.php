<?php 
$frase = $_POST['frase'];
str_replace('ciao','***', $frase);
$sos = str_replace('ciao','***', $frase);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h2>la tua frase:</h2>
    <p><?php echo $frase ?></p>
    <h2>la tua frase censurata:</h2>
    <p><?php echo $sos ?></p>
</body>
</html>