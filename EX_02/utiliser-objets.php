<?php
 
$date1 = new DateTime ("now");
echo ("<p>") . $date1->format ("Y-m-d H:i:s") . "</p>";
 
$date2 = new DateTime ("2020-06-22 9:00:00");
echo ("<p>") . $date2->format("Y-m-d H:i:s") . "</p>";
 
$diff = $date1 -> diff ($date2);
$diffh = $date1 -> diff ($date2);
$diffi = $date1 -> diff ($date2);
 
echo $diff -> d."Jours,";
echo $diffh -> h."heures,";
echo $diffi -> i."minutes depuis le début de l'ISCC.";
 
?>