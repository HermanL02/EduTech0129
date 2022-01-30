<?php 
    require_once 'db.php';
    $courseName = "CS3481";
    $rection = $_GET['reaction'];
    $year = date('Y');
    $month = date('m');
    $day = date('d');
    $combinedDate = $year.''.$month.''.$day;
    $query = "INSERT INTO `reactions`(`RECTION`, `COURSE`, `DATE`) VALUES ('$rection','$courseName','$combinedDate')";
    $result = $dbconnection->query($query);


?>