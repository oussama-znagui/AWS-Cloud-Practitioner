<?php
include '../model/user.php';
if(!$_POST['username']){
    header('Location: ../view/index.php');
}
$Username = $_POST['username'];
$user = new User(null,$Username);
if($user->chekUser()){
    $user->addNewUser();
    $_SESSION['username'] = $user->__get("name");
    header("Location: quiz.php");
}
else{
    
    $_SESSION['username'] = $user->__get("name");
    header("Location: ../view/quiz.php");
}
