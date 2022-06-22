<?php

$partite = [

    [
        'squadraCasa' => 'Scapoli',
        'squadraOspite' => 'Ammogliati',
        'puntiCasa' => '2',
        'puntiOspite' => '69',
    ],
    [
        'squadraCasa' => 'Angeli',
        'squadraOspite' => 'Demoni',
        'puntiCasa' => '3',
        'puntiOspite' => '666',
    ],
    [
        'squadraCasa' => 'Pippe al sugo',
        'squadraOspite' => 'Lanciatori di coriandoli',
        'puntiCasa' => '0',
        'puntiOspite' => '0',
    ],
];

for ($i=0; $i < count($partite); $i++) { 

    echo "<p>{$partite[$i]['squadraCasa']} - {$partite[$i]['squadraOspite']} | {$partite[$i]['puntiCasa']} - {$partite[$i]['puntiOspite']}</p>";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- 

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 

-->
    
</body>
</html>