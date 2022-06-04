<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>forgot password</title>
    <link href="https://fonts.googleapis.com/css2?family=Tourney:wght@500&display=swap" rel="stylesheet">
    <style>
        form {
            border: 1px solid rgb(241, 234, 234);
            color: azure;
            display: block;
            height: 450px;
            width: 450px;
            margin: auto;
            padding: 35px;
            border-radius: 30px;
        }

        h1 {
            position: relative;
            margin-top: 20px;
            margin-left: 30px;
            font-family: "Tourney", 'Times New Roman', Times, serif;
            color: white;
        }

        .navbar {
            color: rgb(26, 21, 21);
            font-style: "Dancing Script";
            font-size: 25px;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding-top: 2px;
            background-color: rgb(102, 22, 22);
            opacity: 0.9;
            border-radius: 30px;
            width: 100%;
            height: 110px;
            box-shadow: 10px 11px 12px rgb(216, 223, 216);

        }

        form input {
            height: 30px;
            width: 100%;
            border-radius: 5px;
        }

        input:focus {
            border-color: red;
            border-bottom-width: 5px;
        }

        input[type='submit'] {
            padding: 12px;
            left: 0%;
            display: block;
        }

        .navbar img {
            display: block;
            height: 110px;
            width: 110px;
            position: fixed;
            left: auto;
        }

        label {
            font-size: 16pt;
        }


        header::before {
            background: url('https://wallpapercave.com/wp/wp2630784.jpg') no-repeat center center/cover;
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 1;
        }


        .inp {
            background-color: rgb(83, 17, 17);
            border-radius: 50px;
            height: 50px;
            width: 300px;
            clear: both;
            display: block;
            align-items: center;
            box-shadow: 3px 3px 5px rgb(210, 219, 210);
            border: 2px solid grey;
            transition-property: background-color;
            transition-duration: 0.2s;
            transition-delay: 0.5s;
            position: relative;
            margin-top: 20px;
            margin-left: 70px;
            color: white;

        }

        .inp:hover {
            background-color: rgb(10, 0, 0);

        }
        #query{
            height: 100px;
            width: 100%;
            border-radius: 5px;
            
        }
    </style>
</head>

<body>
    <?php
        include('sidenav.php')
    ?>
    <header>
        <nav class="navbar">
            <img src="images/logo2.png">
            <h1 style="font-size: 40pt;">THREAT ANALYSIS AND SURVILLENCE CELL </h1>


        </nav>
    </header> <br><br><br>
    <form action="help_action.php" method="get">
        <h2>Ask Your Query Here!</h2>
        <label for="officerid">Officer Id:</label><input type="text" pattern=".{1,}" required  name="officerid" placeholder="Your Id.."> <br><br>
        <label for="officername">Officer Name:</label><input type="text" pattern=".{1,}" required  name="officername" placeholder="Your Name.."> <br><br>
        <label for="query">Query:</label><textarea type="text" pattern=".{1.}" required name="query" id="query" cols="40" rows="5" placeholder="Enter your query"></textarea> <br><br>
        
        <div class="container"> <input class="inp" type="submit" value="ENTER"></div>

    </form>
</body>

</html>