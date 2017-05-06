<html>
<body>
<?php include"./view/header.php"?>
<h3>Welcome <?php $_COOKIE['fname'];?>, your account has been created. Now you can log in</h3>
<form action="login.php">
<input type="submit" value="login page" />
</form>
<?php include"./view/footer.php";?>
</body>
</html>

