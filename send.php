<?php
$username = $_POST["username"];
$message = $_POST["message"];

$txt = "<p>" . $username . ": " . $message . "</p>\n";

echo $txt;
$data = fopen("chat.dat", "a");
fwrite($data, $txt);
fclose($data);
?>
