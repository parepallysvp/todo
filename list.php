<?php
echo "<h1> To Do list system<h1>";
echo "welcome, " . $_COOKIE['login'] . '<br/>';
echo "below, you may find your to-do items <br/><br />";
?>
<html>
<head>

</head>
<body>
  <table>
	<?php foreach($result as $res):?>
	<tr>
	   <td><a href='detail.php'><?php echo $res['todo_item']. '<br />';?></a></td>
	   <td>
	     <form action='index.php' method='post'>
	<input type='hiiden' name='item_id' value='<?php echo $res['id']  ?>'>
	<input type='hidden' name='action' value='delete'>
	<input type='submit' value="delete"></form>
	   </td>
	</tr>
	  <?php endforeach; ?>

	<tr>
	 <form action="add_todo.php">
	  <input type="submit" value="Add"/>
	 </form>
	</tr>
	</table>
	<form method = 'post' action='index.php'>
	<strong> Description: </strong> <input type='text' name='descripton'/><br>
	<input type='hidden' name='action' value='add'><br>
	<input type="submit" value="Add"/>
</form> 
 </body>
</html> 
