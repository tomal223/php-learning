<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="calculator.php" method="get">
        <input type="number" name="num1">
        <br>
        <br>
        <input type="number" name="num2">
        <br>
        <br>
        <input type="submit">
        <br>
        <br>
    </form>

    The Answer is:


    <?php if (isset($_GET["num1"]) && isset($_GET["num2"])) : ?>
        <?php echo $_GET["num1"] + $_GET["num2"] ?>
    <?php endif; ?>




    
</body>

</html>