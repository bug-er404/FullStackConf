<?php
include 'functions.inc';

$a=1;
$b=2;

echo "BEFORE: ";
echo "a=". $a . " ,b=". $b . "<br>";
test();
echo "AFTER: ";
echo "a=". $a . " ,b=". $b . "<br>";



echo sum($a, $b);

