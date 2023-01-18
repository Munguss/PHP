<?php

$zwemclubs = ['De spartelkuikens'=>25, 'De waterbuffels'=>32, 'Plonsmderin'=>11, 'Bommetje'=>23];
$icons = [0, 0, 0, 0];

foreach ($zwemclubs as $x => $value){
    $original_value = $value;
    $icons_count = 0;
    while ($value >= 5) {
        $value -= 5;
        $icons_count++;
    }
    echo "$x = $original_value members, $icons_count icons. <br>";
}

?>