<!DOCTYPE html>
<html lang="en">
<head>
 <!--<style> 
h1{ 
    color: red; 
    text-align: center; 
    text-shadow: 4px 4px 6px black;
      }
    
.centerp {
  margin-left: 5%;
  margin-right: 5%;
  margin-bottom: 10%;
  margin-top: 0%;
  text-align: center;
}

body{
background-image: url("http://www.mindfresh.in/wp-content/uploads/2016/10/medium_cartoon-bird-flying-in-the-sky-blue-sky-and-flying-birds.jpg");
background-repeat: no-repeat;
background-size: 100%; 
font-family: Abril Fatface; 
letter-spacing: 2px;
text-align: center;
}

</style>--> 
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width, intial-scale=1">
<title>Marks Sheet</title>
<br>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="table.css"> 
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Indie+Flower&display=swap" rel="stylesheet"> 
</head>
<body> 
<div class="centerp">
<div id="page-wrapper">
 <div class="container-fluid">
 <div class="row"> 
 <div class="col-lg-12">
<h1 class="page-header">Marks Sheet</h1>
<br>
<table class="table table-bordered table-hover table table-dark">
<thread>
<tr>
    <th style="color:MediumOrchid ; font-size:20pt">USN</th>
    <th style="color:MediumOrchid ; font-size:20pt">Name</th>
    <th style="color:MediumOrchid ; font-size:20pt">First</th>
    <th style="color:MediumOrchid ; font-size:20pt">Second</th>
    <th style="color:MediumOrchid ; font-size:20pt">Third</th>
    <th style="color:MediumOrchid ; font-size:20pt">Total</th>
    <th style="color:MediumOrchid ; font-size:20pt">Grade</th>
    <th style="color:MediumOrchid ; font-size:20pt">Remarks</th>
    </tr>
    </thread>
<tbody>
<?php
error_reporting(0);
session_start();
$host="localhost";
$user="root";
$password="";
$db="demo";
$dep=$_SESSION['depar'];
$link=mysqli_connect($host,$user,$password,$db);
$sql="SELECT usn,name,First,Second,Third,Remarks,(First+Second+Third) AS total,(CASE WHEN (First+Second+Third)>= 225 THEN 'A' WHEN (First+Second+Third)>=200 THEN 'B' WHEN (First+Second+Third)>= 170 THEN 'C' ELSE 'FAIL' END )AS grade FROM marks_list where dept='$dep'";
$result=mysqli_query($link,$sql);
while($row=mysqli_fetch_array($result)){
    $sr=$row['usn'];
    $name=$row['name'];
    $first=$row['First'];
    $second=$row['Second'];
    $third=$row['Third'];
    $tot=$row['total'];
    $tott=$row['grade'];
    $comments=$row['Remarks'];
    echo"<tr>";
   echo"<td>$sr</td>";
   echo"<td>$name</td>";
   echo"<td>$first</td>";
   echo"<td>$second</td>";
   echo"<td>$third</td>";
   echo"<td>$tot</td>";
 echo"<td>$tott</td>";
   echo"<td>$comments</td>";
echo"</tr>";
}
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>