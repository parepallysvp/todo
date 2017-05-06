<html>
<body>
<?php include'./view/header.php';?>
<div class="login">
  <h2>Login Page</h2>
	<form method="post" action="./index.php" >
	<div class="username">  <label> Username:</label><input type="test" name="reg_uname" value="" placeholder="njit email address"/></div>
	<div class="password">  <label> Password:</label><input type="password" name="reg_password" value=""/><br><br></div>
	 <input type="hidden" name="action" value="test_user"/>
          <input type="submit" value="Login" class="Button"/>
	</form>
	<form action="register.php" class="register">
	<input type="submit" value="Register" class="Button"/>
	</form></span>
</div>
<?php include'./view/footer.php';?>
</body>
</html>
