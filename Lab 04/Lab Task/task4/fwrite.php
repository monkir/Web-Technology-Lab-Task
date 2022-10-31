<?php
$myfile = fopen("test.txt", "w") or die("Unable to open file!");
$txt = "“Hi, my name is monkir \n";
fwrite($myfile,$txt);
$txt = "This is my 7th semester\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
