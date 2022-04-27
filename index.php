<?php
//pour lier à la bdd de la connection
include "db.php";


//prépare la requete d'insertion
// $pdoState = $objetPdo->prepare('INSERT INTO stickflock VALUES (NULL, :image, :description)');
$pdoState = $objetPdo->prepare('SELECT * FROM stickflock ');



//execution de la requète
$executeIsOk = $pdoState->execute();
//je lie les marqueurs
//le type de valeur est une chaine de caractère : PDO::PARAM_STR
// $pdoState->bindValue(':image', $_GET['image'], PDO::PARAM_STR);
// $pdoState->bindValue(':description', $_GET['description'], PDO::PARAM_STR);
// $pdoState->bindValue(':email', $_POST['email'], PDO::PARAM_STR);


//récuperation des résultats
$sticks = $pdoState->fetchAll();
// var_dump($sticks);

//execute la requete
// $insertIsOk = $pdoState->execute();
// if ($insertIsOk) {
//     $name = 'Merci belle réussite !  Clique pour voir les projets Php';
// } else {
//     $name = 'echec';
// };
$imagespath = "images/";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stick et Flock 69</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <header class="header">
    </header>

    <main>
        <h1 class="text-center my-5">Stickers et Flocages 69 Vous souhaite la Bienvenue !</h1>
        <!-- <h1 class="text-center m-5">Bienvenue sur Stick et Flock 69</h1> -->
        <div class="container">
            <div class="p-1 d-flex flex-wrap text-center">
                <?php foreach ($sticks as $stick) : ?>
                    <div class="card-body">
                        <img src=" <?= $stick['image'] ?>" alt="" width="200px" height="200px">
                        <p class="card-text">Description : <?= $stick['description'] ?></p>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>

    <footer>
        <h1 class="text-center">Vous avez des questions ou des suggestions 😉 ...</h1>
        <h6 class="text-center">
            <?php echo '<a href="https://www.facebook.com/stickflock/" > cliquez ici, Stickers et Flocages 69 </a>'; ?>
            <!-- <a href="https://www.facebook.com/stickermania69/">cliquez ici, Stickers et Flocages 69</a> -->
        </h6>

        <p class="text-center">
            et laissez moi un message, je serais ravie de pouvoir affiner votre demande
        </p>
        </template>
    </footer>
</body>

</html>

<style>
    .header {
        /* background-image: url("../assets/headerimg.jpg"); */
        background-image: url('<?php echo "images/headerimg2.jpg" ?>');
        /* background-image: url("../images/headerimg.jpg"); */
        background-size: cover;
        background-position: center;
        padding-bottom: 300px;
        padding-top: 10px;
        height: 10px;
    }
</style>