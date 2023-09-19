<?php
require_once __DIR__ . '/classes/Movie.php';

$movie1 = new Movie('interstellar', 'Sci-Fi');
$movie1->description = "In un futuro non precisato, un drastico cambiamento climatico colpisce duramente l'agricoltura. Il granturco è l'unica coltivazione ancora in grado di crescere ed un gruppo di scienziati è intenzionato ad attraversare lo spazio per trovare nuovi luoghi adatti a coltivarlo.";
$movie1->release_date = ' 26-10-2014';
$movie1->poster_path = 'imgs/interstellar.jpg';

$movie2 = new Movie('Spider-Man 3', 'Action');
$movie2->description = "La vita di Peter Parker sembra finalmente perfetta: l'illusione svanisce quando si ritrova ad affrontare l'Uomo Sabbia, Venom, New Goblin e i lati più oscuri della sua personalità.";
$movie2->release_date = ' 01-05-2007';
$movie2->poster_path = 'imgs/spider-man3.jpg';
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">

    <title>php-oop-1</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container py-5">
        <div class="row row-cols-2">
            <div class="col">
                <div class="card">
                    <img src="<?php echo $movie1->poster_path; ?>" class="card-img-top" alt="image not found">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $movie1->title; ?></h2>
                        <p class="card-text">
                            <?php {
                                echo $movie1->getGenreDate();
                            } ?>
                        </p>
                        <p class="card-text"><?php echo $movie1->description; ?></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="<?php echo $movie2->poster_path; ?>" class="card-img-top" alt="image not found">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $movie2->title; ?></h2>
                        <p class="card-text">
                            <?php {
                                echo $movie2->getGenreDate();
                            } ?>
                        </p>
                        <p class="card-text"><?php echo $movie2->description; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>