<html>
    <head>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <body>
		<div class='container'>
			<form class='form-signin' method="GET" action="chkLogin.php">
				<h1 class="form-signin-heading text-muted">Sign In</h1>
				<p><input type="text" name="nameUser" class="form-control" placeholder="Username" required autofocus></p>
				<p><input type="password" name="namePwd" class="form-control" placeholder="Password" required></p>
				<button type="submit" class="btn btn-lg btn-primary btn-block">Login</button>
				<button onclick = "window.location = 'register.php'" class="btn btn-lg btn-primary btn-block">Register</button>
			</form>
		</div>
    </body>
</hmtl>