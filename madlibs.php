<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="madlibs.php" method="get">
        <label for="">Color</label><br>
        <input type="text" name="color">
        <br>
        <br>
        <label for="">Plural Noun</label><br>
        <input type="text" name="pluralNoun">
        <br>
        <br>`
        <label for="">Celebrity</label><br>
        <input type="text" name="celebrity">
        <br>
        <br>
        <input type="submit">
        <br>
        <br>
    </form>

    <?php if (isset($_GET["color"]) && isset($_GET["pluralNoun"])) : ?>
        <?php

        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $celebrity = $_GET["celebrity"];

        echo "Roses are $color <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $celebrity <br>";
        
        ?>
    <?php endif; ?>

    <!-- <php if (isset($_GET["num1"]) && isset($_GET["num2"])) : ?>
        <php echo $_GET["num1"] + $_GET["num2"] ?>
    <php endif; ?> -->





</body>

</html>