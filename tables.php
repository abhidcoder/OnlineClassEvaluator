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
<h1 class="page-header">Students Attendance Login Information</h1>
<br>
<table class="table table-bordered table-hover table table-dark">
<thread>
<tr>
    <th style="color:MediumOrchid ; font-size:20pt">Sr No.</th>
    <th style="color:MediumOrchid ;font-size:20pt">USN</th>
    <th style="color:MediumOrchid ;font-size:20pt">Department</th>
    <th style="color:MediumOrchid ;font-size:20pt">Year</th>
    <th style="color:MediumOrchid ;font-size:20pt">Login Time</th>
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
if(isset($_SESSION['startt']) and isset($_SESSION['start'])){
    $start=$_SESSION['startt'];
    $end=$_SESSION['start'];
    $year=$_SESSION['yearr'];
    if(isset($start) and isset($end) and isset($year)){
    $sql="select * from attendance_sheet inner join students_login on attendance_sheet.usn=students_login.usn group by attendance_sheet.usn having time >= '$start' and time <= '$end' and attendance_sheet.dept='$dep' and attendance_sheet.year='$year'";
    $start=NULL;
    $end=NULL;
    $dep=NULL;
    $year=NULL;
    //$sql="select * from attendance_sheet where time >= '$start' and time <= '$end' and year='$year'";
    }
    else
    {
    $sql="select * from attendance_sheet where dept='$dep'"; 
    }
}
else{
    $sql="select * from attendance_sheet where dept='$dep'";
}
$select=mysqli_query($link,$sql);
while($row=mysqli_fetch_assoc($select)){
    $sr=$row['Sr_no'];
    $name=$row['usn'];
    $usn=$row['dept'];
    $time=$row['year'];
    $dep=$row['time'];
    echo"<tr>";
   echo"<td>$sr</td>";
   echo"<td>$name</td>";
   echo"<td>$usn</td>";
   echo"<td>$time</td>";
   echo"<td>$dep</td>";
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