<html>

<head>
    <style>
        body {
            background-image: url("images/admin_login.png");
            background-size: 220vh 110vh;
            height: 100vh;
            width: max-content;
            background-repeat: no-repeat;
        }
        #card {
            background-color: #110909;
            
            height: 180px;
            border-radius: 5px;
            box-shadow: 0 12px 16px 0 rgba(133, 120, 120, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
            text-align: center;
            font-size: 24px;
            padding: 10px;
            
            opacity: 0.8;
            color: white;
            border: 10px solid white;
            font-weight: 20pt;
            font-size: 20pt;
        }

        #done {
            background-color: #d82828;
            color: antiquewhite;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;

        }

        div {
            color: antiquewhite;
        }

        header::before {
            background: url('images/bg1.png') no-repeat center center/cover;
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 1;

        }

        table,
        td,
        th {
            margin-left: 10px;
            border: 1px solid #EEEEEE;
            align-items: center;
            text-align: center;
            font-size: 18px;
            text-align: center;
            color: white;
            padding-left: 35px;
            padding-right: 35px;
            padding-top: 15px;
            padding-bottom: 15px;
            background-color: black;
            
        }

        table {
            margin-left: 600px;
            position: relative;
            
            color: white;
            opacity: 0.8;
        }
    </style>
</head>

<body>
        <?php
        include('sidenav.php');

        ?>
    <h2 style="font-style:italic; font-size:30px;padding-left:30px;">Crime Record</h2>

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

    $crimerecord_id = filter_input(INPUT_GET, 'crimerecord_id');

    $sql = "SELECT * FROM crime_record WHERE crimerecord_id='$crimerecord_id'";
    $result = $conn->query($sql);


   

    if ($result->num_rows > 0) {
        echo "<table id='card'>";
        echo "<tr><td>Criminal Name</td><td>Officer Name</td><td>Case Name</td></tr>";
        while ($row = $result->fetch_assoc()) {

            
            echo "<tr><td>". $row['criminal_name'] . "</td><td>" . $row['officer_name'] . "</td><td>" . $row['case_name'] . "</td></tr>" . "<br>";
            
        }
        echo "</table>";
    } else {
        echo "<header class='bg'>
		
            <div id='card'><p>Invalid Id!!!</p><p>Try again with valid Id</p><form action='crime_search.php' method='get'><button type='submit' id='done'>Done</button></form></div>
        </header>";
    }



    ?>

</body>





</html>