<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php

    $books = [

        "Fullstack Develpoment - Connecting The Dots",
        "Hate Kolome JavaScript",
        "Learn With Tomal"

    ]


    ?>

    <h1>
        Recommended Books
    </h1> <br><br>

    <ul>
        <!-- <li>Fullstack Develpoment - Connecting The Dots</li>
        <li>Hate Kolome JavaScript</li>
        <li>Learn With Tomal </li> -->
        <?php

        foreach ($books as $bookName) {
            echo "<li>$bookName</li>";
        }

        ?>
        <?php foreach ($books as $i) : ?>
            <li>
                <?= $i ?>
            </li>
        <?php endforeach ?>


    </ul>




</body>

</html>