<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Akash gaur\n";
fwrite($myfile, $txt);
$txt ="Akash gaur\n";
fwrite($myfile, $txt);
fclose($myfile);
?>