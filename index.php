<?php
require('./model/db_connection.php');
require('./model/db.php');
$action = filter_input(INPUT_POST, "action");
if($action == NULL) {
	$action="show_login_page";
}
if($action == "show_login_page") {
	include ('login.php');
}else if($action == 'test_user') {
	$username = $_POST['reg_uname'];
	$password = $_POST['reg_password'];
	$suc = isUserValid($username, $password);
	$userverify = userValid($username);
  if($suc == true)
  {
	$result2 = getTodoItem1($_SESSION['my_id']);
	$result= getTodoItems($_SESSION['my_id']);
	include("list.php");
  }else if($suc == false){
          if($userverify == true){
	include ('login1.php');
	}else{
	include ('badinfo.php');
}
}
}else if ($action == 'registrar'){
	$name = filter_input(INPUT_POST, 'reg_username');
  if(isset($name))
  {
	$pass = filter_input(INPUT_POST, "reg_password");
	$fname = filter_input(INPUT_POST, "user_fname");
	$lname = filter_input(INPUT_POST, "user_lname");
	$pnumber = filter_input(INPUT_POST, "user_pnumber", FILTER_VALIDATE_INT);
	$dob = filter_input(INPUT_POST, "dob");
	$gender = filter_input(INPUT_POST, "gender");
	if($pass== NULL || $fname== NULL || $lname== NULL || $pnumber== NULL || $dob == NULL){
		include("wrongdata.php");
	}else{ 
	$exit = createUser($name, $pass, $fname, $lname, $pnumber, $dob, $gender);
	}
    if($exit == true)
    {
	include ("user_exists.php");
    }else{
	include("newUser.php");
  }
}
}else if ($action == 'add'){
  if(!($_POST['todo_item'] == NULL || $_POST['description'] == NULL || $_POST['dateofitem'] == NULL || $_POST['timeofitem'] == NULL))
{
	addTodoItem($_COOKIE['my_id'], $_POST['todo_item'], $_POST['description'], $_POST['dateofitem'], $_POST['timeofitem']);
}else{
	echo"Please the fill the required filds";
}
	$result2 = getTodoItem1($_COOKIE['my_id']);
	$result = getTodoItems($_COOKIE['my_id']);
	include('list1.php');
}else if($action == 'delete'){
  if(isset($_POST['item_id'])){
	$selected=$_POST['item_id'];
        deleteTodoItem($_COOKIE['my_id'], $selected);
}
	$result2 = getTodoItem1($_COOKIE['my_id']);
	$result = getTodoItems($_COOKIE['my_id']);
	include ('list1.php');
}else if($action == 'edit'){
	$result1 = getTodoItem($_POST['id']);
	include('editform.php');
}else if($action == 'edit1'){
 if(!($_POST['todo_item'] == NULL || $_POST['description'] == NULL || $_POST['dateofitem'] == NULL || $_POST['timeofitem'] == NULL))
{
	$id= $_POST['idi'];
	editItem($_COOKIE['my_id'], $_POST['todo_item'], $_POST['description'], $_POST['dateofitem'], $_POST['timeofitem'], $id);
}else{
	echo"please Fill All the fields";
}
	$result2 = getTodoItem1($_COOKIE['my_id']);
	$result = getTodoItems($_COOKIE['my_id']);
	include ('list1.php');
}else if($action == 'complete'){
        $status= 1;
        statusupdate($_POST['com_id'], $status);
        $result2 = getTodoItem1($_COOKIE['my_id']);
	$result = getTodoItems($_COOKIE['my_id']);
	include('list1.php');
}else if($action == 'incomplete'){
        $status= 0;
        statusupdate1($_POST['incom_id'], $status);
        $result2 = getTodoItem1($_COOKIE['my_id']);
        $result = getTodoItems($_COOKIE['my_id']);
        include('list1.php');
}

?>
