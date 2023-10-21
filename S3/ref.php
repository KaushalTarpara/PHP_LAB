<?php

function incr(&$val){
    $val++;
    echo "$val";
}

$val = 5;
echo $val;
incr($val);
incr($val);
echo $val;