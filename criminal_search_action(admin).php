<html>

<head>
    <style>
        body {
            background-image: url("images/admin_login.png");
            background-size: 220vh 100vh;
            height: 85vh;
            width: max-content;
            background-repeat: no-repeat;
        }

        #card {
            background-color: #110909;
            margin: 150px;
            height: 180px;
            border-radius: 5px;
            box-shadow: 0 12px 16px 0 rgba(133, 120, 120, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
            text-align: center;
            font-size: 24px;
            padding: 25px;
            margin-left: 800px;
            margin-right: 200px;
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
            background: url('invalid.png.jpeg') no-repeat center center/cover;
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
            border: 1px #EEEEEE;
            align-items: center;
            text-align: center;
            font-size: 18px;
            text-align: center;

            padding-left: 35px;
            padding-right: 35px;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        table {
            margin: auto;
        }
    </style>
</head>

<body>
    <?php
    include('sidenav(admin).php');
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

    $criminal_id = filter_input(INPUT_GET, 'criminal_id');

    $sql = "SELECT * FROM criminal_record WHERE criminal_id='$criminal_id'";
    $result = $conn->query($sql);


    echo "<table id='card' border='2'>";

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {


            echo "<tr><td>Criminal Id : </td><td>" . $row['criminal_id'] . "</td></tr>";
            echo "<tr><td>Criminal Name : </td><td>" . $row['criminal_name'] . "</td></tr>";
            echo "<tr><td>Age : </td><td>" . $row['age'] . "</td></tr>";
            echo "<tr><td>Height : </td><td>" . $row['height'] . "</td></tr>";
            echo "<tr><td>Gender : </td><td>" . $row['gender'] . "</td></tr>";
            echo "<tr><td>Eye Color : </td><td>" . $row['eye_color'] . "</td></tr>";
        }
    } else {
        echo "<header class='bg'>
		
            <div id='card'><p>Invalid Id!!!</p><p>Try again with valid Id</p><form action='criminal_search(admin).php' method='get'><button type='submit' id='done'>Done</button></form></div>
        </header>";
    }



    ?>

</body>





</html>