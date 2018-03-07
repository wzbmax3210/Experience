<?php
function getClientIp()
{
    $ip = getenv("REMOTE_ADDR");
    $ip1 = getenv("HTTP_X_FORWARDED_FOR");
    $ip2 = getenv("HTTP_CLIENT_IP");
    ($ip1) ? $ip = $ip1 : null ;
    ($ip2) ? $ip = $ip2 : null ;
    return $ip;
}