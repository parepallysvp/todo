<html>
<?php include'./view/header.php';?>
<body>
<div class="login-page">
<div class="form">
<?php foreach ($result1 as $res):?>
<form method="post" action="index.php">
  <input type="text" name="todo_item" value="<?php echo $res['todo_item']; ?>" maxlength="25" required><br/>
  <input type="text" name="description" value="<?php echo $res['description'];?>" maxlength="140" size="100" required><br/>
  <input type="date" name="dateofitem" value="<?php echo $res['date'];?>" required><br/>
  <input type="time" name="timeofitem" value="<?php echo $res['time'];?>" required><br/>
  <input type="hidden" name="idi" value="<?php echo $res['id'];?>">
  <input type="hidden" name="action" value="edit1">
  <button>Edit</button>
</form>
<?php endforeach ;?>
</div>
</div>
</body>
</html>
