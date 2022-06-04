<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criminal Database</title>
</head>
<style>
    table, td, tr{
        padding: 20px;
        border: 1px solid white;
        color: white;
        font-size: 16pt;
    }
    body{
        background-image: url('images/recordbg.jpg');
    }
    table{
        background-color: black;
        opacity: 0.7;
    }
    #card{
        position: relative;
        margin-left: 140px;
    }
    h1{
        color: white;
        text-decoration: underline;
    }
</style>
<body>
    <?php
    include('sidenav(admin).php');

    ?>


    <h1>Criminal Record</h1>

    <?php
    error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crimedb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM criminal_record";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table id='card'>";
        echo "<tr><td>Crime Record Id</td><td>Criminal Name</td><td>Age</td><td>Height</td><td>Gender</td><td>Eye Color</td><td>Crime</td><tr>";
        while ($row = $result->fetch_assoc()) {


            echo "<tr><td>" . $row['criminal_id'] . "</td><td>" . $row['criminal_name'] . "</td><td>" . $row['age'] . "</td><td>" . $row['height'] . "</td><td>" . $row['gender'] . "</td><td>" . $row['eye_color'] . "</td><td>" . $row['crime'] ."</td></tr>";
        }
        echo "</table>";
    }

    ?>
</body>

</html>