<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Courses</title>
    
    
    
    <meta http-equiv="refresh" content="60">

        <link rel="stylesheet" href="http://rakan.esy.es/style.css">

    
    
    
  </head>

  <body>

    <html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Table Style</title>
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
</head>

<body>



<div class="table-title">
<h3>Course Information</h3>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-left">Course Name</th>
<th class="text-left">Lab</th>
<th class="text-left">State</th>
<th class="text-left">Day</th>
<th class="text-left">Time</th>
</tr>
</thead>

<?php


include("db_config.php");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

   $jd = cal_to_jd(CAL_GREGORIAN,date("m"),date("d"),date("Y"));
$day =jddayofweek($jd,1); 
 
$query = "SELECT id, course_name, course_lab, course_state, course_days, course_time FROM course_info where course_days = '$day' ORDER BY course_time DESC";
$connect = mysqli_connect(hostname, username,password,databaseName);
$result = mysqli_query($connect, $query);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

echo"<tbody class='table-hover'><tr>";
echo"<td class='text-left'>".$row["course_name"]."</td>";
echo"<td class='text-left'>".$row["course_lab"]."</td>";
echo"<td class='text-left'>".$row["course_state"]."</td>";
echo"<td class='text-left'>".$row["course_days"]."</td>";
echo"<td class='text-left'>".$row["course_time"]."</td>";
echo"</tr></tbody>";
   

       
    }
} else {
    echo "0 results";
}






?>


</table>
  

  </body>
    
    
    
    
    
  </body>
</html>