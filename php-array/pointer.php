<?php
$fruits = array(
    'apple' => 'red',
    'banana' => 'yellow',
    'watermelon' => 'green'
);
$fruits2 = array(
    'apple' => 'red2',
    'banana' => 'yellow',
    'watermelon' => 'green'
);
/*遍历数组的方法
reset($fruits);
while(list($key,$value) = each($fruits)){
    echo "$key => $value \n";
}
*/

var_dump(array_combine($fruits,$fruits2));
