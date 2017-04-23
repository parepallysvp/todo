<?php
require('db_connection.php');
require('db.php');
$action = filter_input(INPUT_POST, "action");
if($action == NULL)
{
	$action="show_login_page";
}
if($action == "show_login_page")
{
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
}
?>
