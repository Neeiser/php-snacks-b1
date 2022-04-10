<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack PHP 1</title>
</head>
<body>

    <!-- SNACK 1 -->
    <section id="snack-1st" style="text-align: center;">
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

    <!-- SNACK 2 -->
    <section id="snack-2nd">

        <form action="" method="get">
            Name: <input style="display: block;" type="text" name="name" id="name">
            Mail: <input style="display: block;" type="text" name="mail" id="mail">
            Age: <input style="display: block;" type="text" name="age" id="age">
            <input type="submit">
        </form>
        
        <?php

            if(strlen($_GET['name']) > 3 && strpos($_GET['mail'], '.', 1) !==false && strpos($_GET['mail'], '@', 1) !==false && is_numeric($_GET['age']) !== false){
                echo "<p>Accesso riuscito</p>";
            } else {
                echo "<p>Accesso negato</p>";
            };
        ?>

        <hr>
    </section>

    <!-- SNACK 4 -->
    <section id="snack-4th">
        <?php
            for($i=0; $i < 15; $i++){
                $random_numb=rand(1, 100);
                if(in_array($num, $arrNum) !== true){
                    $array_numbers="$random_numb";
                    echo '<pre>';
                    var_dump($array_numbers);
                    echo '</pre>';
                }
            }
        ?>
    </section>
    
    <!-- Snack 4
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
</body>
</html>