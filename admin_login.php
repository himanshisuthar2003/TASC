<html>
	<head>
        <title>Admin Login</title>
		<style>
body{
    background-image: url("images/admin_login.png");
    background-size: 220vh 100vh;
    height: 85vh;
    width: max-content;
    background-repeat: no-repeat;
}

#avatar{
    border-radius: 50%;
    height: 75%;
    width: 80%;
    position: relative;
    margin-top: 100px;
    margin-left: 50px;
}

.container{
    background-color: white;
    position: relative;
    margin-left: 900px;
    margin-top: 100px;
    padding: 30px;
    background: rgba(0, 0, 0, 0.822);
    color: red;
    width: 410px;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.4);
    height: 400px;
    border-radius: 15px;
    border: 5px solid white;
}

.container .text{
    font-size: 35px;
    font-weight: 500;
    text-align: center;
}

.container form{
    margin-top: 20px;
}

.container form .data{
    height: 45px;
    width: 100%;
    margin: 20px 0;
}

form .data, label{
    font-size: 18pt;   
}

form .data, input{
    height: 100%;
    width: 100%;
    font-size: 17px;
}

input{
    border: 1px solid silver;
    font-family: 'Times New Roman', Times, serif;
    height: 30px;
    border-radius: 2px;
}

input:focus{
    border-color: red;
    border-bottom-width: 5px;
}

form, .forgot-password{
    font-size: 18pt;
    margin-top: -8px;
}

form .forgot-password, a{
    color: rgb(255, 0, 0);
    text-decoration: none;
}

form .forgot-password, a:hover{
    text-decoration: underline;
}

#login{
    background-color: red;
    color: black;
    height: 40px;
    width: 80px;
    position: relative;
    margin-top: 40px;
    font-size: 16pt;
    font-family: 'Times New Roman', Times, serif;
    
}

.home{
    background-color: red;
    color: black;
    height: 40px;
    width: 80px;
    position: relative;
    margin-top: 130px;
    font-size: 16pt;
    font-family: 'Times New Roman', Times, serif;
    margin-left: 500px;
}

			
		</style>
	</head>
	
	<body>
	<div class="container">
        <div class="text">Login Here!</div><br>
        <form action="admin_login_action.php" method="post">
        <div class="data">
                <label for="Officer_id">Username</label>
                <input type="text" pattern=".{1,}" required  name="Officer_id" placeholder="Your Id..">
            </div>
            <br>
            <div class="data">
                <label for="Officer_password">Password</label>
                <input type="password" pattern=".{1,}" required name="Officer_password" placeholder="Your Password...">
            </div>
            <br>
            <div class="forgot-password"><a href="forgot_password.php">Forgot password?</a></div>
            <input type="submit" id="login" value="Submit">
            </form>
            <a href="home.php"><button class="home">Home</button></a>
        
    </div>
	</body>
	
	
	


</html>