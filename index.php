<?php  

    $cookie_name = "session";

    if (isset($_COOKIE[$cookie_name]))
    {   
        header("Location: personal.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login/Register</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="login_style.css">
    </head>
    <body>
        <center><br><br><br><br><br><br><br>
        <h1 class="container">Login/Register</h1>
        <br><br><br><br>

            <div class="form">
                <form action="logreg.php" method="post" accept-charset="utf-8">
                    <label style = "position:relative; top: -15px; color:black;">Username: </label><input type="text" name="username" value="" placeholder="Username" required><br><br>
                    <label style = "position:relative; top: -15px; color:black;">Password: </label><input type="password" name="password" value="" placeholder="Password" required><br><br>
                    <input type="submit" name="login" value="Login" class="button">
                    <input type="submit" name="register" value="Register" class="button">
                </form>
            </div>
        </center>
    </body>
</html>