<?php
$filename = file.txt;
   $content = file_get_contents ($filename);
header ('Content-Type: application/octet-stream');
print $content;

print "hello";
?>
