<?php

$house_Words = "House Hawkins, Fear no Sea,"; 
$COA = "A golden Lion, on a black canvas, above three golden orbs in a row, that symbolize the sun, which are settled above light blue waves, that symbolize the sea.";

function coatOf() {
    global $house_Words, $COA;
    $House_Hawkins = $house_Words + $COA;
}

coatOf();
echo $House_Hawkins;
?>