<?php
  
  $username =  $_GET['data1'];
  $password =  $_GET['data2'];

  if($username == "admin" && $password == "1234"){
    echo "welcome to your account";
  }
  else {
    echo "Username or Password was incorrect";
  }

?>
