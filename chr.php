<?php
$str = "The string ends in escape: ";
$str .= chr(27); /* add an escape character at the end of $str */

$str = sprintf("The string ends in escape: %c", 27);
?>