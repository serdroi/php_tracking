<?php
  date_default_timezone_set('Europe/Kiev');
  $date = date('ymdHis',time());
  $fndate = date('ymd',time());
  $filecache = "tracking/tr$fndate.log";
  $fhc = fopen($filecache,"a+"); 
  flock($fhc,2);
  $success = fputs($fhc, $date."|".getenv("REMOTE_ADDR")."|".$_SERVER['HTTP_REFERER']."|".getenv("SCRIPT_NAME")."|".getenv("QUERY_STRING")."|".getenv("HTTP_USER_AGENT")."\n\r");
  flock($fhc,3);
  fclose($fhc);
?>
