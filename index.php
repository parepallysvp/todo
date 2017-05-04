<?php
require('./model/db_connection.php');
require('./model/db.php');
$action = filter_input(INPUT_POST, "action");
if($action == NULL) {
	$action="show_login_page";
}
if($action == "show_login_page") {
	include('login.php');
}else if($action == 'test_user') {
	$username = $_POST['reg_uname'];
	$password = $_POST['reg_password'];
	$suc = isUserValid($username, $password);
  if($suc == true)
  {
	$result= getTodoItems($_COOKIE['my_id']);
	include('list.php');
  }else {
	include('badinfo.php');
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
    }else {
	include("newUser.php");
    }
  }
}else if ($action == 'add'){
  if(isset($_POST['description']))
{
	addTodoItem($_COOKIE['my_id'], $_POST['description']);
}
	$result = getTodoItems($_COOKIE['my_id']);
	include('list.php');
}else if($action == 'delete'){
  if(isset($_POST['item_id'])){
	$selected=$_POST['item_id'];
        deleteTodoItem($_COOKIE['my_id'], $selected);
}
	$result = getTodoItems($_COOKIE['my_id']);
	include ('list.php');
}
?>
