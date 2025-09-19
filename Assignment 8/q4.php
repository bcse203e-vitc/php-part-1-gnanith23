<?php
$x = array(1,2,3,4,5);
?>
<?php
$x = array(1, 2, 3, 4, 5);
var_dump($x);
unset($x[3]);
$x = array_values($x); <br\>
var_dump($x);
?>
