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

    $itemData = [

        [
            "bookName" => "Book number 1",
            "authorName" => "Tomal1",
            "address" => "Bheramara",
            "city" => "Kushtia1",
            "zipCode" => "7040",
        ],
        [
            "bookName" => "Book number 2",
            "authorName" => "Tomal2",
            "address" => "Bheramara2",
            "city" => "Kushtia2",
            "zipCode" => "7040",
        ],
        [
            "bookName" => "Book number 3",
            "authorName" => "Tomal3",
            "address" => "Bheramara",
            "city" => "Kushtia3",
            "zipCode" => "7040",
        ],
        [
            "bookName" => "Book number 4",
            "authorName" => "Tomal4",
            "address" => "Bheramara",
            "city" => "Kushtia4",
            "zipCode" => "7040",
        ],

    ];




   function  filter($dataList, $fn) {
        $filterData = [];

        foreach ($dataList as $itemlist) {
            if ($fn($itemlist)) {
                $filterData[] = $itemlist;
            }
        };


        return $filterData;
    };



    // $filterData1 = $filter($itemData, 'authorName', 'Tomal1');

    $filterData2 = $filter($itemData, function ($data) {

        return $data['authorName'] == 'Tomal1' || $data['zipCode'] == 7040 && $data['address'] == "Bheramara2";
    });



    ?>

    <h1>Book List</h1>


    <ul>
        <?php foreach ($filterData2 as $bookList) : ?>
            <li>
                <a href=""><?= $bookList['bookName']; ?></a>
                <ul>
                    <li><?= $bookList['authorName']; ?></li>
                    <li><?= $bookList['address']; ?></li>
                    <li><?= $bookList['zipCode']; ?></li>
                    <li><?= $bookList['city']; ?></li>
                </ul>
            </li>
        <?php endforeach ?>
    </ul>



</body>

</html>