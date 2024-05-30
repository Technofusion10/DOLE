<?php

declare(strict_types=1);

function signup_inputs(){
            if(isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["error_signup"]["username_taken"]) ){
                echo '<label for="username">Username</label>';
                echo '<input type="text" name="username" placeholder="username" value="' . $_SESSION["signup_data"]["username"] . '">';
            }else{
                echo '<label for="username">Username</label>';
                echo '<input type="text" name="username" placeholder="username">';
            }

            echo '<label for="password">Password</label>';
            echo '<input type="password" name="pwd" placeholder="password">';

            if(isset($_SESSION["signup_data"]["email"]) && isset($_SESSION["error_signup"]["email_used"]) && isset($_SESSION["error_signup"]["invalid_email"]) ){
                echo '<label for="email">Email</label>';
                echo '<input type="text" name="email" placeholder="email" value="' . $_SESSION["signup_data"]["email"] . '" >';
            }else{
                echo '<label for="email">Email</label>';
                echo '<input type="text" name="email" placeholder="email">';
            }

}


function check_signup_errors(){
    if(isset($_SESSION["errors_signup"])){
        $errors = $_SESSION["errors_signup"];

        echo "<br>";

        foreach($errors as $error){
            echo "<p class='form-error'>" . $error ."</p>";
        }

        unset($_SESSION["errors_signup"]);
    }else if(isset($_GET["signup"]) && $_GET["signup"] === "success"){
        echo "<br>";
        echo "<p class='form-success'>Signup Success!</p>";
    }
}

