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
            margin-left: 65vh;
            width: 40%;
            height: 75%;
            position: relative;
            margin-top: 90px;
            margin-bottom: auto;
        }

        .login_button {
            padding: 30px 40px;
            background-color: black;
            color: red;
            font-family: "Texturina";
            font-style: bold;
            font-size: 15pt;
            text-shadow: 2px 2px 4px red;
            border-radius: 10px;
            border: 1px solid white;
        }

        .login_button:hover {
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
                <a href="crime_database(admin).php"><button  class="login_button" style="margin-left: 100px;">Crime Database</button></a>
            </div>
        </td>
        <td>
            <div class="centre">
                <a href="criminal_database(admin).php"><button style="margin-left: 120px;" class="login_button">Criminal Database</button></a>
            </div>
        </td>
        <td>
            <div class="centre">
                <a href="admin_database.php"><button   style="margin-left: 110px;"class="login_button">Admin Database</button></a>
            </div>
        </td>
        <td>
            <div class="centre">
                <a href="officer_database.php"><button  style="margin-left: 110px;" class="login_button">Officer Database</button></a>
            </div>
        </td>
    </tr>
</table>

</body>

</html>