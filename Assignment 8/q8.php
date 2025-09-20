<?php
$age = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

echo "Original Array:\n";
print_r($age);
asort($age);
echo "\nAscending order sort by Value:\n";
print_r($age);
ksort($age);
echo "\nAscending order sort by Key:\n";
print_r($age);
arsort($age);
echo "\nDescending order sort by Value:\n";
print_r($age);
krsort($age);
echo "\nDescending order sort by Key:\n";
print_r($age);
?>
