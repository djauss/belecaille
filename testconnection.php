<?php
$link = mysql_connect('localhost', 'belecailleuser', 'niannian');
if (!$link) {
die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>
