<?php
  $json = file_get_contents('https://covid19.ddc.moph.go.th/api/Cases/today-cases-all?fbclid=IwAR1QwPaOo7qvogk-Fk8jsEzA2v2cLgg_dIyiMuwIpdhh2P-bxg16UcHBssU');
  $data = json_decode($json);

  foreach ( $data[0] as $key => $val ){
    echo $key.":".$val."<br>";
  }

?>
