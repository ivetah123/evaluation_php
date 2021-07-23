<?php

$tab1 = array(9, 10, 20, 3, 25, 2, 4);
$tab2 = array(2, 5, 13, 3, 1, 11, 7);
$result = array();

function addArrays($tab1, $tab2) {
    if (is_array($tab1) && (is_array($tab2))) {
        for ($i = 0; $i < count($tab1); $i++) {
            $result[$i] = $tab1[$i] + $tab2[$i];
        }
        return $result;
    } else 
        echo 'error in the array arguments';
    
}

echo '<pre>';
var_dump(addArrays($tab1, $tab2));
echo '</pre>';
