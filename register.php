<html>
<?php include'./view/header.php';?>
<body>
  <h1>Register</h1>
  <div class="login-page">
  <div class="form">
  <form method = 'post' action ='index.php'>
   <input type='test' name='reg_username'  value="" placeholder="Email Address" required/>
   <input type="password" name="reg_password" value="" placeholder="Password" required/>
   <input type='text' name="user_fname" value="" placeholder="Firstname" required/> </br></br>
   <input type='text' name="user_lname" value="" placeholder="Last Name" required/>
   <input type='number' name="user_pnumber" value="" placeholder="Phone Number" maxlength="10" required/> </br></br>
   <input type='date' name="dob"  value="" placeholder="Date of birth" required/> </br></br>
 <p class="message"> Gender </p>
  <input type="radio" name="gender" value="male" checked> Male
 <input type="radio" name="gender" value="female"> Female
 
<input type="hidden" name="action" value="registrar">
<button>Register</button>
</form>

<form action="login.php" method='post'>
<button>Back to login</button>
</form>
</div>
</body>
</html>
