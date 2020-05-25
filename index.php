<?php

$sortType = $argv[1] ?? 'merge_sort';
include "sort/$sortType.php";

$res = $sortType([6, 18, 5, 3, 1, 11, 8, 7, 2, 4, 14, 32]);
var_dump($res);
