<!DOCTYPE html>
<html lang="en">
<head>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width, intial-scale=1">
<title>Attendance Page</title>
<br>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="table.css"> 
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Indie+Flower&display=swap" rel="stylesheet"> 
</head>
<body>  
 <div id="page-wrapper">
 <div class="container-fluid">
 <div class="row"> 
 <div class="col-lg-12">
<h1 class="page-header">Students Attendance Sheet</h1>
<br>
<table class="table table-bordered table-hover table table-dark">
<thread>
<tr>
    <th style="color:MediumOrchid ; font-size:20pt">Sr No.</th>
    <th style="color:MediumOrchid ; font-size:20pt">Total Attendance</th>
    <th style="color:MediumOrchid ; font-size:20pt">Department</th>
    <th style="color:MediumOrchid ; font-size:20pt">Year</th>
    </tr>
    </thread>
<tbody>
<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="demo";
$dep=$_SESSION['depar'];
$link=mysqli_connect($host,$user,$password,$db);
$sql="select * from attendance_count where dept='$dep'";
$select=mysqli_query($link,$sql);
while($row=mysqli_fetch_assoc($select)){
    $sr=$row['usn'];
    $name=$row['total_attendance_count'];
    $dept=$row['dept'];
    $year=$row['year'];
    echo"<tr>";
   echo"<td>$sr</td>";
   echo"<td>$name</td>";
    echo"<td>$dept</td>";
    echo"<td>$year</td>";
echo"</tr>";
}
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</body>
</html>