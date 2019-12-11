

<html>
<head>
<title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="signup.php" method="post">
			<h1>Create Account</h1>
			<select name="User-type">
				<option value="" disabled selected style="font-family: 'Montserrat', sans-serif;">Select User-type</option>
  				<option value="Computer">Donor</option>
      			<option value="IT">NGO</option>
			</select>
			<input size=50 type="text" name="Username" placeholder="Username/Name" required>
			<input size=50 type="Password" name="Password" placeholder="Password" required>
			<input size=50 type="tel" name="Contact" placeholder="Contact" required>
			<input size=50 type="text" name="Address" placeholder="Address" required>
			<input size=50 type="Email" name="Email" placeholder="Email" required>
			

			<input class="ghost" type="submit" name="submit" value="Sign up" style="background-color: #5783E9; border-radius: 10px; cursor: pointer;"> </input>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="login.php" method="post" name="myform" onsubmit="return validateform()">
			<h1>Sign in</h1>
			<input size=50 name="Username" type="text" placeholder="Username" />
			<input name="Password" type="Password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<input class="ghost" type="submit" name="submit" value="Sign in" style="background-color: #5783E9; border-radius:10px; cursor: pointer;"> </input>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
		
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<script>
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');
signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

function validateform() {
	var x = document.forms["myform"]["Username"].value;
	var y = document.forms["myform"]["Password"].value;
	if(x == "") {
		alert("Username cannot be empty");
		return false;
	}
	else if(y == "") {
		alert("Password cannot be empty");
		return false;
	}
}
</script>
<?php
if(isset($_POST["submit"])){
session_start();
include('db_config.php');

$_SESSION['username'] = $_POST['Username'];
$username = $_POST['Username'];
$pass = $_POST['Password'];

$query = "select * from donor where username =\"".$username."\" and password =\"".$pass."\"";
$res = $conn->query($query);
//echo $res;

if($res->num_rows>0){
	$row_donor = $res->fetch_assoc();
	/*if($pass != $row_donor['password']){
		echo 'Username and password does not match';
	}*/
	//else{
		$_SESSION['email'] = $row_donor['email'];
		$_SESSION['address'] = $row_donor['address'];
		$_SESSION['phone'] = $row_donor['phone'];
		header('Location: home.php');
	//}
}else{

	echo 'Username does not exist';
	//header('login.html');
}

}
?>
</body>
</html>
