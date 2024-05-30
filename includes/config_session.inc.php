<?php

ini_set('session.use_only_cookies',1);
ini_set('session.use_strict_mode',1);

session_set_cookie_params([
    'lifetime' =>1800,
    'domain' =>'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true
]);

session_start();

if(isset($_SESSION["user_id"])){
    if(!isset($_SESSION["last_regenarion"])){
        regenerate_session_id_loggedin();
    }else{
        $interval = 60 * 30;
        if(time() - $_SESSION["last_regeneration"] >= $interval){
            regenerate_session_id_loggedin();
        }
    }
}else{
    if(!isset($_SESSION["last_regenarion"])){
        regenerate_session_id();
    }else{
        $interval = 60 * 30;
        if(time() - $_SESSION["last_regeneration"] >= $interval){
            regenerate_session_id();
        }
    }
}


function regenerate_session_id(){
    session_regenerate_id();
    $_SESSION["last_regeneration"] = time();
}



function regenerate_session_id_loggedin() {
    // Ensure the session is started
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    // Regenerate the session ID and keep session data
    session_regenerate_id(true);

    // Store the user ID and current session ID
    $userId = $_SESSION["user_id"];
    $_SESSION["last_regeneration"] = time();

    // Optionally, you can log the new session ID for tracking or debugging
    $newSessionId = session_id();
    error_log("New session ID: " . $newSessionId . " for user ID: " . $userId);
}
