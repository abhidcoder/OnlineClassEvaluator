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
        <button class="btn-outline-danger btn-lg"><a target="_blank" href="tables.php" style="text-decoration: none;">Click Here To View The Sheet</a></button></div></span>
<br>
<br>
<div class="cnet">
<div class="form-group container-fluids col-lg-10">
  <form action ="attendanceDates.php" method="post">
    <div class="form-group container-fluids col-lg-6">
    <label for="name"><h4>Enter the Timestamp:</h4></label>
    <input type ="text" class="form-control" id="name"  name="name" placeholder="YYYY/MM/DD 00:00:00" minlength="1" >
    <br>
    <h4>Between</h4>
     <input type ="text" class="form-control" id="name"  name="nam" placeholder="YYYY/MM/DD 00:00:00" minlength="1" >
   </div>
      <div class="form-group abb col-lg-6">
        <label for="year" ><h4>Year:</h4></label>
        <select id="year" name="year" class="form-control">
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
if(isset($_POST['submit'])){
$c=$_POST['name'];
$h=$_POST['nam'];
if(strlen($c)==19 and strlen($h)==19)    
{
$dep=$_SESSION['depar'];
$_SESSION['startt']=$_POST['name'];
$_SESSION['start']=$_POST['nam'];
$_SESSION['depp']=$dep;
$_SESSION['yearr']=$_POST['year'];
echo '<script>alert("Changes made succefully")</script>'; 
echo '<script>window.location= "AttendanceDates.php"</script>';
}
else{
echo '<script>alert("Query was not successfull please give a valid format")</script>'; 
echo '<script>window.location= "AttendanceDates.php"</script>';
}
}
?>
