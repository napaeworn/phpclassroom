<?php
  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-all&quot;);
  $data = json_decode($json);


  echo "<table border='1'>";
   for($i=0;$i<8;$i++){
          echo"<tr>foreach ( $data[0] as $key => $val ){
    echo $key.":".$val."<br>";
  }</tr>";
   
  echo "</table>";
?>
