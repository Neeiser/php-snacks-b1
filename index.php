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
        <h1>Snack 2</h1>
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
        <h1>Snack 4</h1>
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
        <hr>
    </section>

    <!-- SNACK 5 -->
    <section id="snack-5th">
        <h1>Snack 5</h1>
            <h3>Testo intero</h3>
            <?php
                $text='Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed dolor magni eligendi impedit recusandae, quasi, atque a ullam blanditiis est animi veniam perferendis sunt officia id minima dicta consequatur placeat. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed dolor magni eligendi impedit recusandae, quasi, atque a ullam blanditiis est animi veniam perferendis sunt officia id minima dicta consequatur placeat.';
                echo $text;
            ?>
            <h3>Testo spezzato</h3>
            <?php
                $text_exploded=explode('.', $text);
                for($i=0; $i < count($text_exploded); $i++){
                    echo '<p>' . $text_exploded[$i] . '.' . '</p>';
                }
                /* echo '<pre>';
                var_dump($text_exploded);
                echo '</pre>'; */
            ?>
    </section>
</body>
</html>

<style>
    body{
        height: 2000px;
    }
</style>