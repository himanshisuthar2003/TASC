<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T.A.S.C</title>
    <style>        
    body {
            background-image: url("images/bg1.png");
            background-size: 220vh 100vh;
            height: 85vh;
            width: max-content;
            background-repeat: no-repeat;
        }

        #logo {
            display: block;
            margin-left: 70vh;
            width: 43%;
            height: 75%;
            position: relative;
            margin-top: 70px;
            margin-bottom: auto;
        }

        .search {
            padding: 30px 60px;
            background-color: black;
            color: red;
            font-family: "Texturina";
            font-style: bold;
            font-size: 20pt;
            text-shadow: 2px 2px 4px red;
            border-radius: 10px;
            border: 1px solid white;
        }

        .search:hover {
            box-shadow: 0 12px 16px 0 rgba(255, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
            opacity: 0.7;
        }
			
		</style>
	</head>
	
    <body>
        <?php
            include('sidenav(admin).php');
        ?>
    <img id="logo" src="images/logo2.png" alt="Error displaying logo">
    <br>
    <table style="width: 100%;">
        <tr>
            <td>
                <div class="centre">
                    <a href="crime_search(admin).php"><button style="margin-left: 370px;" class="search">Crime Records</button></a>
                </div>
            </td>
            <td>
                <div class="centre">
                    <a href="criminal_search(admin).php"><button style="margin-left: 180px;" class="search">Criminal Records</button></a>
                </div>
            </td>
        </tr>
    </table>

	</body>
	
</html>