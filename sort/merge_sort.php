<?php

function merge_sort(array $arr)
{
    $countArr = \count($arr);

    if ($countArr <= 1) {
        return $arr;
    }

    $left = [];
    $right = [];

    for ($i = 0; $i < $countArr; $i++) {
        if ($i % 2 == 0) {
            $left[] = $arr[$i];
        } else {
            $right[] = $arr[$i];
        }
    }

    $left = merge_sort($left);
    $right = merge_sort($right);
    $res = [];

    $countLeft = \count($left);
    $countRight = \count($right);

    $j = 0;
    $k = 0;

    for ($i = 0; $i < $countArr; $i++) {
        if ($j < $countLeft && $k < $countRight) {
            if ($left[$j] > $right[$k]) {
                $res[] = $right[$k];
                $k++;
            } else {
                $res[] = $left[$j];
                $j++;
            }
        } elseif ($j < $countLeft) {
            $res[] = $left[$j];
            $j++;
        } else {
            $res[] = $right[$k];
            $k++;
        }
    }

    return $res;
}
