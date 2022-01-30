<?php 
    session_start();
    if($_SESSION['role']=="STUDENT"){
        header("Location: studentPresentation.php");
    }else{
        header("Location: teacherPresentation.php");
    }
?>