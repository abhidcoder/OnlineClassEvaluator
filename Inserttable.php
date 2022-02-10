<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="demo";
$link=mysqli_connect($host,$user,$password,$db);
if(isset($_POST['submit'])){
    $usn=$_POST['names'];
    $scores=$_POST['text'];
    $remarks=$_POST['textt'];
    $dropd=$_POST['dropdown'];
    $department=$_SESSION['depar'];
    $year=$_POST['yeah'];
    $check="select usn from marks_list where usn='$usn'";
    $results = mysqli_query($link,$check);
    $final=mysqli_fetch_array($results);
    if(isset($final))
    {
    if($dropd=="1st Test"){
    $inserting="UPDATE marks_list SET First='$scores',Remarks='$remarks' WHERE usn='$usn'";
    mysqli_query($link,$inserting);
    }
    else if($dropd=="2nd Test"){
    $inserting="UPDATE marks_list SET Second='$scores',Remarks='$remarks' WHERE usn='$usn'"; 
    mysqli_query($link,$inserting);
    }
    else{
    $inserting="UPDATE marks_list SET Third='$scores',Remarks='$remarks' WHERE usn='$usn'"; 
    mysqli_query($link,$inserting);
    }
    echo"<h1><p align=center><font color=purple>Score Successfully Enterd</font></p></h1>";
    echo"<h3><p align=center><font color=green>Reloading Please wait....</font></p></h3>";
    }
    else
    {
     echo"<h1><p align=center><font color=red>Ops! something went wrong...</font></p></h1>";
     echo"<h1><p align=center><font color=red>Please check the USN you Entered</font></p></h1>";
     echo"<h3><p align=center><font color=green>Reloading Please wait....</font></p></h3>";
    }
    
    header("Refresh:3; url=inserttable.php");
    exit;
}  
?>
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
<title>Insert</title>
<br>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="#"> 
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Indie+Flower&display=swap" rel="stylesheet"> 
</head>
<body> 
<span>
<div class="abhi">
        <button class="btn-outline-dark btn-lg"><a target="_blank" href="welcomepage.php" style="text-decoration: none;">Open Main Page in a New Tab</a></button></div>
<div class="abhii">
        <button class="btn-outline-danger btn-lg"><a target="_blank" href="inserttable2.php" style="text-decoration: none;">Click Here To View The Sheet</a></button></div></span>
<div class="cnet">
<div class="form-group container-fluids col-lg-10">
  <form action ="inserttable.php" method="post">
     <div class="form-group container-fluids col-lg-6">
    <label for="names">USN:</label>
    <input type ="text" class="form-control" id="names"  name="names" placeholder="University Seat Number" minlength="1" >
   </div>
    <div class="form-group col-lg-6">
    <label for="department">TEST:</label> 
        <select name="dropdown" id="department" class="form-control">
        <option>1st Test</option>
        <option>2nd Test</option>
        <option>3rd Test</option>
        </select>
    </div>
      <div class="form-group col-lg-6">
    <label for="text" >SCORED:</label>
    <input type ="text" class="form-control" id="text" name="text" placeholder="Enter The Score Here">
      </div>
       <div class="form-group col-lg-6">
    <label for="text" >REMARKS:</label>
    <input type ="text" class="form-control" id="textt" name="textt" placeholder="Enter The Score Here">
      </div>
       <div class="form-group col-lg-6">
    <label for="department">YEAR:</label> 
        <select name="yeah" id="department" class="form-control">
        <option>FIRST</option>
        <option>SECOND</option>
        <option>THIRD</option>
        <option>FOURTH</option>
        </select>
    </div>
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