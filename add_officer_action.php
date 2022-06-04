<html>

<head>
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
	</style>
</head>

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

	$sql = "CREATE TABLE IF NOT EXISTS officer_database (
			officer_id VARCHAR(50) PRIMARY KEY,
			officer_name VARCHAR(50), 
			officer_password VARCHAR(50),
			officer_address VARCHAR(50),
			officer_contact VARCHAR(50),
			officer_email VARCHAR(50)
		)";

	if ($conn->query($sql) === TRUE) {
		//echo "Table created successfully";
	} else {
		echo "Error creating table: " . $conn->error;
	}

	$officer_id = filter_input(INPUT_GET, 'officer_id');
	$officer_name = filter_input(INPUT_GET, 'officer_name');
	$officer_password = filter_input(INPUT_GET, 'officer_password');
	$officer_address = filter_input(INPUT_GET, 'officer_address');
	$officer_contact = filter_input(INPUT_GET, 'officer_contact');
	$officer_email = filter_input(INPUT_GET, 'officer_email');



	$sql = "INSERT INTO officer_database (officer_id, officer_name, officer_password, officer_address, officer_contact, officer_email) 
		VALUES ('$officer_id', '$officer_name', '$officer_password','$officer_address','$officer_contact','$officer_email')";


	if ($conn->query($sql) === TRUE) {
		//echo "New record created successfully";
		echo "<header class='bg'>
	<div id='card'><p>New Officer Successfully Added</p><form action='add_officer.php' method='get'><button type='submit' id='done'>Done</button></form></div>
	</header>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

	?>

</body>





</html>