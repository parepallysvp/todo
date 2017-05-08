<html>
<?php include"./view/headerlist.php";?>
<body>
	<header>
	<form align="right" action="login.php">
	<button>Log out</button>
	</form>
	</header>
	<h1> Welcome <?php echo $_COOKIE['fname'].", ".$_COOKIE['lname']; ?></h1><br/>
  <table>
	<thead>
	<tr>
	   <th colspan="20">Your ToDo Items</th>
	</tr>
	 <tr>
	    <th>#</th>
	    <th colspan="1">Todo Item</th>
	    <th colspan="10">Description</th>
	    <th colspan="3">Date</th>
	    <th colspan="3">Time</th>
	    <th colspan="1">  </th>
	    <th colspan="1">  </th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($result as $res):?>
	<tr>
	<td>#</td>
	<td><?php echo $res['todo_item']. '<br />';?></td>
	<td colspan="10"><?php echo $res['description']. '<br/>'; ?> </td>
	<td colspan="3"><?php echo $res['date']. '<br/>'; ?></td>
	<td colspan="3"><?php echo $res['time']. '<br/>'; ?></td>
	<td><form action="index.php" method='post'>
	<input type="hidden" name='id' value='<?php echo $res['id']; ?>'>
	<input type='hidden' name='action' value='edit'>
	<button><i class="material-icons button edit">Edit</i></button></form>
	</td>
	<td>
	<form action='index.php' method='post'>
	<input type='hidden' name='item_id' value='<?php echo $res['id'];  ?>'>
	<input type='hidden' name='action' value='delete'>
	<button><i class="material-icons button edit">Delete</i></button></form>
	   </td>
	</tr>
	  <?php endforeach; ?>
</tbody>
</table>
<table>
<tbody>
	<tr><td colspan="3">Add a new item</td>
	<td><form method ='post' action='addform.php'>
	<button><i class="material-icons button edit">Add</i></button></td></tr>
</tbody>
</table>
</form> 
 </body>
</html> 
