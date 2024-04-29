<?php 
$frase = $_POST['frase'];
$badword = $_POST['badword'];
$sos = str_replace($badword,'***', $frase);
$lunghezza = strlen ($frase);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h2>la lunghezza della frase é di <?php echo $lunghezza ?> caratteri</h2>
    <h2>la tua frase:</h2>
    <p><?php echo $frase ?></p>
    <h2>la tua frase censurata:</h2>
    <p><?php echo $sos ?></p>
</body>
</html>