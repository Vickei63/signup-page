
<?php
    include("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="form">
        <h1>Sign up</h1>

        <form action="" method="post" name="form">
            <label for="">Username: </label><br><br>
            <input type="text" name="user" ><br><br>

            <label for="">Email: </label><br><br>
            <input type="email" name="email" ><br><br>

            <label for="">Password: </label><br><br>
            <input type="password" name="cpass" ><br><br>
            <label for="">Confirm password: </label><br><br>
            <input type="password" name="cpass" ><br><br>
            <hr><br><br>

            <input type="submit" value="Sign up" name="submit" id="submitBtn">

        </form>
    </div>
</body>
</html>