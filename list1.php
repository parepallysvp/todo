<html>
<?php include"./view/headerlist.php";?>
<body>
	<header>
 	<form align="right" action="index.php">
	<input type="hidden" name="action" value='logout'>
	<button>Log out</button>
	</form>
	</header>
	<h1> Welcome <?php echo $_COOKIE['fname'].", ".$_COOKIE['lname']; ?></h1><br/>
  <table>
	<thead>
	<tr>
	   <th colspan="30">Your Incomplete ToDo Items</th>
	</tr>
	 <tr>
	    <th>#</th>
	    <th colspan="1">Todo Item</th>
	    <th colspan="5">Description</th>
	    <th colspan="3">Date</th>
	    <th colspan="3">Time</th>
	    <th colspan="1">  </th>
	    <th colspan="1">  </th>
	    <th colspan="1">  </th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($result as $res):?>
	<tr>
	<td>#</td>
	<td><?php echo $res['todo_item']. '<br />';?></td>
	<td colspan="5"><?php echo $res['description']. '<br/>'; ?> </td>
	<td colspan="3"><?php echo $res['date']. '<br/>'; ?></td>
	<td colspan="3"><?php echo $res['time']. '<br/>'; ?></td>
	<td colspan="1"><form action="index.php" method='post'>
	<input type="hidden" name='id' value='<?php echo $res['id']; ?>'>
	<input type='hidden' name='action' value='edit'>
	<button><i class="material-icons button edit">Edit</i></button></form>
	</td>
	<td colspan="1"> 
	<form action='index.php' method='post'>
	<input type='hidden' name='item_id' value='<?php echo $res['id'];  ?>'>
	<input type='hidden' name='action' value='delete'>
	<button><i class="material-icons button delete">Delete</i></button></form>
	   </td>
	 <td colspan="1">
        <form action='index.php' method='post'>
        <input type='hidden' name='com_id' value='<?php echo $res['id'];  ?>'>
        <input type='hidden' name='action' value='complete'>
        <button><i class="material-icons button edit">complete</i></button></form>
           </td>

	</tr>
	  <?php endforeach; ?>
</tbody>
</table>
<table>
  <thead>
        <tr>
           <th colspan="20">Your Completed ToDo Items</th>
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
        <?php foreach($result2 as $res):?>
        <tr>
        <td>#</td>
        <td><del><?php echo $res['todo_item']. '<br />';?></del></td>
        <td colspan="10"><?php echo $res['description']. '<br/>'; ?></td>
        <td colspan="3"><?php echo $res['date']. '<br/>'; ?></td>
        <td colspan="3"><?php echo $res['time']. '<br/>'; ?></td>
	</td>
        <td colspan="1">
        <form action='index.php' method='post'>
        <input type='hidden' name='item_id' value='<?php echo $res['id'];  ?>'>
        <input type='hidden' name='action' value='delete'>
        <button><i class="material-icons button delete">Delete</i></button></form>
        </td>
	<td colspan="1">
        <form action='index.php' method='post'>
        <input type='hidden' name='incom_id' value='<?php echo $res['id'];  ?>'>
        <input type='hidden' name='action' value='incomplete'>
        <button><i class="material-icons button edit">Incomplete</i></button></form>
           </td>

	</tr>
	<?php endforeach ; ?>
</tbody>
</table>
<table>
<tbody>
	<tr><td colspan="3">Add a new item</td>
	<td><form method ='post' action='addform.php'>
	<button><i class="material-icons button edit">Add</i></button></form></td></tr>
</tbody>
</table> 
 </body>
</html>
