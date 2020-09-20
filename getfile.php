<?php
$filename = file.txt;
   $content = file_get_contents ($filename);
header ('Content-Type: application/octet-stream');
echo $content;

echo "hello";
?>
