<?php

echo "<pre>";
$return_val ="";
$last_line = system("dir c:\\" , $return_val);
echo "</pre>";
echo "ultima linha foi :". $last_line. "<br>";
echo "$return_val";
