<?php
// File creation date is : 9/15/15 (mm/dd/yy)

$var0 = 7;
if ($var0 < 6) {
    var_dump("if working");
} elseif ($var0 <= 6) {
    var_dump("elseif working");
} else {
    var_dump("else working");
}

$var1 = 'A';
switch ($var1) {
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