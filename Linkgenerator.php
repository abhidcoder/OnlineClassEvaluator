<!DOCTYPE html>
<html lang="en">
<head>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width, intial-scale=1">
<title>Link Generator</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="linkgenerator.css"> 
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Indie+Flower&display=swap" rel="stylesheet"> 
</head>
<body>  
     <h1><marquee><span>Education </span>is the passport to the future, for tomorrow belongs to the people who prepare for it today!</marquee></h1>
     <br>
     <br>
     <br>
    <div class="container-fluids">
    <div class="col-xs-6">
    <h2><label for="urll"> PASTE YOUR LINK BELOW:</label></h2>
    <br>
    <form action ="linkcode.php" method="get">
    <input type ="text" class="form-control" id="urll"  name="urll" placeholder="https://www.example.com" minlength="8" >
    <br>
    <br>
    <br>
    <div class="form-group">
    <input class="btn btn-success text-center" type="submit" name="submitt" value="Generate" >
    </div>
    </form>
    </div>
    </div>
</body>
</html>