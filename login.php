<html>
<?php include'./view/header.php';?>
<body>
  <h1>Login</h1>
<div class="login-page">
<div class="form">
	<form method="post" action="./index.php" >
	 <input type="test" name="reg_uname" value="" placeholder="Username" required>
	 <input type="password" name="reg_password" value="" placeholder="Password" required/ >
	 <input type="hidden" name="action" value="test_user"/>
         <button>login</button>
	</form>
	<form action="register.php">
	<button>register</button>
	</form>
</div>
</div>
</body>
</html>
