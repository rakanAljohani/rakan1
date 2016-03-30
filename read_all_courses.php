<?php
include("db_config.php");

// array for JSON response
$response = array();

$id = $_GET['id'];
$query  = "SELECT * FROM course_info where dr_id like '$id'";
$connect = mysqli_connect(hostname, username,password,databaseName);
$result = mysqli_query($connect, $query);



// get all courses  from course_info table


if (mysqli_num_rows($result) > 0) {
  
    $response["courses"] = array();
    //$row = mysqli_fetch_assoc($result);
   // $name = $row["name"];
   // echo $name;

    while ($row = $row = mysqli_fetch_assoc($result)) {
            // temp user array
            $item = array();
            $item["id"] = $row["id"];
            $item["name"] = $row["course_name"];
            $item["lab"] = $row["course_lab"];
            $item["state"] = $row["course_state"];
            $item["time"] = $row["course_time"];
            $item["days"] = $row["course_days"];
        
            // push ordered items into response array 
            array_push($response["courses"], $item);
           }
      // success
     $response["success"] = 1;
}
else {
    // order is empty 
      $response["success"] = 0;
      $response["message"] = "No Items Found";
}
// echoing JSON response
echo json_encode($response);

?>