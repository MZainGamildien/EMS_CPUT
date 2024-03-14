
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="server.php">
  	<div class="input-group">
  		<label>Email</label>
  		<input type="text" id="Email" placeholder="Enter  Email" name="email" required>
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="text" id="password" placeholder="Enter password" name="password" required>
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a sign up? <a href="registration.html">Sign up</a>
  	</p>
  </form>
</body>
</html>