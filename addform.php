<html>
<body>
<h4> Add A Todo Item</h4>
<form method="post" action="index.php">
<label>Todo_Item :</label><input type="text" name="todo_item" placeholder="Title"><br/>
<label>Description:</label><input type="text" name="description" placeholder="Type your Description in 140 characters"><br/>
<label>Date :</label><input type="date" name="dateofitem"><br/>
<label>Time :</label><input type="time" name="timeofitem"><br/>
<input type="hidden" name="action" value="add">
<input type="submit" value="Add">
</form>
</body>
</html>
