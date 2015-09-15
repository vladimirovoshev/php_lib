<?php
// File creation date is : 9/14/15 (mm/dd/yy)
define("first_number", 1);
define("first_text", 'example_text', true); // the best option (string value)

function globalConstant()
{
    echo first_text;
}

/*Assignment Operators*/

$plus = 100;
$plus += 99;
$minus = -100;
$minus -= 99;
$multiplication = 10;
$multiplication *= 9;
$division = 10;
$division /= 5;

/*Comparison Operators*/

$num0 = 100;
$num1 = 100;
$num2 = 101;
$equal = $num0 == $num1;
$identical = $num0 === $num1;
$not_equal = $num0 != $num2;
$not_identical = $num0 !== $num2;
$greater = $num2 > $num0;
$less = $num0 < $num2;
$greater_equal = $num1 >= $num0;
$less_equal = $num0 <= $num1;

/*Increment Operators*/

$num3 = 10;
$num4 = 10;
$pre_increment = ++$num3;
$post_increment = $pre_increment++;
$pre_decrement = --$num4;
$post_decrement = $pre_decrement--;

/*Logical Operators*/

$num5 = 91;
$num6 = 92;
$and = $num5 and $num6; // we can user '&&' instead 'and'
$or = $num5 or $num6; // we can use '||' instead 'or'
$not = $num5 !== $num6;

/*String Operators*/

$text = 'user';
$text1 = 'name';
$concatenation = $text . $text1;
$concatenation_assignment = $text .= $text1;

/*Array Operators*/

$array = array("A" => "first", "B" => "second");
$array1 = array('A' => 'first', 'B' => 'second', 'E' => 'fifth');
$union = $array + $array1;
$equality = $array == $array1;
$identity = $array === $array1; // strong type (not recommended for use)
$in_equality = $array != $array1;
$non_identity = $array1 !== $array1; // strong type (not recommended for use)

var_dump(first_number, first_text, '<br />',
    $plus, '<br />', $minus, '<br />', $multiplication, '<br />', $division,
    '<br />', $equal, '<br />', $identical, '<br />', $not_equal, '<br />', $not_identical,
    '<br />', $greater, '<br />', $less, '<br />', $greater_equal, '<br />', $less_equal,
    '<br />', $pre_increment, '<br />', $post_increment, '<br />', $pre_decrement, '<br />', $post_decrement,
    '<br />', $and, '<br />', $or, '<br />', $not, '<br />', $concatenation, '<br />', $concatenation_assignment,
    '<br />', $union, '<br />', $equality, '<br />', $identity, '<br />', $in_equality, '<br />', $non_identity);
globalConstant();