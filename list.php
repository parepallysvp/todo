<html>
<head>

</head>
<body>
	<header>
	<form align="right" action="login.php">
	<input type="submit" value="log out" class="button">
	</form>
	</header>
	<h2> To do list system</h2>
	<h3> Welcome <?php echo $_COOKIE['fname'].", ".$_COOKIE['lname']; ?></h3><br/>
	<h3> Below, you may find your to-do items </h3><br/> 
  <table>
	<?php foreach($result as $res):?>
	<tr>
	<td><a href='detail.php'><?php echo $res['todo_item']. '<br />';?></a></td>
	<td><?php echo $res['description']. '<br/>'; ?> </td>
	<td><?php echo $res['date']. '<br/>'; ?></td>
	<td><?php echo $res['time']. '<br/>'; ?></td>
	<td><form action="index.php" method='post'>
	<input type="hidden" name='id' value='<?php echo $res['id']; ?>'>
	<input type='hidden' name='action' value='edit'>
	<input type="submit" value='Edit'></form>
	</td>
	<td>
	<form action='index.php' method='post'>
	<input type='hidden' name='item_id' value='<?php echo $res['id'];  ?>'>
	<input type='hidden' name='action' value='delete'>
	<input type='submit' value="delete"></form>
	   </td>
	</tr>
	  <?php endforeach; ?>

	</table>
	<form method ='post' action='addform.php'>
	<span><label> Add a new item</label><input type="submit" value="Add"/></span>
</form> 
 </body>
</html> 
