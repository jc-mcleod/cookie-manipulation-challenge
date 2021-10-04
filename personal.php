<head>
    <title>Personal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login_style.css">
</head>

<?php
    $cookie_name = "session";
    if (isset($_COOKIE[$cookie_name]))
    {
        $cookie_value = str_rot13(base64_decode($_COOKIE[$cookie_name]));

        echo "<br><br><br><center><h1>Welcome to your personal area, $cookie_value!</h1></center>";

        if (strtolower($cookie_value) == "admin"){
            
            echo "<br><br><br>";
            echo "<center><h2>flag{'c00k13_m4n1pul4t10n'}</h2></center>";
        }

        echo "<div class='topcorner'><a href='logout.php'>Logout</a></div>";
    }
    else
    {
        echo  "<center><h1>You are not logged in!</h1><br><h3><a href='index.php'>Home<a></h3</center>";
    }

    ?>
