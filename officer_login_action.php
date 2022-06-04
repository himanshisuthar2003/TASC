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
		
		$officer_id = filter_input(INPUT_GET,'officer_id');
		$officer_password = filter_input(INPUT_GET,'officer_password');
		
		$sql = "SELECT * FROM officer_database WHERE officer_id='$officer_id' AND officer_password='$officer_password'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			header("Location: officer_home.php");	
		}
		
		 else {
			echo "<header class='bg'>
            <div id='card'><p>Invalid Id or Password!!!</p><p>Try again with valid Id and Password</p><form action='officer_login.php' method='get'><button type='submit' id='done'>Done</button></form></div>
            </header>";
		
		}
?>
		
</body>
	
	
	


</html>

