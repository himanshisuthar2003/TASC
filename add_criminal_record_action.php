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
	</head>
	
	<body>
		

<?php
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname ="crimedb";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		$sql = "CREATE TABLE IF NOT EXISTS criminal_record (
			criminal_id VARCHAR(50) PRIMARY KEY,
			criminal_name VARCHAR(50), 
			age INT(3),
			height VARCHAR(50),
			gender VARCHAR(50),
			eye_color VARCHAR(50),
			crime VARCHAR(50)
		)";

		if ($conn->query($sql) === TRUE) {
		//echo "Table crime_database created successfully";
		} else {
		echo "Error creating table: " . $conn->error;
		}
		
		$criminal_id = filter_input(INPUT_GET,'criminal_id');
		$criminal_name = filter_input(INPUT_GET,'criminal_name');
		$age = filter_input(INPUT_GET,'age');
		$height = filter_input(INPUT_GET,'height');
		$gender = filter_input(INPUT_GET,'gender');
		$eye_color = filter_input(INPUT_GET,'eye_color');
		$crime = filter_input(INPUT_GET,'crime');
		


		$sql = "INSERT INTO criminal_record (criminal_id, criminal_name, age, height, gender, eye_color,
        crime) 
		VALUES ('$criminal_id', '$criminal_name', '$age','$height','$gender','$eye_color','$crime')";


if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
	echo "<header class='bg'>
		
		<div id='card'><p>Error!</p><p>Unable to add Criminal Record! Try Again!</p><form action='add_criminal_record.php' method='get'><button type='submit' id='done'>Done</button></form></div>
	</header>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

		$conn->close();
		
		?>
		
</body>
	
	
	


</html>