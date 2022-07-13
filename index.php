<?php
require_once "classi/Movie.php";
/* $titoloFilm = key_exists("title", $_GET) ? $_GET["title"] : "";
$autore = key_exists("author", $_GET) ? $_GET["author"] : ""; */
$databaseFilm = [
    [
        "title" => "Il pianeta delle scimmie",
        "description" => "Ci sono un casino di scimmie, tante, tatissime scimmie!",
        "author" => "Silvia Canepa",
        "img" => "https://pad.mymovies.it/filmclub/2010/04/037/locandina.jpg"
    ],
    [
        "title" => "La scoperta dell'acqua calda",
        "description" => "3 magnifici ragazzi scoprono l'acqua calda, in mezzo ad un giume di acqua calda",
        "author" => "Biagio Ferro",
        "img" => "https://itcsrl.biz/wp-content/uploads/2017/07/acqua-calda-sanitaria-1-750x500.jpg"
    ],
    [
        "title" => "La vendetta di Florian",
        "description" => "Florian si ribella alla classe lanciando righe di codice php alla velocità della luce",
        "author" => "Florian Leica",
        "img" => "https://m.media-amazon.com/images/I/81TKzIJd3xL._SL1325_.jpg"
    ]
];




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.css' integrity='sha512-F5fn88UDJWd0T1GwpnIpbuFuSxCgXNnJhIihkiWeqYUyLt3oPUaYzL774VjL7eGj8ktZCZQS//txAxgokiz1Lw==' crossorigin='anonymous' />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
</head>

<body>
    <div class="container py-5">
        <div class="row">
            <?php foreach ($databaseFilm as $film) {
                $print = new Movie($film["title"], $film["description"], $film["author"]);

            ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $film["img"]?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $print->getTitle() ?></h5>
                            <p class="card-text"><?php echo $print->getDescription() ?></p>
                            <p class="card-text"><?php echo $print->getAuthor() ?></p>
                            
                        </div>
                    </div>
                    
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>