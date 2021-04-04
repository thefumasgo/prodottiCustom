<html>
	<head>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<script>
			//funzione per controllare che le due password inserite siano uguali
			function controlla(){
				var pwd1 = document.getElementById("idPwd1").value;
				var pwd2 = document.getElementById("idPwd2").value;
				if(pwd1 == pwd2)
					return true;
				else
				{
					alert("PASSWORD DIVERSE RIPROVA");
					return false;
				}
			}
		</script>
	</head>
	<body>
		<div class='container'>
			<form class='form-signin' method="GET" action="chkRegister.php" onsubmit="return controlla()">
				<h1 class="form-signin-heading text-muted">Register</h1>
				<p><input type="text" name="nameUser" class="form-control" placeholder="Username" required autofocus></p>
				<p><input type="password" id="idPwd1" name="namePwd1" class="form-control" placeholder="Password" required></p>
				<p><input type="password" id="idPwd2" name="namePwd2" class="form-control" placeholder="Password" required></p>
				<input type="submit" class="btn btn-lg btn-primary btn-block" value='Register'>
				<button onclick = "window.location = 'index.php'" class="btn btn-lg btn-primary btn-block">Login</button>
			</form>
		</div>
	</body>
</html>