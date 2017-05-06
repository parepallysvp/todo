<html>
<head>

</head>
<body>
	<form align="right" action="login.php">
	<input type="submit" value="log out">
	</form>
	<h1> To do list system</h1>
	<h3> Welcome <?php echo $_COOKIE['fname'].", ".$_COOKIE['lname']; ?></h3><br/>
	<p> Below, you may find your to-do items </p><br/> 
  <table>
	<?php foreach($result as $res):?>
	<tr>
	<td><a href='detail.php'><?php echo $res['todo_item']. '<br />';?></a></td>
	<td><?php echo $res['date']. '<br/>'; ?></td>
	<td><?php echo $res['time']. '<br/>'; ?></td>
	<td>
	<form action='index.php' method='post'>
	<input type='hidden' name='item_id' value='<?php echo $res['id']  ?>'>
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
