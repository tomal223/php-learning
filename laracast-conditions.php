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

    $bookName = "Himu";
    $read = true;

    if ($read) {
        $message  = "You have  read the book $bookName.";
    } else {
        $message = "You have NOT read the  book $bookName.";
    }

    ?>
 

    <h1>
        <?php echo $message . "<br>"; ?>
        <?= $message ?>
    </h1>





</body>

</html>