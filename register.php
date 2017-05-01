<html>
<body>
  <h1> this is a register page</h1>
  <form method = 'post' action ='index.php'>
  <strong> EmailAddress: </strong> <input type='test' name='reg_username'  value="" placeholder="This will be your username" /></br></br>
  <strong> Password: </strong> <input type="password" name="reg_password" value="" /></br></br>
  <label> First Name: </label> <input type='text' name="user_fname" value=""/> </br></br>
  <label> last  Name: </label> <input type='text' name="user_lname" value=""/> </br></br>
  <label> Phone Number: </label> <input type='text' name="user_pnumber" value="" placeholder="Just your 10 digit number"/> </br></br>
  <label> Date: </label> <input type='date' name="user_fname" value=""/> </br></br>
 <label> Gender </label></br>
 <span> <input type="radio" name="gender" value="male" checked> Male
 <input type="radio" name="gender" value="female"> Female
 </span></br>
<input type="hidden" name="action" value="registrar">
<input type='submit' value='register'>
</form>

<form action="login.php" method='post'>
  <input type='submit' value='try to login'>
</form>
</body>

</html>
