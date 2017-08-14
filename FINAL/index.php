<?php 
	include "header.php"
?>
<?php 
		//http://www.nyekrip.com/cara-membuat-form-login-dengan-php-mysql
		include "config.php";
		if(isset($_POST["submit"])){
			$name = mysql_real_escape_string($_POST["username"]);
			$pass = mysql_real_escape_string($_POST["pass"]);

			$query = "SELECT * FROM user WHERE username='".$name."' AND password='".$pass."'";

			if(!($result = mysqli_query($conn, $query))) {
				print("Could not execute the query"); 
				die(mysqli_connect_error());
			}
			$row = mysqli_fetch_row($result);
			$count = mysqli_num_rows($result);
     		// If result matched $myusername and $mypassword, table row must be 1 row
			if($count == 1) {
				$_SESSION['login_user'] = $name;
				$_SESSION['id'] = $row[0];
				$_SESSION['role'] = $row[3];
			header("location: view_book.php");
			}else {
				print '<script>alert("Your Login Name or Password is invalid")</script>';
			}
			mysqli_close($conn);
		}
		if (isset($_POST['submitReg'])) {
			$name = mysql_real_escape_string($_POST["username"]);
			$pass = mysql_real_escape_string($_POST["pass"]);
			$confirmPass = mysql_real_escape_string($_POST["confirmPassword"]);
			if ($pass != $confirmPass) {
				print '<script>alert("Your Login Name or Password is invalid")</
				script>';
			} else {
				$query = "SELECT * FROM user WHERE username='".$name."'";
				if(!($result = mysqli_query($database, $query))) {
            		print("Could not execute the query"); 
            		die(mysql_error());
	    		}
			}
		}
		?>
	</div>

<style> 
	body {
		background-image: url("mount.jpg");
		width: 100%;
		height: 100%;
		background-size: cover;
		background-attachment: fixed;
		background-repeat: no-repeat;
		background-position: center;
	}

	h2 {
		color:white;
	}
</style>

<body>
<div class="container">
	<div class="row">
		<div class="col-md-offset-5 col-md-3">
			<form class="login-form text-center" method="POST" action="index.php">
				<h2 class="form-signin-heading">Please login first</h2>
				<h2 class="form-signin-heading">or</h2>
				<h2 class="form-signin-heading">Sign Up</h2>
				<label for="username" class="sr-only">Username</label>
				<input type="text" id="username" class="form-control text-center" placeholder="Username" name="username" required="" autofocus=""><br>
				<label for="inputEmail" class="sr-only">Username</label>
				<input type="email" id="inputEmail" class="form-control text-center" placeholder="Email" name="inputEmail" required="" autofocus=""><br>
				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" id="inputPassword" class="form-control text-center" placeholder="Password" name="pass" required=""><br>
				<label for="confirmPassword" class="sr-only">Password</label>
				<input type="password" id="confirmPassword" class="form-control text-center" placeholder="Confirm Your Password" name="confirmPassword" required=""><br>
				<label for="fullName" class="sr-only">Password</label>
				<input type="text" id="fullName" class="form-control text-center" placeholder="Full Name" name="fullName" required=""><br>
				<select class="form-control">
  					<option value="admin">Admin</option>
  					<option value="user">User</option>
  				</select>
				<br>
				<button class="btn btn-lg btn-primary btn-block" type="submit" name="submitReg">Register now</button>
			</form>
		</div>
	</div>
	<div>
</div>
</body>
<?php 
	include "footer.php";
?>