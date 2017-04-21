<?php

function deleteTodoItem($user_id, $todo_id){
  global $db;
  $query='delete from todos where id = :todo_id and user_id = :user_id';
  $statement = $db->prepare($query);
  $statement->bindValue(':userid', $user_id);
  $statement->bindValue(':todo_text', $todo_id);
  $statement->execute();
  $statement->closeCursor();


}

function addTodoItem($user_id, $todo_text){
global $db;
$query ="INSERT INTO todo(user_id, todo_item) values (:userid, :todo_text)";
$statement = $db->prepare($query);
  $statement->bindValue(':userid', $user_id);
  $statement->bindValue(':todo_text', $todo_text);
  $statement->execute();
  $statement->closeCursor();
  }

function getTodoItems($user_id) {
  global $db;
  $query = "SELECT * FROM todos WHERE user_id = :userid";
  $statement = $db->prepare($query);
  $statement->bindValue(':userid', $user_id);
  $statement->execute();
  $result = $statement->fetchAll();
  $statement->closeCursor();
  return $result;
}



 function createUser($username, $password){
 global $db;
 $query = 'select * from users where username = :name '; 
 $statment = $db->prepare($query);
 $statment->bindValue(':name',$username);
 $statement->execute();
 $result= $statement->fetchAll();
 $statement ->closeCursor();
 $count = $statement=->rowCount();
 if($count > 0)
{
	return true;
}else{
 $query = 'insert into users (username.passwordHash) values (:name, :pass)';
 $statement = $db->prepare($query);
 $statement->bindValue(':name', $username);
 $statemtnt->bindValue(':pass', $password);
 $statement->execute();
 $statement->closeCursor();
 return false;
}


function isUserValid($username, $password){
  global $db;
  $query = 'select * from users where username = :name and psswordHash = :pass';
  $statement = $db->prepare($query);
  $statement->bindValue(':name',$username);
  $statement->bindValue(':pass',$password);
  $statement->execute();
  $result=$statement->fetchAll();
  $statement->closeCursor();

  $count=$statement->rowCount();
if($count == 1){
       setcookie('login', $username);
       setcookie('my_id', $result[0]['id']);
       setcookie('isLogged', true);
       return true;
     }else{
       unset($_COOKIE['login']);
       setcookie('login', false);
       setcookie('isLogged', false);
       setcookie('my_id', false);
       return false;
     }
}
?>
