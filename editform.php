<html>
<body>
<?php foreach ($result1 as $res):?>
<form method="post" action="index.php">
  <label>Todo_Item :</label><input type="text" name="todo_item" value="<?php echo $res['todo_item']; ?>" maxlength="25"><br/>
  <label>Description:</label><input type="text" name="description" value="<?php echo $res['description'];?>" maxlength="140" size="100"><br/>
  <label>Date :</label><input type="date" name="dateofitem" value="<?php echo $res['date'];?>"><br/>
  <label>Time :</label><input type="time" name="timeofitem" value="<?php echo $res['time'];?>"><br/>
  <input type="hidden" name="idi" value="<?php echo $res['id'];?>">
  <input type="hidden" name="action" value="edit1">
 <input type="submit" value="Edit">
</form>
<?php endforeach ;?>
</body>
</html>
