<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help</title>
</head>
<style>
    #card {
			background-color: #110909;
			margin: 150px;
			height: 180px;
			border-radius: 5px;
			box-shadow: 0 12px 16px 0 rgba(133, 120, 120, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
			text-align: center;
			font-size: 24px;
			padding: 25px;
			margin-left: 200px;
			margin-right: 200px;
			opacity: 0.8;
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
</style>

<body>
    <?php

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

    $sql = "CREATE TABLE IF NOT EXISTS help (
			officer_id VARCHAR(50),
			officer_name VARCHAR(50),
            query VARCHAR(255)
		)";

    if ($conn->query($sql) === TRUE) {
        
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $officerid = filter_input(INPUT_GET, 'officerid');
    $officername = filter_input(INPUT_GET, 'officername');
    $query = filter_input(INPUT_GET, 'query');

    
    $sql = "INSERT INTO help (officer_id, officer_name, query) 
		VALUES ('$officerid', '$officername', '$query')";


    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
        echo "<header class='bg'>
        <div id='card'><p>Query submitted successfully</p><form action='officer_home.php' method='get'><button type='submit' id='done'>Done</button></form></div>
        </header>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    ?>
</body>

</html>