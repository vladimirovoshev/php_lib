<?php
// File creation date is : 9/14/15 (mm/dd/yy)

define("first_number", 1);
define("first_text", 'example_text', true);
function globalConstant()
{
    echo first_text;
}

//Assignment Operators
$plus = 100;
$plus += 99;
$minus = -100;
$minus -= 99;
$multiplication = 10;
$multiplication *= 9;
$division = 10;
$division /= 5;

//Comparison Operators
$var0 = 100;
$var1 = 100;
$var2 = 101;
$equal = $var0 == $var1;
$identical = $var0 === $var1;
$not_equal = $var0 != $var2;
$not_identical = $var0 !== $var2;
$greater = $var2 > $var0;
$less = $var0 < $var2;
$greater_equal = $var1 >= $var0;
$less_equal = $var0 <= $var1;

//Increment Operators
$var3 = 10;
$var4 = 10;
$pre_increment = ++$var3;
$post_increment = $pre_increment++;
$pre_decrement = --$var4;
$post_decrement = $pre_decrement--;

//Logical Operators
$var5 = 91;
$var6 = 92;
$and = $var5 and $var6; // we can user '&&' instead 'and'
$or = $var5 or $var6; // we can use '||' instead 'or'
$not = $var5 !== $var6;

//String Operators
$var7 = 'user';
$var8 = 'name';
$concatenation = $var7 . $var8;
$concatenation_assignment = $var7 .= $var8;

//Array Operators
$var9 = array("A" => "first", "B" => "second");
$var10 = array('A' => 'first', 'B' => 'second', 'E' => 'fifth');
$union = $var9 + $var10;
$equality = $var9 == $var10;
$identity = $var9 === $var10;
$in_equality = $var9 != $var10;
$non_identity = $var9 !== $var10;

var_dump(first_number, first_text, '<br />',
    $plus, '<br />', $minus, '<br />', $multiplication, '<br />', $division,
    '<br />', $equal, '<br />', $identical, '<br />', $not_equal, '<br />', $not_identical,
    '<br />', $greater, '<br />', $less, '<br />', $greater_equal, '<br />', $less_equal,
    '<br />', $pre_increment, '<br />', $post_increment, '<br />', $pre_decrement, '<br />', $post_decrement,
    '<br />', $and, '<br />', $or, '<br />', $not, '<br />', $concatenation, '<br />', $concatenation_assignment,
    '<br />', $union, '<br />', $equality, '<br />', $identity, '<br />', $in_equality, '<br />', $non_identity);
globalConstant();