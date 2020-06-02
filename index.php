<?php

$sortType = $argv[1] ?? 'merge_sort';
include "sort/$sortType.php";

$res = $sortType([15, 6, 18, 5, 13, 3, 1, 17, 11, 8, 7, 19, 16, 2, 4, 14, 9, 20, 10, 12]);
var_dump($res);
