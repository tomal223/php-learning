<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="youtube-player.php" method="get">
        <label for="">Video Link</label><br>
        <input type="text" name="videoLink">
        <br>
        <br>
        <input type="submit">
        <br>
    </form>

    <?php

    $videoLink = $_GET["videoLink"];

    ?>

    <!-- <php if (isset($_GET["num1"]) && isset($_GET["num2"])) : ?>
        <php echo $_GET["num1"] + $_GET["num2"] ?>
    <php endif; ?> -->



    <div class="videoPlayer">
        <?= $videoLink ?>
    </div>




</body>

</html>