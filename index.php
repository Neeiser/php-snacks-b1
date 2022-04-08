<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack PHP 1</title>
</head>
<body>
    <section class="snack-first" style="text-align: center;">
    <h1>Snack 1</h1>
        <?php
            $array_partita= [
                ['squadre' =>[
                    'casa' => 'Olimpia Milano',
                    'ospite' => 'Cantù',
                    ],
                ],
                ['punteggio' =>[
                    'casa' => 55,
                    'ospite' => 60,
                    ],
                ],
            ];

            for ($i = 0; $i < count($array_partita); $i++) {?>
                
                <span><?= $array_partita[$i]['squadre']['casa'] ?></span>
                <span><?= $array_partita[$i]['squadre']['ospite'] ?></span>
                <span><?= $array_partita[$i]['punteggio']['casa'] ?></span>
                <span><?= $array_partita[$i]['punteggio']['ospite'] ?></span>
                
                
            <?}?>
        
        <hr>
    </section>
    
</body>
</html>

<!-- 
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 
-->