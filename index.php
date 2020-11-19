<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exophp3P3</title>
</head>
<body>
<?php
// La fonction array permet de créer un array
$months = array ('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre');

for ($numero = 0; $numero < 12; $numero++)
{
    echo $months[$numero] . '<br />'; // "boucle" qui affichera tout les mois.
}
?>
</body>
</html>