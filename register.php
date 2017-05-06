<html>
<body>
  <?php include'./view/header.php'?>
  <div class="login">
  <h2>Register</h2>
  <form method = 'post' action ='index.php'>
  <label> EmailAddress: </label> <input type='test' name='reg_username'  value="" placeholder="This will be your username" /></br></br>
  <label> Password: </label> <input type="password" name="reg_password" value="" /></br></br>
  <label> First Name: </label> <input type='text' name="user_fname" value=""/> </br></br>
  <label> last  Name: </label> <input type='text' name="user_lname" value=""/> </br></br>
  <label> Phone Number: </label> <input type='number' name="user_pnumber" value="" placeholder="Just your 10 digit number"/> </br></br>
  <label> Date of birth: </label> <input type='date' name="dob"  value=""/> </br></br>
 <label> Gender </label></br>
 <span> <input type="radio" name="gender" value="male" checked> Male
 <input type="radio" name="gender" value="female"> Female
 </span></br>
<input type="hidden" name="action" value="registrar">
<input type='submit' value='register' class="button">
</form>

<form action="login.php" method='post'>
  <input type='submit' value='Back to login' class="button">
</form>
</div>
<?php include'./view/footer.php';?>
</body>

</html>
