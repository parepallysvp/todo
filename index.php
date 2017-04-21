<?php
require('db_connection.php');
require('db.php');
$action=filter_input(INPUT_POST, 'action');
if($action == NULL ){
$action = "show_login_page";
}
if($action == "show_login_page"){
 include('login.php');
}else if($action == 'test_user'){
 $username = $_POST['reg_uname'];
 $password = $_POST['reg_password'];
 $suc = isUserValid($username, $password);
if($suc == true)
{
 $result= getTodoItems($_COOKIE['my_id']);
 include('list.php');
}else {
 header ('location : badinfo.php');
}
}else if ($action == 'registrar'){
 $name = filter_input(INPUT_POST, 'reg_uname');
 if(isset($name))
{
 $pass = filter_input(INPUT_POST, 'reg_password');
 $exit = createUser($name, $pass);

 if($exit == true)
 {
 include ("location: user_exists.php");
}else {
  header("location: login.php");
}
}
}else if ($action == 'add')
{
if (($_POST['description'] and $_POST['description']))
{
  addTodoItem($_COOKIE['my_id'],$_POST['description']);
}
$result = getTodoItems($_COOKIE['my_id']);
include('list.php');
}else if($action == 'delete'){
if(isset($_POST['item_id'])){
	$selected=$_POST['item_id'];
	deleteTodoItem($_COOKIE['my_id']);
}
$result = getTodoItems($_COOKIE['my_id']);
include ('list.php');
}
?>
