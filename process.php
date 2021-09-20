<?php
  
  $d =  $_GET['score'];

  if($d >= 80){
    echo "your grade is A";
  }
   else if ($d >= 75){
     echo "your grade is B+";
  }
   else if ($d >= 70){
    echo "your grade is B";
  }
   else if ($d >= 65){
     echo "your grade is C+";   
  }
   else if ($d >= 60){
     echo "your grade is C";   
  }
   else if ($d >= 55){
     echo "your grade is D+";   
  }
   else if ($d >= 50){
     echo "your grade is D";   
  }
   else {
     echo "sorry, you got grade F.";
?>
