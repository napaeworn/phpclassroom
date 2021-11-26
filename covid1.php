<?php
  echo "อิอิ";
  $json = file_get_contents('https://covid19.ddc.moph.go.th/api/Cases/today-cases-all');
  echo $json;
?>
