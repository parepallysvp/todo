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
}
?>
