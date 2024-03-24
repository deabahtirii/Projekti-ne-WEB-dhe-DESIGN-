
<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<style>
	html, body {
    height: 100%;
}

body {
    display: flex;
    align-items: center;
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #f5f5f5;
}

.form-signin {
    width: 100%;
    max-width: 330px; 
    padding: 15px;
    margin: auto;
}

.form-signin .checkbox {
    font-weight: 400;
}

.form-signin .form-floating:focus-within {
    z-index: 2;
}

.form-signin input[type=email] {
    margin-bottom: -1px;
}

.form-signin input[type=password] {
    margin-bottom: 10px;
}

.form-floating {
    margin: 10px;
}

.btn {
    margin-bottom: 20px;
}


</style>


</head>
<body class="text-center">
	<main class="form-signin">
		<form action="loginLogic.php" method="post">
			<img class="mb-4" src="images/logo.jpg" alt="" width="72" height="57">
			<h1 class="h3 mb-3 fw-normal">Please sign in </h1>

			<div class="form-floating">
				<input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
				<label for="floatingInput">Username</label>
			</div>

			<div class="form-floating">
				<input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="password">
				<label for="floatingPassword">Password</label>
			</div>

			<div class="checkbox mb-3">
				<label>
					<input type="checkbox" value="remember-me"> Remember me
				</label>
			</div>
			<button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Log In</button>
			<span>Not Registered? </span> <a href="signup.php"> Sign Up </a>

		</form>
	</main>

</body>
</html>