<?php
// File creation date is : 9/14/15 (mm/dd/yy)

$decimal = 123456789;
$decimalNegative = -123456789;
$binary = 0b11111111;

$divisionInt = ((int)(25 / 7));
$divisionRound = round(25 / 7);
$divisionDefault = 25 / 7;

var_dump($decimal, '<br />', $decimalNegative, '<br />', $binary, '<br />',
    $divisionDefault, '<br />', $divisionInt, '<br />', $divisionRound, '<br />');