<?php
    require_once "includes/config_session.inc.php";
    require_once "includes/signup_view.inc.php";
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
        <form action="includes/signup.inc.php" method="POST">
            <h1>Signup</h1>
            
            <?php
            signup_inputs();
            ?>
            
            <button type="submit" class="button">Signup</button><br>
            <p class="ask">Click login if already have an account? <a href="index.php" class="login">Login</a></p>
        </form>  

        <?php
        check_signup_errors();
        ?>

    </section>  
    
</body>
</html>