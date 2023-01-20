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

    <h1>Recommended Books</h1>

    <ul>
        <?php

        $books = [
            [
                "bookName" => "Book number 1",
                "authorName" => "Tomal1",
                "purchaseUrl" => "https://www.google.com",
                "address" => "Bheramara",
                "releaseYear" => "2004",
                "city" => "Kushtia1",
                "zipCode" => "7040",
            ],
            [
                "bookName" => "Book number 2",
                "authorName" => "Tomal2",
                "purchaseUrl" => "https://www.google.com",
                "address" => "Bheramara2",
                "releaseYear" => "2005",
                "city" => "Kushtia2",
                "zipCode" => "7040",
            ],
            [
                "bookName" => "Book number 3",
                "authorName" => "Tomal3",
                "purchaseUrl" => "https://www.google.com",
                "address" => "Bheramara",
                "releaseYear" => "2004",
                "city" => "Kushtia3",
                "zipCode" => "7040",
            ],
            [
                "bookName" => "Book number 4",
                "authorName" => "Tomal4",
                "purchaseUrl" => "https://www.google.com",
                "address" => "Bheramara",
                "releaseYear" => "2001",
                "city" => "Kushtia4",
                "zipCode" => "7040",
            ],

        ];



        $filteredBooks = array_filter($books, function ($value) {
            // return $value['bookName'] == 'Book number 4' || $value['authorName' == "Tomal4"];
            return $value['releaseYear'] <= '2005';
        });

 ?>

 
        <?php foreach ($filteredBooks as $book): ?>
            <li> <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['bookName']; ?>
                </a> <br>
                <small>
                    <?= $book['authorName'] ?>
                </small>
            </li>
        <?php endforeach ?>

    </ul>

</body>`

</html>