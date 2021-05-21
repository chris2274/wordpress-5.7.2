<?php
$link = mysqli_connect('10.0.1.162', 'chris', 'P@ssw0rd!');
if (!$link) {
die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';
mysqli_close($link);
?>