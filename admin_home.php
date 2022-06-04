<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Home</title>
</head>
<link href="https://fonts.googleapis.com/css2?family=Tourney:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	* {
		box-sizing: border-box;
	}

	h1 {
		font-family: 'Tourney';
	}

	.header {
		padding: 10px;
		background-image: url("images/homebg.png");
		text-align: center;
		color: white;
	}

	body {
		margin: 0;
	}

	.heading {
		font-size: 40pt;
	}

	h1,
	h3 {
		text-shadow: 0.5px 0.5px red;
	}

	.logo {
		height: 25%;
		width: 25%;
	}

	.navi {
		position: relative;
		margin-left: 0px;
		background-color: #333;
	}

	.navbar {
		overflow: hidden;
		background-color: #333;
		height: 70px;
	}

	.navbar a {
		float: left;
		display: block;
		color: white;
		text-align: center;
		padding: 14px 20px;
		text-decoration: none;
		font-size: 16pt;
		margin-top: 0px;
	}

	.navbar p.right {
		float: right;
		font-size: 16pt;
		color: white;
		margin-right: 35px;
	}

	.navbar a:hover {
		background-color: #ddd;
		color: black;
		height: 70px;
		margin-top: 0px;
	}

	.row {
		display: -ms-flexbox;
		/* IE10 */
		display: flex;
		-ms-flex-wrap: wrap;
		/* IE10 */
		flex-wrap: wrap;
	}

	.side {
		-ms-flex: 30%;
		/* IE10 */
		flex: 30%;
		background-color: #f1f1f1;
		padding: 20px;
		width: 420px;
	}

	.main {
		-ms-flex: 70%;
		/* IE10 */
		flex: 70%;
		background-color: white;
		padding: 20px;
	}

	.tasc {
		background-image: url("images/Untitled design (5).png");
		background-repeat: no-repeat;
		width: 100%;
		padding: 20px;
		font-family: 'Tourney';
		font-size: 20pt;
		color: white;

	}

	.tasc_text {
		margin-top: 120px;
		text-align: center;
		margin-left: 0px;
	}

	.footer {
		padding: 20px;
		text-align: center;
		background: black;
		font-family: "Tourney";
		color: white;
		font-size: 30pt;
	}

	ul {
		list-style-type: "★";
	}

	ul li {
		margin-left: 5px;
		padding: 20px;
		font-size: 14pt;
	}

	.attack {
		height: 30%;
		width: 100%;
	}
</style>

<body>
	<div class="header">
		<img class="logo" src="images/logo2.png" alt="Error displaying logo">
		<h1 class="heading">THREAT ANALYSIS AND SERVILLIENCE CELL</h1>
		<h1>न कालमतिवर्तन्ते महान्तः स्वेषु कर्मसु ।</h1>
		<h3>(Great people never delay their duties!)</h3>
	</div>

	<div class="navi">
		<?php
		include('navigation_admin.php');
		?>
	</div>
	<div class="navbar">

		<a href="admin_home.php">Home</a>
		<a href="record(admin).php">Records</a>
		<a href="logout.php">Logout</a>
		<p class="right">Welcome, Admin!</p>
	</div>

	<div class="row">
		<div class="side">
			<h2 style="font-family: 'Tourney'; font-size: 30pt;">T.A.S.C.</h2>
			<div class="tasc" style="height:200px;">
				<div class="tasc_text">Threat Analysis and Servillience Cell</div>
			</div>
			<h3 style="font-size: 20pt;">Aims & Objectives</h3>
			<ul>
				<li>Saving innocent lives is reason of our existence</li>
				<li>जागृतं अहर्निशं</li>
				<li>Shrouded in secrecy</li>
			</ul>
		</div>
		<div class="main">
			<h2>PULWAMA ATTACK</h2>
			<h5>Thursday, 14 February, 2019</h5>
			<img src="images/pulwama.png" alt="Error displaying image" class="attack">
			<p>Incident:</p>
			<p>The 2019 Pulwama attack occurred on 14 February 2019, when a convoy of vehicles carrying Indian security personnel on the Jammu–Srinagar National Highway was attacked by a vehicle-borne suicide bomber at Lethapora in the Pulwama district of the erstwhile state of Jammu and Kashmir.</p>
			<pre>Deaths: 40 (+1 suicide bomber)
Location: Lethipora
Perpetrators: Jaish-e-Mohammed
Injured: 35</pre>
			<br>
			<h2>URI Surgical Strike</h2>
			<h5>Attacked on 18 September, 2016</h5>
			<img src="images/uri.png" alt="Error displaying image" class="attack">
			<p>Incident:</p>
			<p>On 29 September 2016, India announced that it conducted "surgical strikes" against militant launch pads across the Line of Control in Pakistani-administered Kashmir, and inflicted "significant casualties". Indian media reported the casualty figures variously from 35 to 70.</p>
			<pre>
Location: Line of Control
Start date: 28 September 2016
			</pre>
		</div>
	</div>

	<div class="footer">
		<h2>THREAT ANALYSIS AND SERVILLIENCE CELL</h2>
	</div>

</body>

</html>