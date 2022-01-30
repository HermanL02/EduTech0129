<?php
 session_start();
if (isset($_GET['hour'])) {
    $dbconnection = null;
	require_once "db.php";
    $hour = $_GET['hour'];
    $minute = $_GET['minute'];
    $second = $_GET['second'];
    $time = $hour.''.$minute.''.$second;
    $STU = $_SESSION['username'];
    $COURSENUM = "CS3481";
    $insert = "INSERT INTO `record`(`TIMENOW`, `STUNAME`, `COURSENUM`) VALUES ('$time','$STU','$COURSENUM')";
    $result = $dbconnection->query($insert);   
    if($result){
        echo "<div class=\"attendence\">";
        echo "Attendance Checked";
        echo "</div>";
    }else{
        echo "cannot insert";
    }
}

?>

