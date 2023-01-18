<?php

print("De volgende momenten zijn nog beschikbaar:<ul>");
foreach($kappersagenda as $a => $afspraak) {
if($afspraak == "") { 
print("<li>".$tijd."</li>") ;
}
}

?>