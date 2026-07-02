<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "<div class= 'Success'>Please enter valid information!</div>";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

<style>
body{
    margin:0;
    padding:0;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#667eea,#764ba2);
    font-family:Arial, Helvetica, sans-serif;
}

/* Login Box */
#box{
    background:#fff;
    width:330px;
    padding:30px;
    border-radius:12px;
    box-shadow:0 10px 25px rgba(0,0,0,0.3);
    text-align:center;
}

/* Title */
#box h2{
    margin-bottom:25px;
    color:#333;
}

/* Input fields */
#box input[type="text"],
#box input[type="password"]{
    width:100%;
    padding:12px;
    margin-bottom:15px;
    border:1px solid #ccc;
    border-radius:8px;
    font-size:14px;
    outline:none;
}

#box input:focus{
    border-color:#667eea;
}

/* Button */
#box input[type="submit"]{
    width:100%;
    padding:12px;
    background:#667eea;
    border:none;
    color:white;
    font-size:16px;
    border-radius:8px;
    cursor:pointer;
    transition:0.3s;
}

#box input[type="submit"]:hover{
    background:#5a67d8;
}

/* login link */
#box a{
    display:block;
    margin-top:15px;
    text-decoration:none;
    color:#667eea;
    font-size:14px;
}

#box a:hover{
    text-decoration:underline;
}
.alert,
.Success
{
    width: 400px;
    text-align: center;
    position: absolute;
    top: 30px;
    left: 50%;
    transform: translateX(-50%);
    color: white;
    padding: 8px 0;
}
.alert{
    background-color: rgb(252, 59, 59);
}
.Success{ background-color: rgb(44, 158, 24); }
</style>
	
	

	<div id="box">
		<h2>Signup</h2>
		<form action="signup.php" method="post" autocomplete="off">
			

			<input id="text" type="text" name="user_name" placeholder="username" autocomplete="off"><br><br>
			<input id="text" type="password" name="password" placeholder="Password" autocomplete="new-password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php"> Login</a><br><br>
		</form>
	</div>
</body>
</html>