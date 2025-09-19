<?php
$json_string = '{"Title": "The man", "Author": "gurjanpreet", "Detail": {"Publisher": "gnanith"}}';
$data = json_decode($json_string, true);
echo "Title : " . $data['Title'] . "<br>";
echo "Author : " . $data['Author'] . "<br>";
echo "Publisher : " . $data['Detail']['Publisher'] . "<br>";
?>
