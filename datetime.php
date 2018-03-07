<?php
$dateTime = new DateTime('yesterday',new DateTimeZone('Asia/Shanghai'));
var_dump($dateTime);
echo $dateTime->format('Y-m-d H:i:s');
