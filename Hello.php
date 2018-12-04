<?php
$info = fopen("name.txt", "a");
fwrite($info, $_POST["Naam"]);
fwrite($info, $_POST["Email"]);
fclose($info);
?>