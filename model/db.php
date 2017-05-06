<?php

function deleteTodoItem($user_id, $todo_id){
  global $db;
  $query='DELETE FROM todos WHERE user_id = :user_id and id = :todo_id';
  $statement = $db->prepare($query);
  $statement->bindValue(':todo_id', $todo_id);
  $statement->bindValue(':user_id', $user_id);
  $statement->execute();
  $statement->closeCursor();
}

function addTodoItem($user_id, $todo_item, $description, $date, $time){
  global $db;
  $query ="INSERT INTO todos (user_id, todo_item, description, date, time) VALUES (:userid, :todo_item, :description, :date, :time)";
  $statement = $db->prepare($query);
  $statement->bindValue(':userid', $user_id);
  $statement->bindValue(':todo_item', $todo_item);
  $statement->bindValue(':description', $description);
  $statement->bindValue(':date', $date);
  $statement->bindValue(':time', $time);
  $statement->execute();
  $statement->closeCursor();
}
function editItem($user_id, $todo_item, $description, $date, $time, $id){
  global $db;
  $query ="UPDATE todos SET user_id = :userid, todo_item = :todo_item, description = :description, date = :date, time = :time WHERE id = :id";
  $statement = $db->prepare($query);
  $statement->bindValue(':userid', $user_id);
  $statement->bindValue(':id', $id);
  $statement->bindValue(':todo_item', $todo_item);
  $statement->bindValue(':description', $description);
  $statement->bindValue(':date', $date);
  $statement->bindValue(':time', $time);
  $statement->execute();
  $statement->closeCursor();
}


function getTodoItems($user_id){
  global $db;
  $query = "SELECT * FROM todos WHERE user_id = :userid  ORDER BY date,time";
  $statement = $db->prepare($query);
  $statement->bindValue(':userid', $user_id);
  $statement->execute();
  $result = $statement->fetchAll();
  $statement->closeCursor();
  return $result;
}
function getTodoItem($id){
  global $db;
  $query = "SELECT * FROM todos WHERE id = :id ";
  $statement = $db->prepare($query);
  $statement->bindValue(':id', $id);
  $statement->execute();
  $result1 = $statement->fetchAll();
  $statement->closeCursor();
  return $result1;
}

function createUser($username, $password, $firstname, $lastname, $phonenumber, $dateofbirth, $gender){
 global $db;
 $query = 'select * from users where username = :name '; 
 $statement = $db->prepare($query);
 $statement->bindValue(':name',$username);
 $statement->execute();
 $result= $statement->fetchAll();
 $statement ->closeCursor();
 $count = $statement->rowCount();
 if($count > 0)
{
	return true;
}else{
 global $db;
 $query = 'INSERT INTO users (username, passwordHash, firstname, lastname, phonenumber, dateofbirth, gender) VALUES (:name, :pass, :fname, :lname, :pnumber, :dob, :gender)';
 $statement = $db->prepare($query);
 $statement->bindValue(':name', $username);
 $statement->bindValue(':pass', $password);
 $statement->bindValue(':fname', $firstname);
 $statement->bindValue(':lname', $lastname);
 $statement->bindValue(':pnumber', $phonenumber);
 $statement->bindValue(':dob', $dateofbirth);
 $statement->bindValue(':gender', $gender);
 $statement->execute();
 $statement->closeCursor();
 return false;
}
}
  function isUserValid($username, $password){
  global $db;
  $query = 'select * from users where username = :name and passwordHash = :pass';
  $statement = $db->prepare($query);
  $statement->bindValue(':name',$username);
  $statement->bindValue(':pass',$password);
  $statement->execute();
  $result=  $statement->fetchAll();
  $statement->closeCursor();
  $count=$statement->rowCount();
  if($count == 1){
       setcookie('login', $username);
       setcookie('my_id', $result[0]['id']);
       setcookie('fname', $result[0]['firstname']);
       setcookie('lname', $result[0]['lastname']);
       setcookie('islogged', true);
       return true;
     }else{
       unset($_COOKIE['login']);
       setcookie('login', false);
       setcookie('islogged', false);
       setcookie('id', false);
       setcookie('firstname', false);
       setcookie('lastname', false);
       return false;
     }
}

function passValid($password){
  global $db;
  $query= 'select * from users where passwordHash = :pass';
  $statement = $db->prepare($query);
  $statement->bindValue(':pass', $password);
  $statement->execute();
  $result = $statement->fetchAll();
  $statement->closeCursor();
  $count= $statement->rowCount();
  if($count == 1){
     return true;
}else{
  return false;
}
}
function userValid($username){
  global $db;
  $query= 'select * from users where username = :name';
  $statement = $db->prepare($query);
  $statement->bindValue(':name', $username);
  $statement->execute();
  $result = $statement->fetchAll();
  $statement->closeCursor();
  $count= $statement->rowCount();
  if($count == 1){
     return true;
}else{
  return false;
}
}
?>
