<!DOCTYPE html>
<html>
<HEAD>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="#">  
</HEAD>
<BODY>
<div class="container-fluids text-center font-weight-bold border border-danger">
<?php 
session_start();
$host="localhost";
$user="root";
$password="";
$db="demo";
$link=mysqli_connect($host,$user,$password,$db);
if(isset($_GET['submitt'])){
$_SESSION['urll']=$_GET['urll'];
}
$val=$_SESSION['urll'];
if(isset($_POST['submit'])){
    $uname=$_POST['usn'];
    $password=$_POST['password'];
    $dept=$_POST['dept'];
    $year=$_POST['year'];
    $sql="SELECT * FROM students_login WHERE usn = '$uname' AND password= '$password' and year='$year' and dept='$dept'";
    $result = mysqli_query($link,$sql);
    $check = mysqli_fetch_array($result);
    if(isset($check)){
    echo"<br>";
    echo"<br>";
    $query="insert into attendance_sheet(usn,dept,year) values('$uname','$dept','$year')";
    mysqli_query($link,$query);
    echo"Welcome ".$uname."!"."<br>";
    echo"If that is not you then<br>";
    echo"Please login again with correct details<br>";
    echo"If that is you then please <br>";
    echo "<a href='".$val."'><br>______CLICK HERE TO CONTINUE______</a>";
    exit;
        }
    else{
    header("Location: http://localhost/complete_project/studenterror.php"); 
    exit;
}
}
?>
</div>
</BODY>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width, intial-scale=1">
<title>Login Page</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="memberstyle.css"> 
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Indie+Flower&display=swap" rel="stylesheet"> 
</head>
<body>  
     <h1><marquee><span>NOTICE:</span> This section is only for the students of RGIT</marquee></h1>
     <br>
     <h2>WELCOME  TO  STUDENTS  LOGIN  AREA</h2>
         <br>
         <br>
     <div class="container-fluids">
     <div class="col-lg-6">
      <form action ="linkcode.php" method="post">
     <div class="form-group">
    <label for="usn">USN:</label>
    <input type ="text" class="form-control" id="usn"  name="usn" placeholder="University Seat Number" minlength="3" >
   </div>
    <br>
   <div class="form-group">
    <label for="password" >PASSWORD:</label>
    <input type ="password" class="form-control" id="password" name="password" placeholder="password">
    </div>
    <br>
    <div class="form-group">
    <label for="departments">YEAR:</label> 
        <select name="year" id="departments" class="form-control">
        <option>FIRST</option>
        <option>SECOND</option>
        <option>THIRD</option>
        <option>FOURTH</option>
        </select>
    </div>
    <br>
    <div class="form-group">
    <label for="department">DEPARTMENT:</label> 
        <select name="dept" id="department" class="form-control">
        <option>CSE</option>
        <option>ECE</option>
        <option>BME</option>
        <option>EEE</option>
        </select>
    </div>
    <br>
    <div class="form-group">
    <input class="btn btn-primary" type="submit" class="form-control" name="submit">
    </div>
</form>
</div>
</div>
</body>
</html>