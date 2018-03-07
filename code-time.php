<?php
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
$variables = 'fuck off';
$start = microtime_float();
for($i = 0;$i < 100000000;$i++){

    $result = "the variables is ${variables}";
}
$end = microtime_float();
echo $end - $start;