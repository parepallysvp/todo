<?php
echo "<h1> To Do list system<h1>";
echo "welcome, " . $_COOKIE['login'] .$_COOKIE['my_id']. '<br/>';
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
	<input type='hidden' name='item_id' value='<?php echo $res['id']  ?>'>
	<input type='hidden' name='action' value='delete'>
	<input type='submit' value="delete"></form>
	   </td>
	</tr>
	  <?php endforeach; ?>

	<!-- <tr>
	 <form action="add_todo.php">
	  <input type="submit" value="Add"/>
	 </form>
	</tr>-->
	</table>
	<form method ='post' action='index.php'>
	<span> <strong> Description: </strong> <input type='text' name='description'/>
	<input type='hidden' name='action' value='add'>
	<input type="submit" value="Add"/></span>
</form> 
 </body>
</html> 
