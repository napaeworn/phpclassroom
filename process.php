<?php
  
  $d =  $_GET['score'];

  if($d >= 80){
    echo "your grade is 4";
  }
  else if ($d >= 75){
     echo "your grade is 3.5";
  }
  else if ($d >= 70){
    echo "your grade is 3";
  }
  else if ($d >= 65){
     echo "your grade is 2.5";   
  }
  else if ($d >= 60){
     echo "your grade is 2";   
  }
  else if ($d >= 55){
     echo "your grade is 1.5";   
  }
  else if ($d >= 50){
     echo "your grade is 1";   
  }
  else {
     echo "sorry, you got grade 0.";
  }
?>
