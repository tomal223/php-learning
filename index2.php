<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="index2.php" method="post">

        First Name: <input type="text" placeholder="First Name" name="name"> <br> <br>
        Age: <input type="text" placeholder="Age" name="age"> <br> <br>
        Password: <input type="password" placeholder="" name="password"> <br> <br>
        <!-- Last Name: <input type="text" placeholder="Last Name" name="Last Name"> <br> <br> -->
        <input type="submit">

    </form>
    
    <br>
    Your Name is : <?php echo $_POST["name"];
                    // echo $_GET["Last Name"]; 
                    ?> <br>
    Your Age is : <?php echo $_POST["age"];
                    // echo $_GET["Last Name"]; 
                    ?> <br>
    Your Password is : <?php echo $_POST["password"];
                        // echo $_GET["Last Name"]; 
                        ?> <br>






</body>

</html>