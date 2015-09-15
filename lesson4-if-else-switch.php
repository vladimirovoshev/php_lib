<?php
// File creation date is : 9/15/15 (mm/dd/yy)

/*if and elseif Statement*/

$value0 = 7; // change value to '5', then '6', then '7'
if ($value0 < 6) {
    var_dump("if working");
} elseif ($value0 <= 6) {
    var_dump("elseif working");
} else {
    var_dump("else working");
}

/*Switch Statement*/

$value1 = 'A'; // change value to '1', then '2', then '3'
switch ($value1) {
    case 1:
        var_dump('value = 1');
        break;
    case 2:
        var_dump('value = 2');
        break;
    case 3:
        var_dump('value = 3');
        break;
    default:
        var_dump("default value");
}
