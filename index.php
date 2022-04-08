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
        <?php
            $name = $_GET['name'];
            $mail = $_GET['mail'];
            $age = $_GET['age'];
        ?>
            <form action="" method="get">
                Name: <input style="display: block;" type="text" name="name" id="name">
                Mail: <input style="display: block;" type="text" name="mail" id="mail">
                Age: <input style="display: block;" type="text" name="age" id="age">
                <input type="submit">
            </form>

    </section>
    
</body>
</html>

<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->