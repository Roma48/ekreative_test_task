<?php

if(is_numeric($value)) {
    $decimals = is_float($value * 1) ? 2 : 0;
    echo number_format($value, $decimals);
} else {
    echo $value;
}