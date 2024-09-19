
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<style>
		body {
			font-family: Arial, sans-serif;
		}
		
		.form-container {
			width: 300px;
			margin: 50px auto;
			padding: 20px;
			border: 1px solid #ddd;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		
		.form-control {
			width: 100%;
			height: 40px;
			margin-bottom: 20px;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}
		
		.btn-submit {
			width: 100%;
			height: 40px;
			background-color: #4CAF50;
			color: #fff;
			padding: 10px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		
		.btn-submit:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<div class="form-container">
		<h2>Registration Form</h2>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<input type="text" name="name" class="form-control" placeholder="Full Name">
			<input type="email" name="email" class="form-control" placeholder="Email Address">
			<input type="password" name="password" class="form-control" placeholder="Password">
			<button type="submit" name="register" class="btn-submit">Register</button>
		</form>
	</div>
</body>
</html>