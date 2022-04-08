<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack PHP 1</title>
</head>
<body>
    <section class="snack first">
        <?php
            $array_partita= [
                ['casa' =>[
                    'squadra' => 'Olimpia Milano',
                    'punteggio' => 55,
                    ],
                ],
                ['ospite' =>[
                    'squadra' => 'Cantù',
                    'punteggio' => 60,
                    ],
                ],
            ];

            for ($i = 0; $i < count($array_partita); $i++) { ?>
                
                <span><?= $array_partita[$i]['casa']['squadra']; ?></span>
                <span><?= $array_partita[$i]['ospite']['squadra']; ?></span>
                <span><?= $array_partita[$i]['casa']['punteggio']; ?></span>
                <span><?= $array_partita[$i]['ospite']['punteggio']; ?></span>
                
                <?
            }
        ?>
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