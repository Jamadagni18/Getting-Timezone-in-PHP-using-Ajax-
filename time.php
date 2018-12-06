<?php

$tz=$_POST['timezone'];

if ($tz) {
    $ttz = new DateTimeZone( $tz);
    $now = new DateTime( 'now', $ttz); // DateTime object corellated to user's timezone
    echo $now->format('Y-m-d H:i:s'); 
   
} else {
   // we can't determine a timezone - do something else...
   echo "error";
}



?>