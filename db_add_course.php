<?php
 
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    require "db_config.php";
    createDoctor();
 }
 
 function createDoctor(){
    
    
    global $connect;
    
    $name = $_POST["course_name"];
    $time = $_POST["course_time"];
    $lab = $_POST["course_lab"];
    $state = $_POST["course_state"];
    $days = $_POST["course_days"];
    $dr_id= $_POST["dr_id"];
    
    $query = "insert into course_info(course_name,course_time,course_lab,course_state,course_days,dr_id) values ('$name', '$time', '$lab', '$state', '$days', '$dr_id');";
    mysqli_query($connect, $query) or die (mysqli_errno($connect));
    mysqli_close($connect);
    
 }
     

?>