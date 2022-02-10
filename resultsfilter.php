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
        <button class="btn-outline-danger btn-lg"><a target="_blank" href="results.php" style="text-decoration: none;">Click Here To View The Sheet</a></button></div></span>
<br>
<br>
<div class="cnet">
<div class="form-group container-fluids col-lg-10">
  <form action ="resultsfilter.php" method="post">
    <div class="form-group container-fluids col-lg-6">
     <label for="department">YEAR:</label> 
        <select name="dropdownn" id="year" class="form-control">
        <option>FIRST</option>
        <option>SECOND</option>
        <option>THIRD</option>
        <option>FOURTH</option>
        </select>
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
if(isset($_POST['dropdownn'])){
    $_SESSION['yearrr']=$_POST['dropdownn'];
     echo '<script>alert("Changes made Successfully")</script>'; 
     echo '<script>window.location= "resultsfilter.php"</script>';
}
else
{
  echo '<script>alert("Please SELECT the option properly")</script>'; 
  echo '<script>window.location= "resultsfilter.php"</script>';
}
}
?>