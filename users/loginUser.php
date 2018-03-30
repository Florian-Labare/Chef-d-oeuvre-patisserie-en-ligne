<?php
require __DIR__.'/../Models/usersModel.php';

  if(isset($_POST['login']))
   {
    if(isset($_POST['mail'], $_POST['password']))
     {
       $mail=htmlspecialchars($_POST['mail']);
       $password=sha1($_POST['password']);
       User::loginUser($mail, $password);
    }
  }
require __DIR__.'/../Views/authUsers.html';
