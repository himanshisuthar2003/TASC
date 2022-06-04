<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#sidenav a {
  position: absolute;
  left: -80px;
  transition: 0.3s;
  padding: 15px;
  width: 100px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
  border: 1px solid white;
}

#sidenav a:hover {
  left: 0;
}

#home{
  top: 300px;
  background-color: #ff0000;
}

#crime_record {
  top: 260px;
  background-color: black;
}

#criminal_record {
  top: 345px;
  background-color: #ff0000;
}

#help {
  top: 450px;
  background-color: black;
}

#conduct {
  top: 510px;
  background-color: #ff0000;
}

#search{
  top: 595px;
  background-color: black;
}
</style>
</head>
<body>

<div id="sidenav" class="sidenav">
    <a href="officer_home.php" id="home">Home</a>
    <a href="add_crime_records.php" id="crime_record">Add Crime Records</a>
    <a href="add_criminal_record.php" id="criminal_record">Add Criminal Records</a>
    <a href="help.php" id="help">Help</a>
    <a href="conduct.php" id="conduct">Code of Conduct</a>
    <a href="search_home.php" id="search">Search Records</a>
</div>
   
</body>
</html> 
