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
			
			$Officer_id = filter_input(INPUT_POST,'Officer_id');
			$Officer_password = filter_input(INPUT_POST,'Officer_password');
			
			$adid="admin@crime";
			$adpass="admin123";
			$logflag=0;
				
			$sql = "SELECT * FROM admin_database WHERE Officer_id='$Officer_id' AND Officer_password='$Officer_password'";
			$result = $conn->query($sql);
				
			if ($result->num_rows > 0) {
				$logflag=0;
				header("Location: admin_home.php");	
			}
				
			
			
			else
			{
				if($Officer_id==$adid && $Officer_password==$adpass)
				{
					header("Location: admin_home.php");
					$logflag=1;
				}
						
				else{
					echo "<header class='bg'
					<div id='card'><p>Invalid Id or Password!!!</p><p>Try again with valid Id and Password</p><form action='admin_login.php' method='get'><button type='submit' id='done'>Done</button></form></div>
					</header>";
		
				}
			}
		
		
?>

</body>
	
	
	


</html>