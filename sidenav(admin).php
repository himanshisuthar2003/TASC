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
#admin{
    top: 170px;
    background-color: #ff0000;
}

#officer{
    top: 230px;
    background-color: black;
}
#crime_record {
  top: 290px;
  background-color: #ff0000;
}

#criminal_record {
  top: 372px;
  background-color: black;
}

#help {
  top: 475px;
  background-color: #ff0000;
}

#conduct {
  top: 535px;
  background-color: black;
}

#search{
  top: 617px;
  background-color: #ff0000;
}

#home{
  top: 110px;
  background-color: black;
}
</style>
</head>
<body>

<div id="sidenav" class="sidenav">
    <a href="admin_home.php" id="home">Home</a>
    <a href="add_admin.php" id="admin">Add Admin</a>
    <a href="add_officer.php" id="officer">Add Officer</a>
    <a href="add_crime_record(admin).php" id="crime_record">Add Crime Records</a>
    <a href="add_criminal_record(admin).php" id="criminal_record">Add Criminal Records</a>
    <a href="help(admin).php" id="help">Help</a>
    <a href="conduct(admin).php" id="conduct">Code of Conduct</a>
    <a href="search_home(admin).php" id="search">Search Records</a>
</div>
   
</body>
</html> 
