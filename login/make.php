<?php 

include "../admin/copy.php";
session_start();

$uname = $_SESSION['user_name'];
$user_data = $_SESSION['data'];



mkdir("../users/@".$uname);
$src = "../admin/update_users";

custom_copy($src, "../users/@".$uname);

// $phar = new PharData('../users/template.tar');
// $phar->extractTo('../users/');
// rename("../users/template","../users/@".$uname);

header("Location: index.php?success=Your account has been created successfully&$user_data");
exit();
?>