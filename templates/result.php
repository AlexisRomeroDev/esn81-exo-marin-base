<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<main>

    <p>Nous avons reçu votre nouvelle position :</p>
    <p class="latitude">Latitude : <?=$position->latitude;?></p>
    <p class="longitude">Longitude : <?=$position->longitude;?></p>
    <p class="hemisphere">Hémisphère : <?=$position->isNorth() ? 'Nord' : 'Sud';?></p>

    <a href="index.php">Envoyer votre position</a>

</main>

</body>
</html>