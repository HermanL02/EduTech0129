<?php
session_start();
require_once "db.php";

if (isset($_GET['complete'])) {
    $item = $_GET['complete'];
    if($item=="display"){
        $queryAll="select * from `notes`"; 
        $result = $dbconnection->query($queryAll);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $page = $_GET['page'];
                $slideNum = $page;
                if($row["SLIDES"]==$slideNum&&$row["STUNAME"]==$_SESSION["username"]){
                    $itemA = $row["STUNAME"];
                    echo "<div class=\"textb\">";
                    echo $row["TIMENOW"].' '.$row["CONTENT"].'<br>';
                    
                }   
            }
        }
    }else{
        $studentName = $_SESSION['username'];
        date_default_timezone_set('PRC');
        $hour = date('H');
        $minute = date('i');
        $second = date('s');
        $combinedTime = $hour.''.$minute.''.$second;
        $item = $_GET['complete'];//Content of the notes
        $page = $_GET['page'];
        $courseNum = "CS3481";
        $queryAll = "INSERT INTO `notes`(`STUNAME`, `TIMENOW`, `SLIDES`, `COURSENUM`, `CONTENT`) VALUES ('$studentName','$combinedTime','$page','$courseNum','$item')";
        echo $queryAll;
        $result = $dbconnection->query($queryAll);
        echo "1231231";
    }
}
?>