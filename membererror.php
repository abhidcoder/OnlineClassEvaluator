<?php 
session_start();
$host="localhost";
$user="root";
$password="";
$db="demo";
$link=mysqli_connect($host,$user,$password,$db);
if(isset($_POST['submit'])){
    session_start();
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $department=$_POST['dept'];
    $_SESSION['depar']=$_POST['dept'];
    $sql="SELECT * FROM user_login WHERE user_id = '$uname' AND password='$password' and dept='$department'";
    $result = mysqli_query($link,$sql);
    $check = mysqli_fetch_array($result);
    if(isset($check)){
    $_SESSION['namess']=$uname;
    header("Location: http://localhost/complete_project/welcomepage.php"); 
    exit;
        }
    else{
     echo "<script>location.href='https://localhost/complete_project/membererror.php'; </script>";   
        exit;
}  
}  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width, intial-scale=1">
<title>LogIn Page</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="memberstyle.css"> 
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Indie+Flower&display=swap" rel="stylesheet"> 
</head>
<body>  
     <h1><marquee><span>NOTICE:</span> This section is only for the staff memebers of RGIT</marquee></h1>
     <br>
     <h2>WELCOME  TO  MEMBERS  LOGIN  PAGE</h2>
         <br>
         <br>
     <h4 style="text-align:center;"><p style="color:red">Please enter valid details!</p></h4>
     <div class="container-fluids">
     <div class="col-lg-6">
      <form action ="membererror.php" method="post">
     <div class="form-group">
    <label for="username">USERNAME:</label>
    <input type ="text" class="form-control" id="username"  name="username" placeholder="username" minlength="3" >
   </div>
    <br>
   <div class="form-group">
    <label for="password" >PASSWORD:</label>
    <input type ="password" class="form-control" id="password" name="password" placeholder="password">
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


 