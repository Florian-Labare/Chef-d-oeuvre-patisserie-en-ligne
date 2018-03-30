<?php
require __DIR__.'/../Models/usersModel.php';

if(isset($_POST['register'])) {

  if(isset($_POST['name'], $_POST['firstname'], $_POST['mail'], $_POST['password'], $_POST['confirmation_password']))
  {
    $name=htmlspecialchars($_POST['name']);
    $firstname=htmlspecialchars($_POST['firstname']);
    $mail=htmlspecialchars($_POST['mail']);
    $password=sha1($_POST['password']);
    $confirmation_password=sha1($_POST['confirmation_password']);

    if($password == $confirmation_password) {
      User::createUser($name, $firstname, $mail, $password);
    }
  }

}elseif(isset($_POST['login'])) {

}

require __DIR__.'/../Views/authUsers.html';
