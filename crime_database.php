<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crime Database</title>
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
    include('sidenav.php');

    ?>


    <h1>Crime Record</h1>

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

    $sql = "SELECT * FROM crime_record";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table id='card'>";
        echo "<tr><td>Crime Record Id</td><td>Criminal Name</td><td>Officer Name</td><td>Case Name</td><td>Witness Name</td><td>Crime_Location</td><tr>";
        while ($row = $result->fetch_assoc()) {


            echo "<tr><td>" . $row['crimerecord_id'] . "</td><td>" . $row['criminal_name'] . "</td><td>" . $row['officer_name'] . "</td><td>" . $row['case_name'] . "</td><td>" . $row['witness_name'] . "</td><td>" . $row['crime_address'] . "</td></tr>";
        }
        echo "</table>";
    }

    ?>
</body>

</html>