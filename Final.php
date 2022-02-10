<!DOCTYPE html>
<html lang="en">
<head>
<style> 
.abhii{
    font-family: Abril Fatface; 
    margin-left: 70%;
    margin-bottom: 0%;
    margin-top: -4%;
        
    }
.abb{
  margin-left: 0%;
  margin-bottom: 0%;
  margin-top: 0%;
  font-family: Abril Fatface;    
    }
.abhi{
    font-family: Abril Fatface; 
    margin-left: 6%;
    margin-bottom: 0%;
    margin-top: 3%;
        
    }
.cnet {
  margin-left: 33%;
  margin-bottom: 0%;
  margin-top: 5%;
  font-family: Abril Fatface; 
}
.aks {
    margin-left: 15%;  
    }

body{
background-image: url("http://www.mindfresh.in/wp-content/uploads/2016/10/medium_cartoon-bird-flying-in-the-sky-blue-sky-and-flying-birds.jpg");
background-repeat: no-repeat;
background-size: 100%; 
font-family: Abril Fatface; 
letter-spacing: 2px;
text-align: center;
}
</style> 
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width, intial-scale=1">
<title>ATTENDANCE</title>
<br>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="#"> 
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Indie+Flower&display=swap" rel="stylesheet"> 
</head>
<body> 
<span>
<div class="abhi">
        <button class="btn-outline-dark btn-lg"><a target="_blank" href="welcomepage.php" style="text-decoration: none;">Open Main Page</a></button></div>
<div class="abhii">
        <button class="btn-outline-danger btn-lg"><a target="_blank" href="finaltable.php" style="text-decoration: none;">Click Here To View The Sheet</a></button></div></span>
<br>
<br>
<div class="cnet">
<div class="form-group container-fluids col-lg-10">
  <form action ="final.php" method="post">
    <div class="form-group container-fluids col-lg-6">
    <label for="name"><h4>Enter the USN:</h4></label>
    <input type ="text" class="form-control" id="eusn"  name="usnn" placeholder="University Seat Number" minlength="1" >
    <br>
    <br>
    <h4>Attendance Count:</h4>
     <input type ="text" class="form-control" id="ac"  name="ac" placeholder="Total Count Of Attendance" minlength="1" >
   </div>
    <br>
    <div class="aks">
    <div class="form-group col-lg-6">
    <input class="btn btn-primary " type="submit" class="form-control" name="submit">
    </div>
    </div>
</form>
</div>
</div>
</body>
</html>
<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="demo";
$link=mysqli_connect($host,$user,$password,$db);
if(isset($_POST['submit'])){
$usn=$_POST['usnn'];
$sqll="select * from attendance_count where usn='$usn'";
$select=mysqli_query($link,$sqll);
if(mysqli_num_rows($select)>0){
    $value=$_POST['ac'];
    $sql="update attendance_count set total_attendance_count='$value' where usn='$usn'";
    mysqli_query($link,$sql);
    echo '<script>alert("Changes made successfully")</script>'; 
    echo '<script>window.location= "final.php"</script>';
}
else
{
  echo '<script>alert("Please Enter the Valid USN")</script>'; 
  echo '<script>window.location= "final.php"</script>';
}
var_dump(isset($check));
}
?>