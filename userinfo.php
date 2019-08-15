<?php
include_once('db.php');

$fname = mysqli_real_escape_string($db, $_POST['fname']);
$sname = mysqli_real_escape_string($db,$_POST['sname']);


if (mysql_query("INSERT INTO `users` (`firstname`, `lastname`) VALUES ('".$fname."','".$sname."')"))
echo"successfully inserted";
else
echo "failed";