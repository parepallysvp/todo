<html>
<?php include'./view/header.php';?>
<body>
<h1> Add Todo Item</h1>
<div class="login-page">
<div class="form">
<form method="post" action="index.php">
<input type="text" name="todo_item" placeholder="Title" maxlength="25"><br/>
<input type="text" name="description" placeholder="Type your Description in 140 characters" maxlength="140" size="50"><br/>
<input type="date" name="dateofitem" placeholder="Date"><br/>
<input type="time" name="timeofitem" placeholder="Time"><br/>
<input type="hidden" name="action" value="add">
<button>Add</button>
</form>
</div>
</div>
</body>
</html>
