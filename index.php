<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <h2>inserisci una frase</h2>
    <form action="badwords.php" method="POST">
        <input type="text" name="frase">
        <h2>inserisci una pparola da censurare</h2>
        <input type="text" name="badword">
        <button>invia</button>
    </form>
</body>

</html>