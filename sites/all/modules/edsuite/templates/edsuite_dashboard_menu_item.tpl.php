<?php

if (array_key_exists('children', $item)) {
    $class = "expanded";
    $close = "";
} else {
    $class = "leaf";
    $close = '</li>';
}
$output = '<li class="' . $class . '">' . l($item['title'], $item['path']) . $close;
echo $output;