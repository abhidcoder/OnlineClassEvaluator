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
    <th style="color:MediumOrchid ; font-size:16pt">USN</th>
    <th style="color:MediumOrchid ; font-size:16pt">Name</th>
    <th style="color:MediumOrchid ; font-size:16pt">Total Score</th>
    <th style="color:MediumOrchid ; font-size:16pt">Total Count Of Attendance</th>
    <th style="color:MediumOrchid ; font-size:16pt">Grade</th>
    <th style="color:MediumOrchid ; font-size:16pt">Remarks</th>
    <th style="color:MediumOrchid ; font-size:16pt">Department</th>
    <th style="color:MediumOrchid ; font-size:16pt">Year</th>
    </tr>
    </thread>
<tbody>
<?php
error_reporting(0);
session_start();
$dept=$_SESSION['depar'];
$year=$_SESSION['yearrr'];
$host="localhost";
$user="root";
$password="";
$db="demo";
$link=mysqli_connect($host,$user,$password,$db);
$sql="SELECT c.usn as usnn,c.name as name,a.Remarks AS remark,b.total_attendance_count as count,(a.First+a.Second+a.Third) as total,c.dept as deptt,c.year as years,
(CASE WHEN (a.First+a.Second+a.Third)>= 225 THEN 'A' WHEN (a.First+a.Second+a.Third)>=200 THEN 'B' WHEN (a.First+a.Second+a.Third)>= 170 THEN 'C' ELSE 'FAIL' END )AS grade from students_login c,attendance_count b,marks_list a where a.usn=b.usn and a.usn=c.usn and a.dept='$dept' and b.dept='$dept' and c.dept='$dept' and a.year='$year' and b.year='$year' and c.year='$year' order by (a.First+a.Second+a.Third) desc";
$select=mysqli_query($link,$sql);
while($row=mysqli_fetch_assoc($select)){
    $sr=$row['usnn'];
    $name=$row['name'];
    $total=$row['total'];
    $grade=$row['grade'];
    $totalatten=$row['count'];
    $remarks=$row['remark'];
    $dept=$row['deptt'];
    $year=$row['years'];
    echo"<tr>";
   echo"<td>$sr</td>";
   echo"<td>$name</td>";
   echo"<td>$total</td>";
   echo"<td>$totalatten</td>";
   echo"<td>$grade</td>";
   echo"<td>$remarks</td>";
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
