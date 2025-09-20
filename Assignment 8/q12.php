<?php
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
$lower = array_map('strtolower', $Color);
echo "Values are in lower case.\n";
print_r($lower);
$upper = array_map('strtoupper', $Color);
echo "Values are in upper case.\n";
print_r($upper);
?>
