<!DOCTYPE html>
<html lang="en">
<head>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width, intial-scale=1">
<title>Welcome Page</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="welcomestyle.css"> 
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Indie+Flower&display=swap" rel="stylesheet"> 
</head>
<body>  
     <h1><marquee><span>Education </span>is the passport to the future, for tomorrow belongs to the people who prepare for it today!</marquee></h1>
     <br>
    <div class="text-warning"><?php session_start(); echo("Welcome ".$_SESSION['namess']);?></div>
    <div class="container-fluids">
    <div class="col-xs-6">
    <span>
    <br>
    <div class="abhi">
    <button class="btn btn-danger btn-lg" onclick="document.location='http://localhost/complete_project/logout.php'">SIGN OUT</button></div>
    <br>
    <div class="container-fluids" class="col-xs-6" >
    <div class="abhii">
        <button class="btn-outline-primary btn-lg"><a target="_blank" href="Linkgenerator.php" style="text-decoration: none;">Click Here To Enter The Link </a></button></div>
    </div>
    </span>
    </div>
    <div class="col-xs-6">
    <br>
    <h2>Please Click on the buttons below to perform actions :</h2>
    </div>
    <br>
    <div class="scaling">
    <div class="col-xs-6">
    <button class="btn btn-danger" onclick="document.location='https://localhost/complete_project/attendancedates.php'">View Attendance Sheet</button>
    </div>
    <br>
    <div class="col-xs-6">
    <div class="dom">
    <button class="btn btn-info" onclick="document.location='https://localhost/complete_project/inserttable.php'"> Insert the Progress Report</button>
    </div>
    </div>
    <br>
    <div class="col-xs-6">
    <button class="btn btn-success" onclick="document.location='https://localhost/complete_project/final.php'">Enter Attendance Count</button>
    <div class="col-xs-6">
    <div class="scaled">
    <button class="btn btn-primary" onclick="document.location='https://localhost/complete_project/resultsfilter.php'">View The Final result  </button>
    </div>
    </div>
    </div>
    </div>
    </div>
   
    
</body>
</html>