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
        [
            "name" => "Fullstack Develpoment - Connecting The Dots",
            "author" => "HM Nayem",
            "category" => "Programming",
            "address" => [
                "streetAddress" => "Bheramara",
                "city" => "Kushtia",
                "zipCode" => 7040,
            ],
            "purchaseUrl" => "https://rokomari.com",
        ],
        [
            "name" => "Hate Kolome JavaScript",
            "author" => "Zonayed Ahmed",
            "category" => "JavaScript",
            "address" => [
                "streetAddress" => "Bheramara",
                "city" => "Kushtia",
                "zipCode" => 7040,
            ],
            "purchaseUrl" => "https://js.zonayed.me",
        ],
        [
            "name" => "Rich dad Poor dad",
            "author" => "Robert Kiyosaki and Sharon Lechter",
            "category" => "Financial Literacy",
            "address" => [
                "streetAddress" => "Bheramara",
                "city" => "Kushtia",
                "zipCode" => 7040,
            ],
            "purchaseUrl" => "https://rokomaari.com",
        ]

    ]


    ?>
    <form action="laracast-arrays-2.php" method="post">
        <input type="text" name="authorName"> <br>
        <input type="text" name="cityName"> <br>
        <input type="submit">
    </form> <br><br>
    <h1>
        Recommended Books
    </h1> <br><br>

    <ul>

        <?php foreach ($books as $bookData) : ?>
            <?php if ($bookData['author'] == $_POST['authorName'] && $bookData['address']['city'] == $_POST['cityName']) : ?>
                <li>

                    <a href="<?= $bookData['purchaseUrl'] ?>"><?= $bookData['name'] . "<br>" ?></a>
                    <ul>
                        <li> <?= $bookData['author'] . "<br>" ?></li>
                        <li>
                            <?= $bookData['category'] . "<br>" ?>
                        </li>
                        <li>
                            <?= $bookData['address']['streetAddress'] . ", " .  $bookData['address']['zipCode']  . "<br>" ?>
                            <?= $bookData['address']['city'] . "<br>" ?>
                        </li>
                    </ul>

                </li>
            <?php endif ?>
        <?php endforeach ?>

    </ul>




</body>

</html>