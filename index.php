<?php
  class User
  {
      public $name;
      public $username;
      public $email;

     function addFriend($name)
     {
       echo $name . " added a friend <br/>";
     }

     function postStatus($name)
     {
       echo $name . " posted a status <br/>";
     }
  }

  $user1 = new User();
  $user1->addFriend('John Russel Dacanay');
  $user1-> postStatus('John Russel Dacanay');
?>
