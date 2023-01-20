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

    $items = [
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
        ],

    ];

    ?>



    <?php

    function filter($items, $fn)
    {

        $filteredData = [];


        foreach ($items as $item) {
            if ($fn($item)) {
                $filteredData[] = $item;
            }
        }
        ;


        return $filteredData;
    }
    ;

    $filterByAuthor = filter($items, function ($book) {

        return $book['author'] == 'Zonayed Ahmed';
    });

    $filterByCategory = filter($items, function ($book) {

        return $book['category'] == 'Programming';
    });


    ?>


    <h1>
        Recommended Books
    </h1> <br><br>

    <ul>

        <?php foreach ($filterByAuthor as $bookData): ?>
            <li>

                <a href="<?= $bookData['purchaseUrl'] ?>">
                    <?= $bookData['name'] . "<br>" ?>
                </a>
                <ul>
                    <li>
                        <?= $bookData['author'] . "<br>" ?>
                    </li>
                    <li>
                        <?= $bookData['category'] . "<br>" ?>
                    </li>
                    <li>
                        <?= $bookData['address']['city'] . "<br>" ?>
                    </li>
                </ul>

            </li>
        <?php endforeach ?>

    </ul>


</body>

</html>