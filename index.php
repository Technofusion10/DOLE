<?php
    require_once "includes/config_session.inc.php";
    require_once "includes/login_view.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <section class="wrapper-main">
        <form action="includes/login.inc.php" method="POST">
            <h1>Login</h1>
            
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="username">

            <label for="password">Password</label>
            <input type="password" name="pwd" placeholder="password">
            
            <button type="submit" class="button">Login</button><br>
            <p class="ask">Click here to register! <a href="signup.php" class="signup">Register</a></p>
        </form>  
        <?php
        check_login_erros();
        ?>
    </section>  
    
</body>
</html>