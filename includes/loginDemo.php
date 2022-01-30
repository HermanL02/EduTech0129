<?php
    session_start();
    session_regenerate_id(true); //create new session and delete old session
    // Create session variable when session is active
    $_SESSION['username'] = $_POST['name'];
    $_SESSION['role']= $_POST['role'];
    echo $_SESSION['username'];
    echo $_SESSION['role'];
    header("Location: main.php");
    
?>