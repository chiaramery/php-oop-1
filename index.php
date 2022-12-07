<?php
require_once __DIR__ . "/Models/Movie.php";

$movies = [
    new Movie("The Truman Show", "Peter Weir", "1998", "Jim Carrey"),
    new Movie("Ace Ventura – L'acchiappanimali", "Tom Shadyac", "1994", "Jim Carrey"),
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>

    <section>
        <h4>Movies:</h4>
        <ul> <?php foreach ($movies as $movie) { ?>
                <li>
                    <p>Title: <?php echo $movie->title ?></p>
                    <p>Director by: <?php echo $movie->director ?></p>
                    <p>Year of release: <?php echo $movie->year ?></p>
                    <p>Main Character: <?php echo $movie->mainCharacter ?></p>
                </li>

            <?php } ?>
        </ul>
    </section>
</body>

</html>